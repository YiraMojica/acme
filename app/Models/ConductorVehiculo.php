<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConductorVehiculo extends Model
{
      public $table = 'vehiculo_conductor';

      const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';

  public function conductor() {
      return $this->hasOne('App\Models\Users','id','id_conductor');
  }

  public function vehiculo() {
      return $this->hasOne('App\Models\Vehiculo','id','id_vehiculo');
  }
}
