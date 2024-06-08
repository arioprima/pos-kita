<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductCategory extends Model
{
    use SoftDeletes;

    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;


    protected $fillable = [
        'product_category_name'
    ];

    public function stores()
    {
        // return $this->belongsToMany(User::class);
        return $this->belongsToMany(Store::class, 'store_product_categories', 'product_category_id', 'store_id');

    }
}
