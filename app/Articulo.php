<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Articulo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $idcategoria
 * @property string $nombre
 * @property string|null $observacion
 * @property string $valor
 * @property string|null $costo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereCosto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereIdcategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereObservacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Articulo whereValor($value)
 */
class Articulo extends Model
{
    //
}
