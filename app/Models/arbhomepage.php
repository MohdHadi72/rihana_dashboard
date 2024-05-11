<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arbhomepage extends Model
{
    use HasFactory;

    protected $fillable = ['ArbHomeImg1', 'ArbHomeHeading1'];
}
