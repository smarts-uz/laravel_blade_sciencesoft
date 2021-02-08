<?php

namespace App\DataTables;

use App\Models\News;

/**
 * Class NewsDataTable
 */
class NewsDataTable
{
    /**
     * @return News
     */
    public function get()
    {
        /** @var News $query */
        $query = News::query()->select('news.*');

        return $query;
    }
}
