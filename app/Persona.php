<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Persona
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $tipo_persona
 * @property string $nombre
 * @property string $tipo_documento
 * @property string $num_documento
 * @property string $direccion
 * @property int $idciudad
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property string $mail1
 * @property string $observacion
 * @property int $idgerente
 * @property int $idparametros
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereIdciudad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereIdgerente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereIdparametros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereMail1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereNumDocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereTipoDocumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereTipoPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Persona whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read \App\Vd $vd
 */
class Persona extends Model
{
    public function users () {
        return $this->belongsToMany(User::class);

    }
    public function vd () {
        return $this->belongsTo(Vd::class);
    }

}
