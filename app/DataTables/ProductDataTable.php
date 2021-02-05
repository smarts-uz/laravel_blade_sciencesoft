<?php

namespace App\DataTables;

use App\Models\Product;

/**
 * Class ProductDataTable
 */
class ProductDataTable
{
    /**
     * @return Product
     */
    public function get()
    {
        /** @var Product $query */
        $query = Product::query()->select('products.*');

        return $query;
    }
}
