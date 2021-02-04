<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Blog
 * @package App\Models
 * @version February 2, 2021, 9:58 am UTC
 *
 * @property string $user_id
 * @property string $tag
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $description_text
 */
class Blog extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'blogs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'tag',
        'image',
        'title',
        'description',
        'description_text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        //'tag' => 'string',
        //'image' => 'string',
        'title' => 'string',
        'description' => 'string',
        'description_text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable|integer',
        //'tag' => 'required|string',
        //'image' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'description_text' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
