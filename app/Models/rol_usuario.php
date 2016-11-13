<?php
/**
     * Nombre del archivo: usuario_app.php
     * Descripción:
     * Fecha de creación:08/11/2016
     * Creado por: Juan Carlos Centeno Borja
     */
namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class rol_usuario extends EntrustRole
{
    protected $table = 'rol_usuario';
    protected $primaryKey = 'id_rol_usuario';
    public $timestamps = false;
    protected $fillable = [
        'nombre_rol'
    ];
   
   //establecemos las relacion de muchos a muchos con el modelo permiso_app, ya que un rol 
   //lo pueden tener varios permisos y un permiso puede tener varios roles
   public function fnc_permiso_app(){
        return $this->belongsToMany('App\Models\permiso_app');
    }
    //establecemos las relacion de uno a muchos con el modelo usuario_app, ya que un rol 
   //lo pueden tener varios usuarios
    public function fnc_usuario_app()
    {
        return $this->hasMany('App\Models\usuario_app');
    }
}
