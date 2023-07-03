<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'title',
        'route_length',
        'initial_height',
        'final_height',
        'maps',
        'photo'
    ];
}
