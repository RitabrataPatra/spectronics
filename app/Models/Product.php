<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        "catid",
        "title",

        
        
        "price",
    ];


    //below function shows relationship between products and category 
    public function category(){
        return $this->belongsTo(Category::class,'catid', 'id');
    }
}
