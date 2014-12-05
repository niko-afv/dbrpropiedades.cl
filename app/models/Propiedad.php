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

    private $id;
    private $nombre;
    private $direccion;
    private $superficie_util;
    private $superficie_terreno;
    private $valor;
    private $gasto_comun;
    private $baños;
    private $habitaciones;
    private $logia;
    private $descripcion;
    private $region;
    private $visitas;

    public function __construct(){
        $this->galeria = new ArrayObject();
    }

    public function getVisitas(){return $this->visitas;}
    public function setVisitas($visitas){$this->visitas = $visitas;}


    public function setId($id){
        $this->id = $id;
        $dbPropiedad = Propiedad::find($id);
        //$dbPropiedad = $dbPropiedad;

        $this->setNombre($dbPropiedad->NOMBRE);
        $this->setDireccion($dbPropiedad->DIRECCION);
        $this->setSuperficieUtil($dbPropiedad->SUPERFICIE_UTIL);
        $this->setSuperficieTerreno($dbPropiedad->SUPERFICIE_TERRENO);
        $this->setRegion($dbPropiedad->REGION);
        $this->setVisitas($dbPropiedad->VISITAS);
        $this->setDescripcion($dbPropiedad->DESCRIPCION);

        $imagenes = Imagen::where('PROPIEDAD',$this->getId())
            ->get()
            ->toArray();
        foreach($imagenes as $imagen){
            $this->addImagen($imagen);
        }
    }
    public function getId(){return $this->id; }
    public function getBaños(){return $this->baños;}
    public function setBaños($baños){$this->baños = $baños;}
    public function getGastoComun(){return $this->gasto_comun;}
    public function setGastoComun($gasto_comun){$this->gasto_comun = $gasto_comun;}
    public function getHabitaciones(){return $this->habitaciones;}
    public function setHabitaciones($habitaciones){$this->habitaciones = $habitaciones;}
    public function getDescripcion(){return $this->descripcion;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
    public function getDireccion(){return $this->direccion; }
    public function getLogia(){return $this->logia;}
    public function setLogia($logia){$this->logia = $logia;}
    public function getNombre(){return $this->nombre;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function getRegion(){return $this->region;}
    public function setRegion($region){
        $this->region = new Region();
        $this->region->setId($region);
    }
    public function setDireccion($direccion){$this->direccion = $direccion;}
    public function getValor(){return $this->valor;}
    public function setValor($valor){$this->valor = $valor;}
    public function getSuperficieUtil(){return $this->superficie_util;}
    public function setSuperficieUtil($superficie_util){$this->superficie_util = $superficie_util;}
    public function getSuperficieTerreno(){return $this->superficie_terreno;}
    public function setSuperficieTerreno($superficie_terreno){$this->superficie_terreno = $superficie_terreno;}


    public function region(){
        return $this->belongsTo('Region');
    }

    public function loadGaleria($id){
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

    public function toArray(){
        $array = array();
        $array['id'] = $this->getId();
        $array['nombre'] = $this->getNombre();
        $array['direccion'] = $this->getDireccion();
        $array['superficie_util'] = $this->getSuperficieUtil();
        $array['superficie_terreno'] = $this->getSuperficieTerreno();
        $array['valor'] = $this->valor;
        $array['gasto_comun'] = $this->getGastoComun();
        $array['baños'] = $this->getBaños();
        $array['habitaciones'] = $this->getHabitaciones();
        $array['logia'] = $this->getLogia();
        $array['descripcion'] = $this->getDescripcion();
        $array['visitas']   = $this->getVisitas();
        $array['region']    = $this->getRegion()->toArray();

        $array['imagenes'] = array();

        for( $i = 0 ; $i < $this->countImagenes() ; $i++ ){
            $array['imagenes'][] = $this->getImagen($i)['URL'];
        }
        return $array;
    }
} 