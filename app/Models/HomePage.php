<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'fb_url',
        'in_url',
        'tw_url',
        'li_url',
    ];
}
