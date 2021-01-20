<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Database;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class BackupController extends Controller
{

    private $formBuilder;
    public function __construct(FormBuilder $formBuilder)
    {
        $this->middleware('login');
        $this->formBuilder = $formBuilder;
    }


    public function index(FormBuilder $formBuilder)
    {
    }


    public function delete(FormBuilder $formBuilder)
    {


        $form = $form = $this->getFotm();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('backup/deletebackup', compact('form'));
    }
    public function deleteAll(FormBuilder $formBuilder,Request $request)
    {

        $rs = Backup::deteleAll($request->session()->get('username'),$request->session()->get('password'));

        return view('backup/deletebackup', ['rs' => $rs]);
    }


    private function getFotm()
    {
        return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('delete_all'),
        ]);
    }


    public function indexDeleteByNumber(FormBuilder $formBuilder)
    {


        $form = $form = $this->getFormForDeleteByNumber();
        if ($form->isValid()) {
            dd($form->getData());
        }

        return view('backup/deletebackupbynumber', compact('form'));
    }
    public function deleteByNumber(FormBuilder $formBuilder,Request $request)
    {
        $form = $this->getFormForDeleteByNumber();
        $form->redirectIfNotValid();
        $data = $form->getFieldValues();
        $rs = Backup::deteleByNumber($request->session()->get('username'),$request->session()->get('password'), $data['number']);

        return view('backup/deletebackupbynumber', ['rs' => $rs]);
    }
    private function getFormForDeleteByNumber()
    {
        return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('deletebackupbynumberForm'),
            'data' => [
                'number' => true,

            ]
        ]);
    }
}
