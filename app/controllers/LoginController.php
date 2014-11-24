<?php
class LoginController extends BaseController {
    public function showLogin()
    {
        return View::make('backoffice/login');
    }
    public function doLogin(){

        /*$encrypted = Hash::make( Input::get('password') );
        //$encrypted = Crypt::encrypt(Input::get('password'));

        print_r($encrypted);die;*/


        if (Auth::attempt( array('correo' => Input::get('username'), 'password' => Input::get('password') ) )){
            return Redirect::to('/admin')->with('mensaje_success', 'Bienvenido al Administrador de ConquistadoresClub.CL');
        }else{
            return Redirect::to('/login')->with('mensaje_error', 'Ingreso invalido');
        }
    }

    public function doLogout(){
        Auth::logout();
        return Redirect::to('/login')
            ->with('mensaje_success', 'Tu sesión ha sido cerrada.');
    }
}