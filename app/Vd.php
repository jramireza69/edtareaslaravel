<?php

namespace App;

use http\Client;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Vd
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $idpersona
 * @property int $idcentro_costos
 * @property int $idarticulo
 * @property int $iddestino
 * @property string $observacion
 * @property string $condicion
 * @property int $previous_approved
 * @property int $previous_rejected
 * @property string|null $fecha1
 * @property string|null $fecha2
 * @property string|null $observacion1
 * @property int $respuesta
 * @property string|null $prueba
 * @property int $cantidad
 * @property int $otrosrubros
 * @property int $jornada
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereCantidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereCondicion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereFecha1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereFecha2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereIdarticulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereIdcentroCostos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereIddestino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereIdpersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereJornada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereObservacion1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereOtrosrubros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd wherePreviousApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd wherePreviousRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd wherePrueba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereRespuesta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereUpdatedAt($value)
 * @property int $idempleado
 * @property-read \App\Articulo $articulo
 * @property-read \App\Centrocosto $centrocosto
 * @property-read \App\Destino $destino
 * @property-read \App\Persona $persona
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vd whereIdempleado($value)
 */
class Vd extends Model
{
    const PENDIENTE=1;
    const INICIADO=2;
    const COMPLETADO=3;
    const RECIBIDO=4;


    public function centrocosto () {
        return $this->belongsTo(Centrocosto::class)->select('id', 'nombrecc');
    }
    public function articulo () {
        return $this->belongsTo(Articulo::class)->select('id');
    }
    public function destino () {
        return $this->belongsTo(Destino::class)->select('id','ndestino');
    }
    public function empleados () {
        return $this->belongsTo(Empleado::class);
    }
    public function clientes () {
        return $this->belongsTo(Cliente::class);
    }
    public function users () {
        return $this->belongsToMany(User::class);
    }
}
