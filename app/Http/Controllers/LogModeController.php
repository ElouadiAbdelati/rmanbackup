<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class LogModeController extends Controller
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

        return view('database/logmode',compact('form'));

     }

     public function logmode(FormBuilder $formBuilder)
     {
         $form =$this->getFotm();
         $form->redirectIfNotValid();
         $data=$form->getFieldValues();
         $rs = Database::logMode($data['username'],$data['password']);

         return view('database/logmode',['rs'=>$rs]);

     }

     private function getFotm(){
        return $this->formBuilder->create('App\Forms\FormBackup', [
             'method' => 'POST',
             'url' => route('logmodeForm'),

         ]);
      }


     public function indexModifyLogMode( FormBuilder $formBuilder){


        $form = $form =$this->getFormForModifyLogMode();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('database/modifylogmode',compact('form'));

     }
     public function modifyLogMode(FormBuilder $formBuilder)
     {
         $form =$this->getFormForModifyLogMode();
         $form->redirectIfNotValid();
         $data=$form->getFieldValues();
         $rs = Database::modifyLogMode($data['username'],$data['password'],$data['mode']);

         return view('database/modifylogmode',['rs'=>$rs]);

     }
     private function getFormForModifyLogMode(){
        return $this->formBuilder->create('App\Forms\FormBackup', [
             'method' => 'POST',
             'url' => route('modifylogmodeForm'),
            'data'=>[
                'mode'=>true
            ]
         ]);
      }

}
