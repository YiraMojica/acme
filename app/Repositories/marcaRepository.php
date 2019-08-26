<?php

namespace App\Repositories;

use App\Models\marca;
use App\Repositories\BaseRepository;

/**
 * Class marcaRepository
 * @package App\Repositories
 * @version August 25, 2019, 5:09 pm UTC
*/

class marcaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return marca::class;
    }
}
