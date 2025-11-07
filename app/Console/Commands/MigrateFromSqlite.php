<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateFromSqlite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:from-sqlite 
                            {--backup : Create backup of MySQL data before migration}
                            {--dry-run : Show what would be migrated without actually doing it}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate data from SQLite database to MySQL database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting SQLite to MySQL migration...');

        if ($this->option('dry-run')) {
            $this->warn('DRY RUN MODE - No data will be actually migrated');
        }

        // Create SQLite connection
        $sqliteConfig = [
            'driver' => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix' => '',
            'foreign_key_constraints' => true,
        ];

        config(['database.connections.sqlite_source' => $sqliteConfig]);

        try {
            // Test connections
            $this->info('Testing database connections...');
            
            // Test SQLite
            $sqliteTestQuery = DB::connection('sqlite_source')->select('SELECT COUNT(*) as count FROM users');
            $this->info('✅ SQLite connection successful');
            
            // Test MySQL
            $mysqlTestQuery = DB::connection('mysql')->select('SELECT 1');
            $this->info('✅ MySQL connection successful');

            // Run migrations on MySQL first to ensure tables exist
            $this->info('Ensuring MySQL database schema is up to date...');
            if (!$this->option('dry-run')) {
                $this->call('migrate');
            }

            // Create backup if requested
            if ($this->option('backup')) {
                $this->createBackup();
            }

            // Migrate data for each table
            $tables = [
                'users' => ['id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'profile_photo_path'],
                'experience_types' => ['id', 'name', 'slug', 'description', 'icon', 'is_active', 'sort_order', 'created_at', 'updated_at', 'deleted_at'],
                'experiences' => [
                    'id', 'title', 'slug', 'short_summary', 'body', 'inclusions', 'duration_label', 
                    'base_price', 'hero_image_path', 'gallery', 'is_published', 'sort_order', 
                    'meta_title', 'meta_description', 'created_at', 'updated_at', 'deleted_at', 
                    'subtitle', 'type', 'group_size', 'difficulty_level', 'what_to_wear', 
                    'exclusions', 'accessibility_info', 'booking_policy', 'good_to_know', 
                    'traveler_qa', 'show_price_publicly', 'experience_type_id'
                ]
            ];

            foreach ($tables as $tableName => $columns) {
                $this->migrateTable($tableName, $columns);
            }

            $this->info('✅ Migration completed successfully!');
            
            // Show final counts
            $this->showFinalCounts();

        } catch (\Exception $e) {
            $this->error('❌ Migration failed: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }

    private function migrateTable($tableName, $columns)
    {
        $this->info("Migrating table: {$tableName}");

        // Get data from SQLite
        $sqliteData = DB::connection('sqlite_source')
            ->table($tableName)
            ->get()
            ->toArray();

        $recordCount = count($sqliteData);
        $this->info("Found {$recordCount} records in SQLite {$tableName}");

        if ($recordCount === 0) {
            $this->warn("No data to migrate for {$tableName}");
            return;
        }

        if ($this->option('dry-run')) {
            $this->info("Would migrate {$recordCount} records to MySQL {$tableName}");
            return;
        }

        // Check if MySQL table has existing data
        $existingCount = DB::connection('mysql')->table($tableName)->count();
        
        if ($existingCount > 0) {
            if (!$this->confirm("MySQL {$tableName} table has {$existingCount} existing records. Continue? (This will INSERT new records, not replace existing ones)")) {
                $this->warn("Skipping {$tableName}");
                return;
            }
        }

        // Insert data in chunks to avoid memory issues
        $chunks = array_chunk($sqliteData, 100);
        $bar = $this->output->createProgressBar($recordCount);

        foreach ($chunks as $chunk) {
            $insertData = [];
            
            foreach ($chunk as $record) {
                $record = (array) $record;
                
                // Filter only the columns that exist in our schema
                $filteredRecord = [];
                foreach ($columns as $column) {
                    if (array_key_exists($column, $record)) {
                        $filteredRecord[$column] = $record[$column];
                    }
                }
                
                $insertData[] = $filteredRecord;
            }

            try {
                DB::connection('mysql')->table($tableName)->insert($insertData);
                $bar->advance(count($chunk));
            } catch (\Exception $e) {
                $this->error("\nFailed to insert chunk for {$tableName}: " . $e->getMessage());
                throw $e;
            }
        }

        $bar->finish();
        $this->info("\n✅ Successfully migrated {$recordCount} records to MySQL {$tableName}");
    }

    private function createBackup()
    {
        $this->info('Creating backup of existing MySQL data...');
        
        $backupDir = storage_path('app/backups');
        if (!is_dir($backupDir)) {
            mkdir($backupDir, 0755, true);
        }

        $timestamp = now()->format('Y_m_d_H_i_s');
        $backupFile = $backupDir . "/mysql_backup_{$timestamp}.sql";

        // Get database config
        $host = config('database.connections.mysql.host');
        $port = config('database.connections.mysql.port');
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');

        $passwordOption = $password ? "-p{$password}" : '';

        $command = "mysqldump -h{$host} -P{$port} -u{$username} {$passwordOption} {$database} > {$backupFile}";
        
        exec($command, $output, $returnCode);
        
        if ($returnCode === 0) {
            $this->info("✅ Backup created: {$backupFile}");
        } else {
            $this->warn("⚠️ Backup creation failed, but continuing with migration...");
        }
    }

    private function showFinalCounts()
    {
        $this->info("\n📊 Final Record Counts:");
        
        $tables = ['users', 'experience_types', 'experiences'];
        
        foreach ($tables as $table) {
            $sqliteCount = DB::connection('sqlite_source')->table($table)->count();
            $mysqlCount = DB::connection('mysql')->table($table)->count();
            
            $this->info("{$table}: SQLite({$sqliteCount}) → MySQL({$mysqlCount})");
        }
    }
}