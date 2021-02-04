<?php

namespace App\DataTables;

use App\Models\Blog;

/**
 * Class BlogDataTable
 */
class BlogDataTable
{
    /**
     * @return Blog
     */
    public function get()
    {
        /** @var Blog $query */
        $query = Blog::query()->select('blogs.*');

        return $query;
    }
}
