<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version October 21, 2021, 2:21 am UTC
 *
 * @property string $apellido
 * @property string $nombre
 */
class Persona extends Model
{
    //
     //use SoftDeletes;

     public $table = 'persona';
     protected $primaryKey= 'idpersona';
     public $timestamps =false;
 
     
     const CREATED_AT = 'created_at';
     const UPDATED_AT = 'updated_at';
 
 
     protected $dates = ['deleted_at'];
 
 
 
     public $fillable = [
         'apellido',
         'nombre'
     ];
 
     /**
      * The attributes that should be casted to native types.
      *
      * @var array
      */
     protected $casts = [
         'idpersona' => 'integer',
         'apellido' => 'string',
         'nombre' => 'string'
     ];
 
     /**
      * Validation rules
      *
      * @var array
      */
     public static $rules = [
         'apellido' => 'nullable|string|max:45',
         'nombre' => 'nullable|string|max:45'
     ];
}
