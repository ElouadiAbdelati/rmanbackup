<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Database;
use Illuminate\Http\Request;

class BackupController extends Controller
{

   public function test(){
        /**
         * good
         */
   //   $rs = Backup::listBuckups("sys","elouadi");

      /**
         * good
         */
     //   $rs = Backup::fullBackup("sys","elouadi");


       /**
        * good
        */
      // $rs = Database::checkCurrentScn("system","elouadi");

      /**
       * not yet
       */
     // $rs = Database::modifyLogMode("system","elouadi","archivelog");

     /**
      * good
      */
     //$rs = Database::logMode("system","elouadi");

     /**
      * Working
      *RMAN utilise le SCN sélectionné comme base pour cette sauvegarde incrémentielle.
      *Pour tous les fichiers en cours de sauvegarde, RMAN inclut tous les blocs de données
      *qui ont été modifiés à des SCN supérieurs ou égaux à FROM SCNdans la sauvegarde
      * incrémentielle.
      */

     // $rs = Backup::backupIncremental("sys","elouadi","807334");


       /**
      * WORKING
      */
      //$rs = Backup::differentialBackup("sys","elouadi","1","JEU_INC_N1_DIF");

      /**
      * WORKING
      */
      //$rs = Backup::cumulativeBackup("sys","elouadi","1","JEU_INC_N1_CUM");

        /**
      * WORKING
      */
     $rs = Backup::listBackupsetTag("sys","elouadi","JEU_INC_N1_CUM");

       return view('backup',['listBackup' =>  $rs ]);

   }
}
