<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'technologiesused',
        'Role',
        'ViewOnline',
        'image',
        'type'
    ];
}