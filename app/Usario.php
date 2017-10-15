<?php
/**
 * Created by PhpStorm.
 * User: Asier1
 * Date: 15/10/2017
 * Time: 19:49
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Usario extends Model
{
    protected $table="usuarios";
    protected $fillable=['usuario','contraseña','telefono','email'];
}