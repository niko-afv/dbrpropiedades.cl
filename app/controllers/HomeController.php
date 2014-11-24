<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    private $vars = array();

    public function index()
    {
        $this->vars['page'] = 'index';
        return View::make('index', $this->vars);
    }

    public function about()
    {
        $this->vars['page'] = 'about';
        return View::make('about', $this->vars);
    }
    
    public function propiedades()
    {
        $this->vars['page'] = 'propiedades';

        $propiedades = Propiedad::get();
        $xregion = Propiedad::find(1)->region()->get();
        $regiones = Region::getRegionesConPropiedades();

        return View::make('propiedades', $this->vars, array(
            'propiedades' => $propiedades,
            'regiones'  => $regiones
        ));
    }

    public function contacto()
    {
        $this->vars['page'] = 'contacto';
        return View::make('contact', $this->vars);
    }
    
    

}
