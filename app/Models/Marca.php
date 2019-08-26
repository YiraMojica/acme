<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class marca
 * @package App\Models
 * @version August 25, 2019, 5:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection idMarcas
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string nombre
 */
class marca extends Model
{

    public $table = 'marca';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'nombre' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function idMarcas()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'id_marca');
    }
}
