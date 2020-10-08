<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetalleCuenta
 * @package App\Models
 * @version October 8, 2020, 2:26 pm -04
 *
 * @property \App\Models\Cuenta $cuenta
 * @property \App\Models\Producto $productos
 * @property integer $cantidad
 * @property integer $cuenta_id
 * @property integer $productos_id
 */
class DetalleCuenta extends Model
{
    use SoftDeletes;

    public $table = 'cuentas_productos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cantidad',
        'cuenta_id',
        'productos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'cuenta_id' => 'integer',
        'productos_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad' => 'required',
        'cuenta_id' => 'required',
        'productos_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cuenta()
    {
        return $this->belongsTo(\App\Models\Cuenta::class, 'cuenta_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productos()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'productos_id');
    }
}
