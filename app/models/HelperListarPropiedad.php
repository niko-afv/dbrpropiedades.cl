<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 02-12-14
 * Time: 01:22 AM
 */

class HelperListarPropiedad extends Eloquent{

    private $propiedadesList;

    public function __construct($load = TRUE){
        $this->propiedadesList = new ArrayObject();
        if($load)
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

    public function getTopPropiedades(){
        $propiedades = DB::table('PROPIEDADES')
            ->select(array("ID",DB::raw('max(VISITAS) as VISITAS')))
            ->groupBy('ID')
            ->take(3)
            ->get()
        ;

        foreach($propiedades as $propiedad){
            $oPropiedad = new Propiedad();
            $oPropiedad->setId($propiedad->ID);
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