<?php

namespace App\Repositories;

use App\Models\vehiculo;
use App\Repositories\BaseRepository;

/**
 * Class vehiculoRepository
 * @package App\Repositories
 * @version August 25, 2019, 5:08 pm UTC
*/

class vehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'color',
        'id_marca',
        'tipo_vehiculo',
        'id_propietario',
        'id_conductor'
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
        return vehiculo::class;
    }
}
