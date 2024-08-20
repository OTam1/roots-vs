<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'excerpt',
        'excerpt_ar',
        'description',
        'description_ar',
        'date',
        'image',
        'writer',
        'writer_ar',
        'link',
        'visibility',
    ];

}