<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use Illuminate\Http\Request;

class BackupController extends Controller
{

   public function test(){

       $rs = Backup::listBuckups("sys","elouadi");
       return view('backup',['listBackup' =>  $rs ]);

   }
}
