<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;

    protected $fillable = [
        'store_id',
        'category_name',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}
