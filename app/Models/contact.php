<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class contact
 * @package App\Models
 * @version March 4, 2021, 9:29 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $service
 * @property string $budget
 * @property string $want_to_start
 * @property string $requirement
 * @property string $description
 * @property string $file_name
 * @property string $file_path
 */
class contact extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'contacts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone_number',
        'service',
        'budget',
        'want_to_start',
        'requirement',
        'description',
        'file_name',
        'file_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'service' => 'string',
        'budget' => 'string',
        'want_to_start' => 'string',
        'requirement' => 'string',
        'description' => 'string',
        'file_name' => 'string',
        'file_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'service' => 'required|string',
        'budget' => 'required|string|max:255',
        'want_to_start' => 'required|string|max:255',
        'requirement' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'file_name' => 'nullable|string|max:255',
        'file_path' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
