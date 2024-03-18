<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $NOMBRE_PRODUCTO
 * @property $CANTIDAD_PRODUCTO
 * @property $DESCRIPCION
 * @property $CATEGORIA_PRODUCTOS
 * @property $PRECIO_PRODUCTO
 * @property $IMAGEN_PRODUCTO
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'NOMBRE_PRODUCTO' => 'required',
		'CANTIDAD_PRODUCTO' => 'required',
		'DESCRIPCION' => 'required',
		'PRECIO_PRODUCTO' => 'required',
		'IMAGEN_PRODUCTO' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NOMBRE_PRODUCTO','CANTIDAD_PRODUCTO','DESCRIPCION','CATEGORIA_PRODUCTOS','PRECIO_PRODUCTO','IMAGEN_PRODUCTO'];



}
