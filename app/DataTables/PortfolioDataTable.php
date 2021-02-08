<?php

namespace App\DataTables;

use App\Models\Portfolio;

/**
 * Class PortfolioDataTable
 */
class PortfolioDataTable
{
    /**
     * @return Portfolio
     */
    public function get()
    {
        /** @var Portfolio $query */
        $query = Portfolio::query()->select('portfolios.*');

        return $query;
    }
}
