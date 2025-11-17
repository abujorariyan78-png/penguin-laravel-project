<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Womanpage extends Model
{
    protected $fillable=[
        'title','sub_title','price','woman_image'
    ];
}
