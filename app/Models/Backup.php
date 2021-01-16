<?php

namespace App\Models;

use App\Models\Outils;

class Backup {

    public static  $path ="/home/elouadi/Desktop/irisi/laravel/backup/resources/script/";

    public static function  fullBackup(String $usernsme, String $password) {
        $command =  self::$path."fullBackup.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function listBuckups(String $usernsme, String $password) {
        $command =self::$path."listBuckups.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function backupIncremental(String $usernsme, String $password,String $scn) {

        $command=  self::$path."backupIncremental.sh"." ".$usernsme." ".$password." ".$scn;
        $rs = Outils::execute($command);
        return $rs;


    }


}
