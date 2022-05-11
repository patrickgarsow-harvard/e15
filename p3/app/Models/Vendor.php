<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'account_id',
    ];

    public function contact()
    {
        // return $this->belongsTo('App\Contact', 'contact_id');
        // return $this->belongsTo(Contact::class, 'contact_id');
        // return $this->hasOne(Contact::class, 'id');
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
}
