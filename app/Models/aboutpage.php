<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutpage extends Model
{
    use HasFactory;
     protected $table = 'aboutpages'; // Specify the table name if it's different from the default convention

    protected $fillable = [
        'heading_one',
        'heading_two',
        'heading_three',
        'heading_four',
        'paragraph_one',
        'paragraph_two',
        'paragraph_three',
        'paragraph_four',
    ];
    
}
