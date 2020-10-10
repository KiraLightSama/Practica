<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version October 10, 2020, 8:25 am -04
 *
 * @property \Illuminate\Database\Eloquent\Collection $cuentasProductos
 * @property string $nombre
 * @property integer $precio
 * @property string $categoria
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'precio',
        'categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'precio' => 'integer',
        'categoria' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'precio' => 'required',
        'categoria' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cuentasProductos()
    {
        return $this->hasMany(\App\Models\CuentasProducto::class, 'producto_id');
    }


    public function cuentas()
    {
        return $this->belongsToMany(\App\Models\Cuenta::class, 'cuentas_productos')->withPivot('cantidad', 'precio');
    }
}
