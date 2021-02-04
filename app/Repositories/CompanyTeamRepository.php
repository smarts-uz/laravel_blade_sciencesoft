<?php

namespace App\Repositories;

use App\Models\CompanyTeam;
use App\Repositories\BaseRepository;

/**
 * Class CompanyTeamRepository
 * @package App\Repositories
 * @version February 4, 2021, 5:55 am UTC
*/

class CompanyTeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'job',
        'image',
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
        return CompanyTeam::class;
    }
}
