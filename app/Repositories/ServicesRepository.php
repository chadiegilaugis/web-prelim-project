<?php

namespace App\Repositories;

use App\Models\Services;
use App\Repositories\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version September 27, 2021, 2:20 am UTC
*/

class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Message',
        'Email'
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
        return Services::class;
    }
}
