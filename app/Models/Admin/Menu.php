<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menu";
    // son los campos de este modelo que se crearan de forma masiva 
    protected $fillable=['nombre','url','icono'];
    // guarded son los campos que no pueden modificarse
    protected $guarded=['id'];
    
    //public $timestamps=false;


    //timestamps 
}
