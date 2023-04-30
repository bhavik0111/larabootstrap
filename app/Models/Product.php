<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()  // relation
    {
       return $this->belongsTo(Category::class); //single return (belongsTo)
    }

    public function features()  // relation
    {
       return $this->hasMany(ProductFeature::class); //return multiple (hasMany)
    }

}
