<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shift extends Model
{
    use SoftDeletes;

    protected $table = 'shifts';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;


    protected $fillable = [
        'shift_name',
        'shift_date',
        'start_time',
        'end_time',
    ];

    public function users()
    {
        // return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class, 'user_shifts', 'shift_id', 'user_id');

    }}
