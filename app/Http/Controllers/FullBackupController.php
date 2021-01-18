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
         $this->formBuilder=$formBuilder;
     }


     public function index( FormBuilder $formBuilder){


        $form =     $form =$this->getFotm();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('backup/fullbackup',compact('form'));

     }

     public function fullbackup(FormBuilder $formBuilder)
     {
         $form =$this->getFotm();
         $form->redirectIfNotValid();
         $data=$form->getFieldValues();
         $rs = Backup::fullBackup($data['username'],$data['password']);

         return view('backup/fullbackup',[compact('form'),'rs'=>$rs]);

     }


     private function getFotm(){
       return $this->formBuilder->create('App\Forms\FullBackup', [
            'method' => 'POST',
            'url' => route('fullbackupForm')
        ]);
     }

}
