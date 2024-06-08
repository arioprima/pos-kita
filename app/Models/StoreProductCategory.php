<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class StoreProductCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'store_product_categories';
    protected $primaryKey = 'id';
    public $incrementing =  true;
    public $timestamps = true;

    protected $fillable = [
        'store_id',
        'product_category_id',
    ];

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }}
