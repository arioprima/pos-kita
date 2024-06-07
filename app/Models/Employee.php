<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['store_id', 'first_name', 'last_name', 'email', 'phone', 'position', 'hire_date', 'is_admin'];

    public function users()
    {
        return $this->hasMany(User::class, 'employee_id', 'id');
    }
}
