<?php
namespace app\Models;

class Outils {

    public static function execute($command){
        $output=null;
        $retval=null;
        exec($command, $output, $retval);
        return $output;
   }

}
