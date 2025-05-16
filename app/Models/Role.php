<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public const ROLES = ['admin', 'user', 'teacher'];

    /**
     * Relación muchos a muchos con el modelo User.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
