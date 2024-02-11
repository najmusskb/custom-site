<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands'; // Adjust table name as needed
    protected $fillable = ['name', 'slug', 'description', 'is_featured', 'status', 'image'];
}
