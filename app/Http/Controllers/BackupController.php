<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Database;
use Illuminate\Http\Request;

class BackupController extends Controller
{

   public function test(){

       //$rs = Backup::listBuckups("sys","elouadi");
     $rs = Database::checkCurrentScn("system","elouadi");
       return view('backup',['listBackup' =>  $rs ]);

   }
}
