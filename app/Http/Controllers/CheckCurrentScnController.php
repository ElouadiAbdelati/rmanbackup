<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Database;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class CheckCurrentScnController extends Controller
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

        return view('database/checkcurrentscn',compact('form'));

     }

     public function checkCurrentScn(FormBuilder $formBuilder,Request $request)
     {

         $rs = Database::checkCurrentScn($request->session()->get('username'),$request->session()->get('password'));

         return view('database/checkcurrentscn',['rs'=>$rs]);

     }


     private function getFotm(){
       return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('checkCurrentScnForm'),
        ]);
     }
}
