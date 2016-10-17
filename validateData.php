<?php

/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.10.2016
 * Time: 14:50
 */
class validateData
{
    private function result($err){
        if($err == 0){
            return 0;
        }
        return 1;
    }

    public function  signUp($data){
        $err = 0;
        if(!$data['user_name'])
            $err++;
        if(!$data['email'])
            $err++;
        if(!$data['password'])
            $err++;
        if(!$data['re_password'])
            $err++;
        $this->result($err);
    }

    public function logIn($data){
        $err = 0;
        if(!$_POST['user_name'])
            $err++;
        if(!$_POST['password'])
            $err++;
        $this->result($err);

    }

    public function generateCodeActivate($max){
        $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
        $code = "";
        while ($max){
            $code.=$chars[rand(0,strlen($chars)-1)];
            $max--;
        }
        return $code;
    }
}

$validete = new validateData();