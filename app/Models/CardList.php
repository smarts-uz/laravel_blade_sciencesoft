<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardList extends Model
{
    use HasFactory;

    public $table = 'card_lists';

    public $fillable = [
        'photo',
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
        'photo' => 'string',
        'title' => 'string',
        'sub_title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
//     public static $rules = [
//         'title' => 'required',
//         'description' => 'required'
//     ];
}
