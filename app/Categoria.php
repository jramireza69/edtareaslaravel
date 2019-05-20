<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categoria
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categoria whereUpdatedAt($value)
 */
class Categoria extends Model
{
    //
}
