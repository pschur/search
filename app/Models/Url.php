<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasMD5Id;

class Url extends Model
{
    use HasFactory, HasMD5Id;

    protected $md5Key = 'url';

    protected $fillable = [
        'domain',
        'url',
        'description',
        'tags',
        'data',
    ];

    protected $casts = [
        'tags' => 'json',
        'data' => 'json'
    ];
}
