<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedPeople extends Model
{
    protected $fillable = [
        'name',
        'email',
        'designation',
        'image',
        'description',
        'status'
    ];
    use HasFactory;
}
