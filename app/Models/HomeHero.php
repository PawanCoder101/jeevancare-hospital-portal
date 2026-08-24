<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHero extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'subheading',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
        'image'
    ];
}
