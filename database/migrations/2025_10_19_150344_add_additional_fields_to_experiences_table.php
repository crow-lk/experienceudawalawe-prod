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
            $table->string('subtitle')->nullable()->after('title');
            $table->string('type')->nullable()->after('subtitle');
            $table->string('group_size')->nullable()->after('duration_label');
            $table->string('difficulty_level')->default('Easy')->after('group_size');
            $table->text('what_to_wear')->nullable()->after('inclusions');
            $table->json('exclusions')->nullable()->after('what_to_wear');
            $table->text('accessibility_info')->nullable()->after('exclusions');
            $table->text('booking_policy')->nullable()->after('accessibility_info');
            $table->text('good_to_know')->nullable()->after('booking_policy');
            $table->json('traveler_qa')->nullable()->after('good_to_know');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn([
                'subtitle',
                'type',
                'group_size',
                'difficulty_level',
                'what_to_wear',
                'exclusions',
                'accessibility_info',
                'booking_policy',
                'good_to_know',
                'traveler_qa'
            ]);
        });
    }
};
