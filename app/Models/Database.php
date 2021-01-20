<?php
namespace app\Models;

use App\Models\Outils;

class Database {

    static String $path = "./script/";

    public static function checkCurrentScn(String $usernsme, String $password) {
        $command =  self::$path."checkCurrentScn.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function logMode(String $usernsme, String $password) {
        $command =  self::$path."log_mode.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function modifyLogMode(String $usernsme, String $password, String $mode) {
        $command=  self::$path."modify_lodg_mode.sh"." ".$usernsme." ".$password." ".$mode;
        $rs =  Outils::execute($command);
        return $rs;
    }

    public static function login(String $usernsme, String $password) {
        $command=  self::$path."login.sh"." ".$usernsme." ".$password;
        $rs =  Outils::execute($command);

        return $rs;
    }
}

