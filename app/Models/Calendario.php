<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calendario
 *
 * @property $id
 * @property $ID_Trabajador
 * @property $ID_Trabajo
 * @property $fecha
 * @property $hora_Entrada
 * @property $hora_Salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Trabajo $trabajo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calendario extends Model
{
    protected $table = 'calendario';
    static $rules = [
		'ID_Trabajador' => 'required',
		'ID_Trabajo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Trabajador','ID_Trabajo','fecha','hora_Entrada','hora_Salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trabajo()
    {
        return $this->hasOne('App\Models\Trabajo', 'id', 'ID_Trabajo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'ID_Trabajador');
    }
    

}
