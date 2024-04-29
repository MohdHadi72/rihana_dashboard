<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallerypage extends Model
{
    use HasFactory;
    protected $fillable = ['GalleryImg', 'ImageHeading', 'ImageTitle'];
}
