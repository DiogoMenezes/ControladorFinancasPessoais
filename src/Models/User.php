<?php
/**
 * Created by PhpStorm.
 * User: dgm
 * Date: 3/13/2018
 * Time: 2:08 PM
 */

namespace SONFin\Models;


use Illuminate\Database\Eloquent\Model;
use \Jasny\Auth\User as JasnyUser;

class User extends Model implements JasnyUser
{
    //Mass Assignment(Atribuição Massiva)
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    /**
     * Get user id
     *
     * @return int|string
     */
    public function getId(): int
    {
        return (int)$this->id;
    }

    /**
     * Get user's username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->email;
    }

    /**
     * Get user's hashed password
     *
     * @return string
     */
    public function getHashedPassword(): string
    {
        return $this->password;
    }

    /**
     * Event called on login.
     *
     * @return boolean  false cancels the login
     */
    public function onLogin()
    {
        // TODO: Implement onLogin() method.
    }

    /**
     * Event called on logout.
     *
     * @return void
     */
    public function onLogout()
    {
        // TODO: Implement onLogout() method.
    }
}