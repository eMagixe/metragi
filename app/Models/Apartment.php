<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'object_type', 'created_at', 'updated_at', 'housing_type', 'apartment_type', 'count_room', 'price', 'square', 'floor'];
}
