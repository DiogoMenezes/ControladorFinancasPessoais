<?php
/**
 * Created by PhpStorm.
 * User: dgm
 * Date: 3/13/2018
 * Time: 2:08 PM
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Mass Assignment(Atribuição Massiva)
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];
}