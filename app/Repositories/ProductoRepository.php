<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version October 10, 2020, 8:25 am -04
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'precio',
        'categoria'
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
        return Producto::class;
    }
}
