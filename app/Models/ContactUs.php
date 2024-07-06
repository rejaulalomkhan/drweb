<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'top_title',
        'image',
        'bottom_title',
        'lab_address',
        'office_address',
        'email'
    ];
}
