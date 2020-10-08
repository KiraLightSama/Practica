<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version October 8, 2020, 2:22 pm -04
 *
 * @property \App\Models\Categoria $categoria
 * @property \Illuminate\Database\Eloquent\Collection $cuentasProductos
 * @property string $nombre
 * @property integer $precio
 * @property integer $categoria_id
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
        'categoria_id'
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
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'precio' => 'required',
        'categoria_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cuentasProductos()
    {
        return $this->hasMany(\App\Models\CuentasProducto::class, 'productos_id');
    }

    public function cuentas()
    {
        return $this->belongsToMany(\App\Models\Cuenta::class, 'cuentas_productos', 'cuenta_id', 'productos_id')
            ->withPivot('cantidad');
    }
}
