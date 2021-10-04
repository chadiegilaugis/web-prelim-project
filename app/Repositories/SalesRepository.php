<?php

namespace App\Repositories;

use App\Models\Sales;
use App\Repositories\BaseRepository;

/**
 * Class SalesRepository
 * @package App\Repositories
 * @version October 3, 2021, 11:38 am UTC
*/

class SalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product',
        'Brand',
        'Number_of_items_sold'
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
        return Sales::class;
    }
}
