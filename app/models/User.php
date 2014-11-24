<?php
//use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\Reminders\RemindableTrait;
//use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface/*, RemindableInterface*/ {
    //use UserTrait, RemindableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'USERS';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = array('password');

    protected $fillable = array('nombre', 'correo', 'password');

    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken(){
        return $this->rememberToken;
    }

    public function setRememberToken($token){
        $this->rememberToken = $token;
    }

    public function getRememberTokenName(){
        return $this->rememberTokenName;
    }

}