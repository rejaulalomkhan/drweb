<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'block_title',
        'block_image',
        'section_title',
        'section_image',
        'section_description',
        'status'
    ];

}
