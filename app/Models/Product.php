<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Product extends Model
{

    use Searchable;

    public function toSearchableArray()
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category' => $this->category->name,  // O un altro campo che vuoi indicizzare dalla categoria

        ];
    }

    use HasFactory;
    protected $fillable = ['title', 'price', 'description', 'category_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public static function toBeRevisedCount(){
        return Product::where('is_accepted', null)->count();
    }
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}