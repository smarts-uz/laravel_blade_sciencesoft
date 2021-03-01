<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Consultation
 * @package App\Models
 * @version February 2, 2021, 12:34 pm UTC
 *
 * @property string $fullname
 * @property string $company
 * @property string $email
 * @property string $phone_number
 * @property string $description
 */
class Consultation extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'consultations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fullname',
        'company',
        'email',
        'phone_number',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fullname' => 'string',
        'company' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'description' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
