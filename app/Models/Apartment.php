<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApartmentImage;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'object_type', 'created_at', 'updated_at', 'housing_type', 'apartment_type', 'count_room', 'price', 'square', 'floor'];

    public function images() {
        return $this->hasMany(ApartmentImage::class);
    }
}
