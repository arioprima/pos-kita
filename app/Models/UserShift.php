<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserShift extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'user_shifts';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;

    protected $fillable = [
        'shift_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function shifts()
    {
        return $this->belongsTo(Shift::class, 'shift_id', 'id');
    }
}
