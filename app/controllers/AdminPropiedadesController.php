<?php

class AdminPropiedadesController extends BaseController {

    private $vars = array();

    public function crear()
    {
        $this->vars['page'] = 'propiedades_crear';
        return View::make('backoffice/crear_propiedades', $this->vars);
    }
    
    public function guardar(){
        try{
                $array = Input::get();
            
                $oPropiedad = new Propiedad();
                
                $oPropiedad->NOMBRE = (count($array['nombre'])>0)?$array['nombre']:NULL;
                $oPropiedad->DIRECCION = (count($array['direccion'])>0)?$array['direccion']:NULL;
                $oPropiedad->SUPERFICIE_UTIL = ($array['s_util']>0)?$array['s_util']:NULL;
                $oPropiedad->SUPERFICIE_TERRENO = ($array['s_terreno']>0)?$array['s_terreno']:NULL;
                $oPropiedad->VALOR = ($array['valor']>0)?$array['valor']:NULL;
                $oPropiedad->GASTO_COMUN = ($array['g_comun']>0)?$array['g_comun']:NULL;
                $oPropiedad->BAÑOS = ($array['banios']>0)?$array['banios']:NULL;
                $oPropiedad->LOGIA = (isset($array['logia']))?1:0;
                $oPropiedad->DESCRIPCION = (count($array['descripcion'])>0)?$array['descripcion']:NULL;
                $oPropiedad->TIPO = ($array['tipo']>0)?$array['tipo']:NULL;
                $oPropiedad->TRANSACCION = ($array['transaccion']>0)?$array['transaccion']:NULL;
                $oPropiedad->REGION = ($array['region']>0)?$array['region']:NULL;
                
                
                $result = $oPropiedad->save();
                $messege = "La propiedad de ha creado con exito";
                $codigo = 200;
                
            } catch (Exception $ex) {
                $messege = "Ha Ocurrido un Error Interno";
                $codigo = 500;
                return Redirect::to('/admin/propiedades/crear')->with('error', $messege);
            }
            
            return Redirect::to('/admin/propiedades/ver/'.$oPropiedad->ID)->with('success', $messege);
    }
    
    public function ver($id){
        $oPropiedad = Propiedad::find($id);
        $oPropiedad->loadGaleria($oPropiedad->ID);
        
        $propiedad = array();

        $propiedad['id'] = $oPropiedad->ID;
        $propiedad['nombre'] = $oPropiedad->NOMBRE;
        $propiedad['direccion'] = $oPropiedad->DIRECCION;
        $propiedad['superficie_util'] = $oPropiedad->SUPERFICIE_UTIL;
        $propiedad['superficie_terreno'] = $oPropiedad->SUPERFICIE_TERRENO;
        $propiedad['valor'] = $oPropiedad->VALOR;
        $propiedad['gasto_comun'] = $oPropiedad->GASTO_COMUN;
        $propiedad['baños'] = $oPropiedad->BAÑOS;
        $propiedad['habitaciones'] = $oPropiedad->HABITACIONES;
        $propiedad['descripcion'] = $oPropiedad->DESCRIPCION;
        $propiedad['galeria'] = $oPropiedad->getGaleria();
        
        if($propiedad['galeria']){
            $this->vars['img1'] = $propiedad['galeria'][0]['ID'];
        }
        $this->vars['page'] = 'propiedades_ver';
        $this->vars['galeria'] = ($oPropiedad->countImagenes())?TRUE:FALSE;
        $this->vars['propiedad'] = $propiedad;
        $this->vars['upload_dir'] = $oPropiedad->ID;

        return View::make('backoffice/ver_propiedad', $this->vars);
    }


    public function cargarImg(){
        try{
            $upload_dir = public_path() ."/uploads/propiedades/".Input::get('dir');
            if(!file_exists($upload_dir)){
                mkdir($upload_dir);
                chmod($upload_dir, 0777);
            }

            $file = Input::file('file');
            $uploadSuccess = $file->move($upload_dir,$this->convert_string($file->getClientOriginalName()));

            $oImagen = new Imagen();
            $oImagen->PATH = $uploadSuccess->getRealPath();
            $oImagen->URL = str_replace(public_path(), "",$uploadSuccess->getRealPath());
            $oImagen->PROPIEDAD = Input::get('id');
            $oImagen->save();

            return Response::json('success', 200);

        } catch (Exception $ex) {
            return Response::json($ex->getMessage(), 400);
        }
    }

    function convert_string($str) {
        $str = strtolower($str);
        $str = str_replace(array('á','Á','é','É','í','Í','ó','Ó','ú','Ú'), array('a','A','e','E','i','I','o','O','u','U'), $str);
        $str = str_replace(array(';',':'), "", $str);
        $str = str_replace(" ", "_", $str);
        return $str;
    }
}
