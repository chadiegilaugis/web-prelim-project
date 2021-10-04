<?php

namespace App\Repositories;

use App\Models\Pricing;
use App\Repositories\BaseRepository;

/**
 * Class PricingRepository
 * @package App\Repositories
 * @version October 3, 2021, 12:06 pm UTC
*/

class PricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product_name',
        'Brand',
        'Supplier',
        'Price'
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
        return Pricing::class;
    }
}
