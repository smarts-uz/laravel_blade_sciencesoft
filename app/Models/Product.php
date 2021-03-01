<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version February 5, 2021, 5:11 am UTC
 *
 * @property string $name
 * @property string $title
 * @property string $sub_title
 * @property string $read_more_link
 * @property string $view_website_link
 * @property string $image
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'title',
        'sub_title',
        'read_more_link',
        'view_website_link',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'title' => 'string',
        'sub_title' => 'string',
        'read_more_link' => 'string',
        'view_website_link' => 'string',
        //'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'sub_title' => 'nullable',
        'read_more_link' => 'nullable',
        'view_website_link' => 'nullable|string|max:255',
        'image' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
