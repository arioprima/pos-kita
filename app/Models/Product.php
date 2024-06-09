<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;


    protected $fillable = [
        'product_name',
        'description',
        'product_category_id',
    ];

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
