<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngHome extends Model
{
    use HasFactory;
    protected $fillable = ['HomeImg1', 'HomeHeading1'];
}
