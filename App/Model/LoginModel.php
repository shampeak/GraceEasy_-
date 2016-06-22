<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-06-21
 * Time: 18:35
 */

namespace App\Model;


class LoginModel
{
    public function iflogin(){
        $cookie = app('cookies')->get('irones');
        if(!$cookie){
            R('/admin/login');
        }
    }
}