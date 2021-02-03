<?php

namespace App\DataTables;

use App\Models\CardLists;

/**
 * Class CardListsDataTable
 */
class CardListsDataTable
{
    /**
     * @return CardLists
     */
    public function get()
    {
        /** @var CardLists $query */
        $query = CardLists::query()->select('card_lists.*');

        return $query;
    }
}
