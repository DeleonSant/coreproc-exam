<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    public function images()
    {
        return $this->media()->whereCollectionName('images');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($value)
    {
        $this->price = $value;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setIsActive($value)
    {
        $this->is_active = $value;
        return $this;
    }

    public function getIsActive()
    {
        return (bool) $this->is_active;
    }

    public function hasImages()
    {
        return $this->images()->exists();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->fit(Manipulations::FIT_CROP, 200, 200)
             ->performOnCollections('images');
    }
}
