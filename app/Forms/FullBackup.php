<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\FormBuilder;

class FullBackup extends Form
{

    public function buildForm()
    {
        $this
            ->add('username', 'text' ,[

                'rules' => 'required',
                'error_messages' => [
                    'username.required' => 'The title field is mandatory.'
                ]
            ])
            ->add('password', 'password',[

                'rules' => 'required',
                'password' => [
                    'username.required' => 'The title field is mandatory.'
                ]
            ])
            ->add('envoyer', 'submit');
    }

}
