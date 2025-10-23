<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'type',
        'experience_type_id',
        'slug',
        'short_summary',
        'body',
        'inclusions',
        'what_to_wear',
        'exclusions',
        'accessibility_info',
        'booking_policy',
        'good_to_know',
        'traveler_qa',
        'duration_label',
        'group_size',
        'difficulty_level',
        'base_price',
        'show_price_publicly',
        'hero_image_path',
        'gallery',
        'is_published',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'inclusions' => 'array',
        'exclusions' => 'array',
        'traveler_qa' => 'array',
        'gallery' => 'array',
        'is_published' => 'boolean',
        'show_price_publicly' => 'boolean',
        'base_price' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($experience) {
            if (empty($experience->slug)) {
                $experience->slug = Str::slug($experience->title);
            }
        });
    }

    public function experienceType(): BelongsTo
    {
        return $this->belongsTo(ExperienceType::class);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('created_at');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
