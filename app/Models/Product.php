<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'description', 'category_id', 'user_id'];
    
    public function user(){
        $this->belongsTo(User::class);
    }
    
    public function category(){
        $this->belongsTo(Category::class);
    }
}