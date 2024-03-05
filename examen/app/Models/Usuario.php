<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Libro[] $libros
 * @property Resena[] $resenas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    use SoftDeletes;

    static $rules = [
		'nombre' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class, 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resenas()
    {
        return $this->hasMany(\App\Models\Resena::class, 'id', 'usuario_id');
    }
    

}
