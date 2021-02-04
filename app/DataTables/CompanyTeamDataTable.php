<?php

namespace App\DataTables;

use App\Models\CompanyTeam;

/**
 * Class CompanyTeamDataTable
 */
class CompanyTeamDataTable
{
    /**
     * @return CompanyTeam
     */
    public function get()
    {
        /** @var CompanyTeam $query */
        $query = CompanyTeam::query()->select('company_teams.*');

        return $query;
    }
}
