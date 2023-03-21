<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Unit extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    /**
     * Get the shape associated with the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function shape()
    {
        return $this->hasOne(Shape::class);
    }

    /**
     * Get the view that owns the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function view()
    {
        return $this->belongsTo(View::class);
    }

    /**
     * The paymentPlans that belong to the Unit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paymentPlans()
    {
        return $this->belongsToMany(PaymentPlan::class, 'payment_plan_unit', 'unit_id', 'payment_plan_id');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(300)->keepOriginalImageFormat();

        $this->addMediaConversion('medium')->width(600)->keepOriginalImageFormat();
        
        $this->addMediaConversion('large')->width(1280)->keepOriginalImageFormat();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('portrait')->singleFile();
        $this->addMediaCollection('isometric')->singleFile();
        $this->addMediaCollection('gallery');
        $this->addMediaCollection('floor')->singleFile();
        $this->addMediaCollection('blueprint')->singleFile();

    }

}