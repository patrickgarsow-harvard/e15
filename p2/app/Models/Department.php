<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable = [
      'name',
      'description',
      'phone',
      'extension',
      'email',
      'page_content',
      'hidden',
  ];

  use HasFactory;

  public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->firstOrFail();
    }
}
