<?php

class AdminPropiedadesController extends BaseController {

    private $vars = array();

    public function crear()
    {
        $this->vars['page'] = 'propiedades_crear';
        return View::make('backoffice/propiedades', $this->vars);
    }
}
