<?php

namespace App\DataTables;

use App\Models\Consultation;

/**
 * Class ConsultationDataTable
 */
class ConsultationDataTable
{
    /**
     * @return Consultation
     */
    public function get()
    {
        /** @var Consultation $query */
        $query = Consultation::query()->select('consultations.*');

        return $query;
    }
}
