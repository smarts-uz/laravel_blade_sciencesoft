<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Portfolio
 * @package App\Models
 * @version February 5, 2021, 11:52 am UTC
 *
 * @property string $technology
 * @property string $industry
 * @property string $name
 * @property string $title
 * @property string $sub_title
 * @property string $image
 * @property string $blade_link
 */
class Portfolio extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'portfolios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'technology',
        'industry',
        'name',
        'title',
        'sub_title',
        'image',
        'blade_link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'technology' => 'string',
        'industry' => 'string',
        'name' => 'string',
        'title' => 'string',
        'sub_title' => 'string',
        'image' => 'string',
        'blade_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'technology' => 'nullable|string',
        'industry' => 'nullable|string',
        'name' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'sub_title' => 'nullable',
        'image' => 'nullable',
        'blade_link' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
