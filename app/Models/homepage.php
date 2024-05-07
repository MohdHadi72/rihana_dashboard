<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;
    // $table->timestamps();

    protected $fillable = ['HomeImg1', 'HomeHeading1'];
    
}

