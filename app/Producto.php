<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 15/04/15
 * Time: 22:01
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Producto extends Model{
    protected $table = 'producto';
    protected $primaryKey = 'idproducto';
    protected $timestamps = false;
} 