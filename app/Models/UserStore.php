<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserStore extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'user_stores';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;

    protected $fillable = [
        'store_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
}
