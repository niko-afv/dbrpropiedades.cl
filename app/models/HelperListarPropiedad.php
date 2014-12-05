<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 02-12-14
 * Time: 01:22 AM
 */

class HelperListarPropiedad extends Eloquent{

    private $propiedadesList;

    public function __construct(){
        $this->propiedadesList = new ArrayObject();
        $this->loadPropiedades();
    }

    public function addPropiedad($oPropiedad){
        $this->propiedadesList->append($oPropiedad);
    }

    public function getPropiedad($index){
        return $this->propiedadesList->offsetGet($index);
    }

    public function countPropiedades(){
        return $this->propiedadesList->count();
    }

    public function removePropiedad($index){
        $this->propiedadesList->offsetUnset($index);
    }

    public function loadPropiedades(){
        $dbPropiedades = Propiedad::all();

        foreach($dbPropiedades as $dbPropiedad){
            $oPropiedad = new Propiedad();
            $oPropiedad->setId($dbPropiedad->ID);
            $this->addPropiedad($oPropiedad);
        }
    }

    public function toArray(){
        $array = array();
        for($i=0; $i < $this->countPropiedades(); $i++){
            $array[] = $this->getPropiedad($i)->toArray();
        }
        return $array;
    }




} 