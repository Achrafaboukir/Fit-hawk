<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products'; // update table name
    protected $primaryKey = 'id'; // update primary key field name
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'category', 'brand', 'stock', 'price', 'date', 'sexe', 'image']; // update fillable fields

    public function sizes()
    {
        return $this->hasMany(ProductSize::class, 'product_id'); // update foreign key field name
    }
}
