<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullBackupController extends Controller
{
     public function index(){
        return view('backup/fullbackup');

     }
}
