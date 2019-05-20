<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Destino
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $idpersona
 * @property string $ndestino
 * @property string $direccion
 * @property int $idciudad
 * @property string $telefono
 * @property string $observacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereIdciudad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereIdpersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereNdestino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Destino whereUpdatedAt($value)
 */
class Destino extends Model
{
    //
}
