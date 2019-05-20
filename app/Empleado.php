<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Empleado
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $idusuario
 * @property int $idpersona
 * @property string $tipodocumento
 * @property string $numdocumento
 * @property string $direccion
 * @property string $celular
 * @property string $telefono
 * @property string $cargo
 * @property string $observacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereIdpersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereIdusuario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereNumdocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereTipodocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empleado whereUpdatedAt($value)
 */
class Empleado extends Model
{
    //
}
