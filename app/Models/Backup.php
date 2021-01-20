<?php

namespace App\Models;

use App\Models\Outils;

class Backup {

    public static  $path ="./script/";

    public static function  fullBackup(String $usernsme, String $password) {
        $command =  self::$path."fullBackup.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function backupIncremental(String $usernsme, String $password,String $scn) {

        $command=  self::$path."backupIncremental.sh"." ".$usernsme." ".$password." ".$scn;
        $rs = Outils::execute($command);
        return $rs;


    }
    public static function differentialBackup(String $usernsme, String $password,String $level,String $tag) {

        $command=  self::$path."differentialBackup.sh"." ".$usernsme." ".$password." ".$level." ".$tag;
        $rs = Outils::execute($command);
        return $rs;


    }
    public static function cumulativeBackup(String $usernsme, String $password,String $level,String $tag) {

        $command=  self::$path."cumulativeBackup.sh"." ".$usernsme." ".$password." ".$level." ".$tag;
        $rs = Outils::execute($command);
        return $rs;


    }

    public static function listBuckups(String $usernsme, String $password) {
        $command =self::$path."listBuckups.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }
    public static function listBackupsetTag(String $usernsme, String $password,String $tag){
        $command =self::$path."listBackupsetTag.sh"." ".$usernsme." ".$password." ".$tag;
        $rs =  Outils::execute($command);
        return $rs;
    }


    public static function deteleAll(String $usernsme, String $password){
        $command =self::$path."deleteAllbackups.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function deteleByNumber(String $usernsme, String $password, $number ){
        $command =self::$path."deleteBackupset.sh"." ".$usernsme." ".$password." ".$number;
        $rs =  Outils::execute($command);
        return $rs;
    }
}
