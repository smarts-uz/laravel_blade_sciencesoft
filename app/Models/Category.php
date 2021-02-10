<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version January 30, 2021, 11:57 am UTC
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $name_lang
 * @property string $description
 * @property string $description_lang
 * @property string $icon
 * @property string $image
 * @property string $path_blade
 * @property string $link
 * @property boolean $active
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'category_id',
        'name',
        'name_lang',
        'description',
        'description_lang',
        'icon',
        'image',
        'path_blade',
        'link',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'name' => 'string',
        'name_lang' => 'string',
        'description' => 'string',
        'description_lang' => 'string',
        //'icon' => 'string',
        //'image' => 'string',
        'path_blade' => 'string',
        'link' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'nullable',
        'category_id' => 'nullable|integer',
        'name' => 'nullable|string|max:255',
        'name_lang' => 'nullable|string',
        'description' => 'nullable|string',
        'description_lang' => 'nullable|string',
        'icon' => 'nullable|',
        'image' => 'nullable|',
        'path_blade' => 'nullable|string|max:255',
        'link' => 'nullable|string|max:255',
        'active' => 'boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

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

    public function subCategories(){
      return $this->hasMany( 'App\Models\Category', 'category_id', 'id' );
    }
}
