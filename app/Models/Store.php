<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $table = 'stores';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;


    protected $fillable = [
        'store_name',
        'store_location',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
