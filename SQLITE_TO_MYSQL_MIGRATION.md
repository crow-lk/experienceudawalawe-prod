# SQLite to MySQL Data Migration Guide

## 📋 Overview
This guide shows you how to migrate your SQLite data to MySQL using Laravel seeders for production deployment.

## 🎯 What We Created

### Generated Seeders:
1. **UserDataSeeder.php** - Migrates user accounts
2. **ExperienceTypeDataSeeder.php** - Migrates experience categories 
3. **ExperienceDataSeeder.php** - Migrates all experiences (dynamically reads from SQLite)

## 🚀 Local Testing

Test the seeders locally first:

```bash
# Test individual seeders
php artisan db:seed --class=UserDataSeeder
php artisan db:seed --class=ExperienceTypeDataSeeder
php artisan db:seed --class=ExperienceDataSeeder

# Or run all seeders at once
php artisan db:seed
```

## 🌐 Production Deployment

### Step 1: Upload Files to Server
Upload these files to your production server:
- `database/seeders/UserDataSeeder.php`
- `database/seeders/ExperienceTypeDataSeeder.php`  
- `database/seeders/ExperienceDataSeeder.php`
- `database/seeders/DatabaseSeeder.php` (updated)
- `database/database.sqlite` (your SQLite file)

### Step 2: SSH into Production Server
```bash
ssh username@your-server-ip
cd /path/to/your/laravel/project
```

### Step 3: Run Production Commands

#### Ensure migrations are up to date:
```bash
php artisan migrate --force
```

#### Clear caches:
```bash
php artisan config:clear
php artisan cache:clear
```

#### Run the seeders:
```bash
# Option 1: Run individual seeders
php artisan db:seed --class=UserDataSeeder
php artisan db:seed --class=ExperienceTypeDataSeeder  
php artisan db:seed --class=ExperienceDataSeeder

# Option 2: Run all seeders at once
php artisan db:seed --force
```

#### Verify the migration:
```bash
php artisan tinker --execute="
echo 'Users: ' . \App\Models\User::count() . PHP_EOL;
echo 'Experience Types: ' . \App\Models\ExperienceType::count() . PHP_EOL;
echo 'Experiences: ' . \App\Models\Experience::count() . PHP_EOL;
"
```

## ✅ Expected Results
- **Users:** 1 record
- **Experience Types:** 15 records  
- **Experiences:** 22 records

## 🛡️ Safety Features
- **updateOrInsert:** Prevents duplicate entries
- **Foreign key handling:** Temporarily disables constraints during seeding
- **Chunked processing:** Handles large datasets efficiently
- **Dynamic SQLite reading:** ExperienceDataSeeder reads directly from SQLite file

## 🔧 Advantages of This Approach

### vs Direct Migration:
✅ **Version controlled** - Seeders are committed to your repo
✅ **Repeatable** - Can be run multiple times safely
✅ **Portable** - Works on any server without SQLite dependency
✅ **Clean** - No need to transfer SQLite file for future deployments

### vs SQL Dumps:
✅ **Laravel native** - Uses Laravel's database abstraction
✅ **Safe** - Handles data types and relationships properly
✅ **Flexible** - Easy to modify for future changes

## 📝 Notes for Future Deployments

Once you've run the seeders on production:
1. You can remove the SQLite file from production server
2. Future deployments only need the seeder files
3. New data can be seeded by updating the seeder files

## ⚠️ Important Production Considerations

1. **Backup first:**
   ```bash
   mysqldump -u username -p database_name > backup_$(date +%Y%m%d).sql
   ```

2. **Test on staging** environment before production

3. **Monitor performance** - Large datasets may need optimization

4. **Database maintenance:**
   ```bash
   php artisan optimize:clear
   php artisan config:cache
   ```

## 🎉 Success!
Your SQLite data is now successfully migrated to MySQL using Laravel seeders! 🚀