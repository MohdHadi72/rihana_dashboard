<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arbaboutpage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ArbAboutHeading',
        'ArbAboutPeragraph',
    
    ];
}
