<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CompanyTeam
 * @package App\Models
 * @version February 4, 2021, 5:55 am UTC
 *
 * @property string $name
 * @property string $job
 * @property string $image
 * @property string $description
 */
class CompanyTeam extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'company_teams';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'job',
        'image',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'job' => 'string',
        //'image' => 'file',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'job' => 'required|string|max:255',
        'image' => 'required',
        'description' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
