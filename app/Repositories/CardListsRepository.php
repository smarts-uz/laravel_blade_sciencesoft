<?php

namespace App\Repositories;

use App\Models\CardLists;
use App\Repositories\BaseRepository;

/**
 * Class CardListsRepository
 * @package App\Repositories
 * @version February 3, 2021, 7:17 am UTC
*/

class CardListsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'title',
        'sub_title',
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
        return CardLists::class;
    }
}
