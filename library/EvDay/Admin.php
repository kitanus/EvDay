<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 23.02.2018
 * Time: 11:48
 */

namespace EvDay;


class Admin
{

    private $admin;

    public function __construct($admin)
    {
        $this->admin = $admin;
    }

    public function enter($login, $password){
        if (!empty($login) && !empty($password)) {
            for ($j = 0; $j < count($this->admin); $j++) {
                if (($login == $this->admin[$j]["login"]) && ($password == $this->admin[$j]["password"])) {
                    return "admin";
                } else {
                    return "";
                }
            }
        }else{
            return "";
        }

    }



}