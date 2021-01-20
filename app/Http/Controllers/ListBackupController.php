<?php

namespace App\Http\Controllers;

use App\Forms\FullBackup;
use App\Models\Backup;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

use function PHPUnit\Framework\isEmpty;

class ListBackupController extends Controller
{
    private $formBuilder;
    public function __construct(FormBuilder $formBuilder)
    {
        $this->middleware('login');
        $this->formBuilder = $formBuilder;

    }


    public function index(FormBuilder $formBuilder)
    {


        $form =  $form = $this->getFotm();


        return view('backup/listbackups', compact('form'));
    }

    public function listbackups(FormBuilder $formBuilder,Request $request)
    {

        $rs = Backup::listBuckups($request->session()->get('username'),$request->session()->get('password'));

        $find = false;
        $otherbackup = false;
        $backup = [];
        $backups = [];
        foreach ($rs as $value) {
            if ($value != null) {
                if (substr($value, 1, 1) == "-") {
                    $find = true;
                    $otherbackup = true;
                } elseif ($find) {
                    if ($otherbackup) {

                        $backups[] = $backup;
                        $backup = [];


                        $backup[] = $value;
                        $otherbackup = false;
                    } else {
                        $backup[] = $value;
                    }
                }
            }
        }
        $error=false;
        if (empty($backups)) {
            $error=true;
        }

        return view('backup/listbackups', ['backups' => $backups,'error'=>$error,'rs'=>$rs]);
    }


    private function getFotm()
    {
        return $this->formBuilder->create('App\Forms\FormBackup', [
            'method' => 'POST',
            'url' => route('listbackupsForm')
        ]);
    }
}
