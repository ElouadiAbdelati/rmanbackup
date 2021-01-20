<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class LoginAppController extends Controller
{

    private $formBuilder;
    public function __construct(FormBuilder $formBuilder)
    {

        $this->formBuilder = $formBuilder;

    }
    public function index(){
        $form =  $form = $this->getFotm();

        return view('login/loginapp',compact('form'));
    }

    public function login(FormBuilder $formBuilder,Request $request)
    {
        $form =$this->getFotm();
        $form->redirectIfNotValid();
        $data=$form->getFieldValues();
        $rs=Database::login($data['username'],$data['password']);

        $lenght=count($rs);

        if(trim($rs[$lenght-1])=="ORA-01031: insufficient privileges"){
            $form =  $form = $this->getFotm();
            return view('login/loginapp',['form'=>$form,'error'=>'username or password invalid']);
        }
         $request->session()->put('username',$data['username']);
         $request->session()->put('password',$data['password']);

         $form = $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('listbackupsTagForm'),
            'data'=>[
                'tag'=>true,

            ]
        ]);
        return view('backup/listbackupsbytag', compact('form'));
    }

    private function getFotm()
    {
        return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('loginForm'),
            'data'=>[
                'password' => true
            ]

        ]);
    }

    public function logout(Request $request){
        $request->session()->put('username','none');
        $request->session()->put('password','none');

        $form =  $form = $this->getFotm();
        return view('login/loginapp',compact('form'));
    }

}
