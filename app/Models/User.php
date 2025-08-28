<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'ci',
        'nombres',
        'primerApellido',
        'segundoApellido',
        'nombreUsuario',
        'password',
        'direccion',
        'rol',
    ];

    public function setNombresAttribute($value)
    {
        $this->attributes['nombres'] = strtoupper($value);
    }

    public function setPrimerApellidoAttribute($value)
    {
        $this->attributes['primerApellido'] = strtoupper($value);
    }

    public function setSegundoApellidoAttribute($value)
    {
        $this->attributes['segundoApellido'] = strtoupper($value);
    }

    public function setNombreUsuarioAttribute($value)
    {
        $this->attributes['nombreUsuario'] = strtoupper($value);
    }

    public function setDireccionAttribute($value)
    {
        $this->attributes['direccion'] = strtoupper($value);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
}
