<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    const PRODUCTO_DISPONIBLE = 'disponible';
    const PRODUCTO_NO_DISPONIBLE = 'no disponible'; 
    
    protected $fillable = [  
        'name',
        'description',
        'quantity',
         'status',
         'image',
         'saller_id'
]; 


public function estaDisponible() {

    return $this->status == product::PRODUCTO_DISPONIBLE;
}

}
