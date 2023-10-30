<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'product_sizes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['product_id', 'size'];

    public function product()
    {
        return $this->belongsTo(products::class, 'product_id');
    }
}

