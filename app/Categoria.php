<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //protected $table = 'categorias'; // Esta linea deberá estar desmarcada
                                       // si la tabla no respetara el criterio
                                       // de Eloquent donde la tabla lleva por
                                       // nombre el plural de la clase

    //protected $primaryKey = 'id'; // Esta linea deberá estar desmarcada
                                    // si la tabla no respetara el criterio
                                    // de Eloquent donde asume que la clave
                                    // primaria se llama id

    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
