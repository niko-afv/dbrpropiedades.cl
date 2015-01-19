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

            $oPropiedad = isset( $array['id'] ) ? Propiedad::find( $array['id'] ) : new Propiedad();
            
            //print_r($oPropiedad);die;

            $oPropiedad->NOMBRE = (count($array['nombre'])>0)?$array['nombre']:NULL;
            $oPropiedad->DIRECCION = (count($array['direccion'])>0)?$array['direccion']:NULL;
            $oPropiedad->SUPERFICIE_UTIL = ($array['s_util']>0)?$array['s_util']:NULL;
            $oPropiedad->SUPERFICIE_TERRENO = ($array['s_terreno']>0)?$array['s_terreno']:NULL;
            $oPropiedad->VALOR = ($array['valor']>0)?$array['valor']:NULL;
            $oPropiedad->GASTO_COMUN = ($array['g_comun']>0)?$array['g_comun']:NULL;
            $oPropiedad->HABITACIONES = ($array['habitaciones']>0)?$array['habitaciones']:NULL;
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
    
    public function actualizar(){
        try{
            
            $array = Input::get();
            
            $propiedad['NOMBRE'] = (count($array['nombre'])>0)?$array['nombre']:NULL;
            $propiedad['DIRECCION'] = (count($array['direccion'])>0)?$array['direccion']:NULL;
            $propiedad['SUPERFICIE_UTIL'] = ($array['s_util']>0)?$array['s_util']:NULL;
            $propiedad['SUPERFICIE_TERRENO'] = ($array['s_terreno']>0)?$array['s_terreno']:NULL;
            $propiedad['VALOR'] = ($array['valor']>0)?$array['valor']:NULL;
            $propiedad['GASTO_COMUN'] = ($array['g_comun']>0)?$array['g_comun']:NULL;
            $propiedad['HABITACIONES'] = ($array['habitaciones']>0)?$array['habitaciones']:NULL;
            $propiedad['BAÑOS'] = ($array['banios']>0)?$array['banios']:NULL;
            $propiedad['LOGIA'] = (isset($array['logia']))?1:0;
            $propiedad['DESCRIPCION'] = (count($array['descripcion'])>0)?$array['descripcion']:NULL;
            $propiedad['TIPO'] = ($array['tipo']>0)?$array['tipo']:NULL;
            $propiedad['TRANSACCION'] = ($array['transaccion']>0)?$array['transaccion']:NULL;
            $propiedad['REGION'] = ($array['region']>0)?$array['region']:NULL;
            
            DB::table('PROPIEDADES')->where('ID', $array['id'])->update($propiedad);
            
            $messege = "La propiedad de ha creado con exito";
            $codigo = 200;
        } catch (Exception $ex) {
            $messege = "Ha Ocurrido un Error Interno";
            $codigo = 500;
            return Redirect::to('/admin/propiedades/editar/'.$array['id'])->with('error', $messege);
        }
        
        return Redirect::to('/admin/propiedades/ver/'.$array['id'])->with('success', $messege);
    }

    public function editar($id){

        $oPropiedad = Propiedad::find($id);
        $this->vars['id'] = $oPropiedad->ID;
        $this->vars['nombre'] = $oPropiedad->NOMBRE;
        $this->vars['direccion'] = $oPropiedad->DIRECCION;
        $this->vars['s_util'] = $oPropiedad->SUPERFICIE_UTIL;
        $this->vars['s_terreno'] = $oPropiedad->SUPERFICIE_TERRENO;
        $this->vars['valor'] = $oPropiedad->VALOR;
        $this->vars['g_comun'] = $oPropiedad->GASTO_COMUN;
        $this->vars['banios'] = $oPropiedad->BAÑOS;
        $this->vars['habitaciones'] = $oPropiedad->HABITACIONES;
        $this->vars['logia'] = $oPropiedad->LOGIA;
        $this->vars['descripcion'] = $oPropiedad->DESCRIPCION;
        $this->vars['tipo'] = $oPropiedad->TIPO;
        $this->vars['transaccion'] = $oPropiedad->TRANSACCION;
        $this->vars['region'] = $oPropiedad->REGION;

        $this->vars['page'] = 'propiedades_editar';
        return View::make('backoffice/crear_propiedades', $this->vars);
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
        $propiedad['visitas'] = $oPropiedad->VISITAS;
        
        if($propiedad['galeria']){
            $this->vars['img1'] = $propiedad['galeria'][0]['ID'];
        }
        $this->vars['page'] = 'propiedades_ver';
        $this->vars['galeria'] = ($oPropiedad->countImagenes())?TRUE:FALSE;
        $this->vars['propiedad'] = $propiedad;
        $this->vars['upload_dir'] = $oPropiedad->ID;

        return View::make('backoffice/ver_propiedad', $this->vars);
    }

    public function listar(){
        $oPropiedades = new HelperListarPropiedad();


        $this->vars['page'] = "propiedades_listar";
        $this->vars['propiedades'] = $oPropiedades->toArray();

        return View::make('backoffice/listar_propiedades', $this->vars);
    }

    public function eliminar($id){
        $delete = DB::table('PROPIEDADES')->where('ID', $id)->delete();

        //print_r($delete);die;

        if($delete){
            $messege = "Registro eliminado con exito!";
            return Redirect::to('/admin/propiedades/listar')->with('success', $messege);
        }else{
            $messege = "Ha ocurrido un error";
            return Redirect::to('/admin/propiedades/ver/'.$id)->with('success', $messege);
        }
    }


    public function cargarImg(){
        try{
            $upload_dir = public_path() ."/uploads/propiedades/".Input::get('dir');
            if(!file_exists($upload_dir)){
                mkdir($upload_dir);
                chmod($upload_dir, 0777);
            }

            $file = Input::file('file');
            $file = $file[0];

            $uploadSuccess = $file->move($upload_dir,$this->convert_string($file->getClientOriginalName()));

            $oImagen = new Imagen();
            $oImagen->PATH = $uploadSuccess->getRealPath();
            $oImagen->URL = str_replace(public_path(), "",$uploadSuccess->getRealPath());
            $oImagen->PROPIEDAD = Input::get('id');
            $oImagen->save();

            $response['data'] = array(
                'imgPath' => $oImagen->URL,
                'imgId' => $oImagen->ID,
            );
            $response['error'] = FALSE;
            $response['critic'] = FALSE;
            $response['msg'] ="Imagen agregada con exito";


        } catch (Exception $ex) {
            $response['error'] = TRUE;
            $response['critic'] = TRUE;
            $response['msg'] = $ex->getMessage();
        }
        return Response::json($response, 200);
    }

    function deleteImg(){
        try{
            $response = array();
            $imgId = Input::get('imgId');

            $oImg = Imagen::find($imgId);

            $imgPath = $oImg->PATH;
            //$exec = $oImg->delete();
            $exec = DB::table('IMAGENES')->where('ID', '=', $imgId)->delete();
            
            if($exec){
                $delete = File::delete($imgPath);
                if($delete){
                    $response['data'] = array(
                        'imgPath' => $imgPath,
                        'imgId' => $imgId,
                    );
                    $response['error'] = FALSE;
                    $response['critic'] = FALSE;
                    $response['msg'] ="Imagen Eliminada con exito";
                }else{
                    $response['error'] = TRUE;
                    $response['critic'] = FALSE;
                    $response['msg'] ="No se pudo eliminar la imagen";
                }
            }else{
                $response['error'] = TRUE;
                $response['critic'] = TRUE;
                $response['msg'] ="No se pudo eliminar el registro";
            }
        }catch (Exception $e){
            $response['error'] = TRUE;
            $response['critic'] = TRUE;
            $response['msg'] = $e->getMessage();
        }
        return Response::json($response, 200);
    }

    function convert_string($str) {
        $str = strtolower($str);
        $str = str_replace(array('á','Á','é','É','í','Í','ó','Ó','ú','Ú'), array('a','A','e','E','i','I','o','O','u','U'), $str);
        $str = str_replace(array(';',':'), "", $str);
        $str = str_replace(" ", "_", $str);
        return $str;
    }
}
