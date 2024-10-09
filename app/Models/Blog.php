<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog'; 

    protected $fillable = [
        'title',
        'title_ar',
        'excerpt',
        'excerpt_ar',
        'description',
        'description_ar',
        'date',
        'image',
        'image_ar',
        'writer',
        'writer_ar',
        'visibility',
    ];

}
