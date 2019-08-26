<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class vehiculo
 * @package App\Models
 * @version August 25, 2019, 5:08 pm UTC
 *
 * @property \App\Models\User idPropietario
 * @property \App\Models\Marca idMarca
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string placa
 * @property string color
 * @property integer id_marca
 * @property string tipo_vehiculo
 * @property integer id_propietario
 */
class vehiculo extends Model
{

    public $table = 'vehiculo';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'placa',
        'color',
        'id_marca',
        'tipo_vehiculo',
        'id_propietario',
        'id_conductor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placa' => 'string',
        'color' => 'string',
        'id_marca' => 'integer',
        'tipo_vehiculo' => 'string',
        'id_propietario' => 'integer',
        'id_conductor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'placa' => 'required',
        'tipo_vehiculo' => 'required',
        'id_propietario' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPropietario()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_propietario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMarca()
    {
        return $this->belongsTo(\App\Models\Marca::class, 'id_marca');
    }

    public function idConductor()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_conductor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'vehiculo_conductor');
    }

    public function marca() {
      return $this->hasOne('App\Models\Marca','id','id_marca');
    }
    public function propietario() {
      return $this->hasOne('App\Models\Users','id','id_propietario');
    }
    public function conductor() {
      return $this->hasOne('App\Models\Users','id','id_conductor');
    }


}
