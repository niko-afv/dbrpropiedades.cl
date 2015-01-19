<?php

class HomeController extends BaseController {
    
    private $vars = array();

    public function index()
    {
        $topPropiedades = new HelperListarPropiedad(FALSE);
        $topPropiedades->getTopPropiedades();

        $this->vars['page'] = 'index';
        $this->vars['topPropiedades'] = $topPropiedades->toArray();
        
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
    
    public function propiedad_ver($id_propiedad)
    {
        $propiedad = Propiedad::find($id_propiedad);
        $visitas = $propiedad->VISITAS +1;
        Propiedad::where('ID', '=',$id_propiedad )->update(array('VISITAS' => $visitas));
        $propiedad->loadGaleria($propiedad->ID);
        
        $this->vars['page']      = 'propiedades';
        $this->vars['propiedad'] = $propiedad;
        $this->vars['galeria']   = $propiedad->getGaleria();

        return View::make('propiedades_ver', $this->vars);
    }
    
    public function propiedad_contacto(){
        $post = Input::get();
        print_r($post);
    }

    public function contacto()
    {
        $this->vars['page'] = 'contacto';
        return View::make('contact', $this->vars);
    }

    public function contacto_enviar(){
        $post = Input::get();
        try{
            $team = Mail::send('emails.contact.team', $post, function($message) use ($post) {
                $message->to('niko.afv@gmail.com', $post['userName'])->subject("Equipo DbrPropiedades - Contacto");
            });

            $client = Mail::send('emails.contact.client', $post, function($message) use ($post) {
                $message->to($post['userEmail'], $post['userName'])->subject("Contacto - " . $post['userSubject']);
            });

            $response['message'] = "Su mensaje ha sido enviado con éxito!";
            $response['success'] = TRUE;

        }catch (Exception $e){
            $response['message'] = $e->getMessage();
            $response['success'] = FALSE;
        }

        return Response::json($response, 200);
    }
    
    public function simulador(){
        $this->vars['page'] = 'simulador';
        return View::make('simulador', $this->vars);
        //echo "http://simuladordesubsidio.minvu.cl/";
    }
}
