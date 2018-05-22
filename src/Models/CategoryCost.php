<?php
/**
 * Created by PhpStorm.
 * User: dgm
 * Date: 3/13/2018
 * Time: 2:08 PM
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class CategoryCost extends Model
{
    //Mass Assignment(Atribuição Massiva)
    protected $fillable = [
        'name',
        'user_id'
    ];
}
