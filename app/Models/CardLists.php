<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CardLists
 * @package App\Models
 * @version February 3, 2021, 7:17 am UTC
 *
 * @property string $image
 * @property string $title
 * @property string $sub_title
 * @property string $description
 */
class CardLists extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'card_lists';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'title',
        'sub_title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title' => 'string',
        'sub_title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        //'image' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'sub_title' => 'required',
        'description' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
