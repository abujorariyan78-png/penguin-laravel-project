<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manpage extends Model
{
     protected $fillable=[
        'title','sub_title','price','man_image'
    ];
}
