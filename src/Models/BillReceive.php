<?php
/**
 * Created by PhpStorm.
 * User: dgm
 * Date: 3/13/2018
 * Time: 2:08 PM
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;

class BillReceive extends Model
{
    // Mass Assignment
    protected $fillable = [
        'date_launch',
        'name',
        'value',
        'user_id'
    ];
}