<?php
    /**
     * Fecha de modificación:18/11/2016
     * Creado por: Juan Carlos Centeno Borja
     */
namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use EntrustUserTrait;
    use Authenticatable, CanResetPassword;
    protected $table = 'usuario_app';
    protected $fillable = [
        'email_usuario', 
        'nombre_usuario',
        'nombres_usuario',
        'apellidos_usuario',
        'numero_dui',
        'estado_usuario'
        ];
    protected $hidden = ['password'];
    protected $primaryKey = 'id_usuario_app';
    public $timestamps = false;
    //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
       
}
