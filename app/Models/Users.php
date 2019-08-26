<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Users
 * @package App\Models
 * @version August 25, 2019, 5:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection idPropietarios
 * @property \Illuminate\Database\Eloquent\Collection vehiculos
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class Users extends Model
{

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'segundo_nombre',
        'apellidos',
        'direccion',
        'telefono',
        'cedula',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'segundo_nombre' => 'string',
        'apellidos'=> 'string',
        'direccion'=> 'string',
        'telefono'=> 'string',
        'cedula'=> 'integer',
        'estado'=> 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function idPropietarios()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'id_propietario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vehiculos()
    {
        return $this->belongsToMany(\App\Models\Vehiculo::class, 'vehiculo_conductor');
    }
}
