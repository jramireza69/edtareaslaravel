<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cliente
 *
 * @property int $id
 * @property int $tipoc_id
 * @property int $user_id
 * @property string $direccion
 * @property int $idciudad
 * @property string $celular
 * @property string $observacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereIdciudad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereTipocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cliente whereUserId($value)
 * @mixin \Eloquent
 */
class Cliente extends Model
{
    protected $fillable = ['user_id'];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function tipoc () {
        return $this->belongsTo(TipoCliente::class);
    }
    public function vd () {
        return $this->hasMany(Vd::class);
    }

}
