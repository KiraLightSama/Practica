<?php

namespace App\Repositories;

use App\Models\DetalleCuenta;
use App\Repositories\BaseRepository;

/**
 * Class DetalleCuentaRepository
 * @package App\Repositories
 * @version October 8, 2020, 2:26 pm -04
*/

class DetalleCuentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'cuenta_id',
        'productos_id'
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
        return DetalleCuenta::class;
    }
}
