<?php

namespace App\Repositories;

use App\Models\contact;
use App\Repositories\BaseRepository;

/**
 * Class contactRepository
 * @package App\Repositories
 * @version March 4, 2021, 9:29 am UTC
*/

class contactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return contact::class;
    }
}
