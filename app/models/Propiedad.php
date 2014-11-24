<?php
/**
 * Created by PhpStorm.
 * User: nks
 * Date: 23-11-14
 * Time: 03:17 PM
 */

class Propiedad extends Eloquent{

    protected $table = 'PROPIEDADES';

    public function region()
    {
        return $this->belongsTo('Region');
    }

} 