<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Libro
 *
 * @property $id
 * @property $titulo
 * @property $usuario_id
 * @property $categoria_id
 * @property $autor_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Autor $autor
 * @property Categoria $categoria
 * @property Usuario $usuario
 * @property Resena[] $resenas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    use SoftDeletes;

    static $rules = [
		'titulo' => 'required|string',
		'usuario_id' => 'required',
		'categoria_id' => 'required',
		'autor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','usuario_id','categoria_id','autor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autor()
    {
        return $this->belongsTo(\App\Models\Autor::class, 'autor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resenas()
    {
        return $this->hasMany(\App\Models\Resena::class,  'id', 'libro_id');
    }
    

}
