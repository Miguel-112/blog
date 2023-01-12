<?php

namespace App\Models;

use Database\Factories\Categoryfactory;
use Database\Factories\CategoryfactoryFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    

    use HasFactory;

    protected static function newFactory()
    {
        return  CategoryFactory::new();
    }

     
    //relacion de uno a muchos

    public function posts(){
        return $this->hasMany(Post::class);
    }

  
    
}
