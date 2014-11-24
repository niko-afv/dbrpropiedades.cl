<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 23-11-14
 * Time: 03:17 PM
 */

class Region extends Eloquent{

    protected $table = 'REGIONES';

    public static function getRegionesConPropiedades(){
        $result = DB::table('PROPIEDADES')
            ->join('REGIONES', 'PROPIEDADES.REGION', '=', 'REGIONES.ID')
            ->select('REGIONES.ID', 'REGIONES.NOMBRE')
            ->get();
        return $result;
    }

} 