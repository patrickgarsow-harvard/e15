<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }

    protected $fillable = [
        'company',
        'first_name',
        'middle_name',
        'last_name',
        'name_suffix',
        'nickname',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'zipext',
        'mail_address',
        'mail_address2',
        'mail_city',
        'mail_state',
        'mail_zip',
        'mail_zipext',
        'primary_email',
        'alternate_email',
        'cell_phone',
        'primary_phone',
        'work_phone',
        'fax',
        'website',
        'twitter_handle',
        'facebook_handle',
        'instagram_handle',
        'linkedin_handle',
        'verified',
        'archived',
        'hidden',
    ];

    public function employee()
    {
        // return $this->belongsTo('App\Contact', 'contact_id');
        // return $this->belongsTo(Contact::class, 'contact_id');
        return $this->hasOne(Employee::class, 'contact_id', 'id');

    }

    protected $primaryKey = 'id';

    use HasFactory;
}
