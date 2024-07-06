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
        'block_anchor_id',
        'section_anchor_id',
        'section_title',
        'section_image',
        'section_description',
        'status'
    ];

}
