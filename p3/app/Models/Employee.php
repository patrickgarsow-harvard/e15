<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_id',
        'department_id',
        'title',
        'reference_id',
        'active',
        'retired',
        'started',
        'terminated',
    ];

    public function contact()
    {
        // return $this->belongsTo('App\Contact', 'contact_id');
        // return $this->belongsTo(Contact::class, 'contact_id');
        // return $this->hasOne(Contact::class, 'id');
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }
}
