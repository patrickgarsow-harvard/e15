<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'version',
        'upload_datetime',
        'display_datetime',
        'filename',
        'path',
        'description',
        'keywords',
    ];
}
