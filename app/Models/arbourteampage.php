<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arbourteampage extends Model
{
    use HasFactory;

    protected $fillable = ['ArbTeamImg', 'ArbTeamPeragraph' , 'ArbTeamHeading' , 'ArbTeamPost' ];
}
