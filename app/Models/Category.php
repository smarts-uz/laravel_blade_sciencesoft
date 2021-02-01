<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      public function children(){
        return $this->hasMany( 'App\Models\Category', 'category_id', 'id' );
      }
      
      public function parent(){
        return $this->hasOne( 'App\Models\Category', 'id', 'category_id' );
      }

      public function categories()
      {
          return $this->hasMany(Category::class);
      }

      public function childrenCategories()
      {
          return $this->hasMany(Category::class)->with('categories');
      }
}
   