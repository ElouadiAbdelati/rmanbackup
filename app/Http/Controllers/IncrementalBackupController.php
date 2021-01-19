<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class IncrementalBackupController extends Controller
{
    private $formBuilder;
     public function __construct(FormBuilder $formBuilder)
     {
         $this->formBuilder=$formBuilder;
     }


     public function index( FormBuilder $formBuilder){


        $form = $form =$this->getFotm();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('backup/incrementalbackup',compact('form'));

     }

     public function incrementalbackup(FormBuilder $formBuilder)
     {
         $form =$this->getFotm();
         $form->redirectIfNotValid();
         $data=$form->getFieldValues();
         $rs = Backup::backupIncremental($data['username'],$data['password'],$data['scn']);

         return view('backup/incrementalbackup',['rs'=>$rs]);

     }


     private function getFotm(){
       return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('incrementalbackupForm'),
            'data'=> [
                'scn'=>true
            ]
        ]);
     }
}
