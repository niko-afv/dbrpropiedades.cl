<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 23-11-14
 * Time: 03:17 PM
 */

class Region extends Eloquent{

    protected $table = 'REGIONES';

    private $id;
    private $nombre;

    public static function getRegionesConPropiedades(){
        $result = DB::table('PROPIEDADES')
            ->join('REGIONES', 'PROPIEDADES.REGION', '=', 'REGIONES.ID')
            ->select('REGIONES.ID', 'REGIONES.NOMBRE')
            ->get();
        return $result;
    }


    public function setId($xid){$this->id = $xid;}
    public function getId(){return $this->id;}
    public function setNombre($xnombre){$this->id = $xnombre;}
    public function getNombre(){return $this->nombre;}

    public function toArray(){
        $array = array();
        $array['id'] = $this->getId();
        $array['nombre'] = $this->getNombre();
        return $array;
    }

} 