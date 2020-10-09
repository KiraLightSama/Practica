<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cuenta
 * @package App\Models
 * @version October 8, 2020, 2:22 pm -04
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $cuentasProductos
 * @property string $fecha
 * @property integer $cambio
 * @property integer $user_id
 */
class Cuenta extends Model
{
    use SoftDeletes;

    public $table = 'cuentas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'cambio',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'date',
        'cambio' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'cambio' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'cuentas_productos')->withPivot('cantidad');
    }
}
