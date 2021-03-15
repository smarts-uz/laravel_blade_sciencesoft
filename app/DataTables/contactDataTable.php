<?php

namespace App\DataTables;

use App\Models\contact;

/**
 * Class contactDataTable
 */
class contactDataTable
{
    /**
     * @return contact
     */
    public function get()
    {
        /** @var contact $query */
        $query = contact::query()->select('contacts.*');

        return $query;
    }
}
