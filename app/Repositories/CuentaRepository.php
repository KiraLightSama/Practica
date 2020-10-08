<?php

namespace App\Repositories;

use App\Models\Cuenta;
use App\Repositories\BaseRepository;

/**
 * Class CuentaRepository
 * @package App\Repositories
 * @version October 8, 2020, 2:22 pm -04
*/

class CuentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'cambio',
        'user_id'
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
        return Cuenta::class;
    }
}
