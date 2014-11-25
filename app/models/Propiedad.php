<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 23-11-14
 * Time: 03:17 PM
 */

class Propiedad extends Eloquent{

    protected $table = 'PROPIEDADES';
    public $timestamps = false;

    private $galeria;

    public function __construct(){
    }

    public function region()
    {
        return $this->belongsTo('Region');
    }

    public function loadGaleria($id){
        $this->galeria = new ArrayObject();
        $fotos = Imagen::where('PROPIEDAD',$id)->get()->toArray();

        foreach( $fotos as $foto){
            $this->addImagen($foto);
        }
    }
    public function addImagen($imagen){
        $this->galeria->append($imagen);
    }
    public function getImagen($index){
        return $this->galeria->offsetGet($index);
    }
    public function countImagenes(){
        return $this->galeria->count();
    }
    public function removeImagen($index){
        $this->galeria->offsetUnset($index);
    }

    public function getGaleria(){
        return $this->galeria->getArrayCopy();
    }

} 