<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'start_date_time',
        'end_date_time',
        'gallery_id',
        'page_content',
        'event_type_id',
        'page_id',
        'hidden',
        'listed',
    ];
}
