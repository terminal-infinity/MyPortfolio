<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProtfolioPage extends Model
{
    use HasFactory;

    protected $fillable=['title','category_id','image','client','project_url','description','status'];
}
