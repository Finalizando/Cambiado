<?php
/**
     * Nombre del archivo: usuario_app.php
     * Descripción:
     * Fecha de creación:08/11/2016
     * Creado por: Juan Carlos Centeno Borja
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class usuario_app extends Model
{
    use EntrustUserTrait;
    protected $table = 'usuario_app';
    protected $fillable = ['email_usuario', 
        'nombre_usuario',
        'nombres_usuario',
        'apellidos_usuario',
        'numero_dui',
        'estado_usuario'
        ];
    protected $hidden = ['contrasenia_usuario'];
    protected $primaryKey = 'id_usuario_app';
    public $timestamps = false;
    
}
