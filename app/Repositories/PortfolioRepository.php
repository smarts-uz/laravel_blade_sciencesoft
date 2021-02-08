<?php

namespace App\Repositories;

use App\Models\Portfolio;
use App\Repositories\BaseRepository;

/**
 * Class PortfolioRepository
 * @package App\Repositories
 * @version February 5, 2021, 11:52 am UTC
*/

class PortfolioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'technology',
        'industry',
        'name',
        'title',
        'sub_title',
        'image',
        'blade_link'
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
        return Portfolio::class;
    }
}
