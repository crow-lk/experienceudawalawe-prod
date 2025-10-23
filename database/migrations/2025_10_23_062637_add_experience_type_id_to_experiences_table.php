<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->foreignId('experience_type_id')->nullable()->after('type')->constrained()->onDelete('set null');
            $table->index('experience_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropForeign(['experience_type_id']);
            $table->dropIndex(['experience_type_id']);
            $table->dropColumn('experience_type_id');
        });
    }
};
