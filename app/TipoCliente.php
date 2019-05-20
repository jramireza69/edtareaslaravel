<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TipoCliente
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TipoCliente whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TipoCliente extends Model
{
    const EMPRESA=1;
    const SAFIL=2;
    const MENUDEO=3;
    const SPYME=4; //No factura, cuenta de cobro corte 15 0 30
}

