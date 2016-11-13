<?php
/**
     * Nombre del archivo: usuario_app.php
     * Descripción:
     * Fecha de creación:08/11/2016
     * Creado por: Juan Carlos Centeno Borja
     */

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class permiso_app extends EntrustPermission
{
    protected $table = 'permiso_app';
    public $timestamps = false;
    protected $primaryKey = 'id_permiso_app';
    protected $fillable = [
        'nombre_permiso',
        'nombre_mostrar'
    ];
 
   //establecemos las relacion de muchos a muchos con el modelo rol_usuario, ya que un permiso
   //lo pueden tener varios roles y un rol puede tener varios permisos
   public function fnc_rol_usuario(){
        return $this->belongsToMany('App\Models\rol_usuario');
    }
}
