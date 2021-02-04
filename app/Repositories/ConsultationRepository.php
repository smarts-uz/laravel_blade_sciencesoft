<?php

namespace App\Repositories;

use App\Models\Consultation;
use App\Repositories\BaseRepository;

/**
 * Class ConsultationRepository
 * @package App\Repositories
 * @version February 2, 2021, 12:34 pm UTC
*/

class ConsultationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fullname',
        'company',
        'email',
        'phone_number',
        'description'
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
        return Consultation::class;
    }
}
