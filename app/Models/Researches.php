<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researches extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'page_description',
        'icon_class',
        'icon_title',
        'icon_section_id',
        'section_title',
        'section_description',
        'section_image',
        'status'

    ];

}
