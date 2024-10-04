<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_desc',
        'image',
        'description',
        'dop',
        'website',
        'city',
        'phone',
        'email',
        'age',
        'degree',
        'freelance',
    ];
}
