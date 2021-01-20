<?php

namespace App\Http\Controllers;

use App\Forms\FullBackup;
use App\Models\Backup;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class FullBackupController extends Controller
{

     private $formBuilder;
     public function __construct(FormBuilder $formBuilder)
     {
        $this->middleware('login');
         $this->formBuilder=$formBuilder;
     }


     public function index( FormBuilder $formBuilder){


        $form = $form =$this->getFotm();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('backup/fullbackup',compact('form'));

     }

     public function fullbackup(FormBuilder $formBuilder,Request $request)
     {

         $rs = Backup::fullBackup($request->session()->get('username'),$request->session()->get('password'));

         return view('backup/fullbackup',['rs'=>$rs]);

     }


     private function getFotm(){
       return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('fullbackupForm')
        ]);
     }

}
