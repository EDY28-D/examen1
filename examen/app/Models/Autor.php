<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'name' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class, 'id', 'autor_id');
    }
    

}
