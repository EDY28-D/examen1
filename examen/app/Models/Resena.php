<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Resena
 *
 * @property $id
 * @property $contenido
 * @property $usuario_id
 * @property $libro_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resena extends Model
{
    use SoftDeletes;

    static $rules = [
		'contenido' => 'required|string',
		'usuario_id' => 'required',
		'libro_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contenido','usuario_id','libro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function libro()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'libro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id', 'id');
    }
    

}
