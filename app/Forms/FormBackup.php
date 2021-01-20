<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FormBackup extends Form
{
    public function buildForm()
    {
        $this

            ->add('envoyer', 'submit');


           if($this->getData('password')!=null && $this->getData('password')==true ){
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
                    'password.required' => 'The title field is mandatory.'
                ]
            ]);
           }

           if($this->getData('tag')!=null && $this->getData('tag')==true ){

            $this->add('tag', 'text',[

                'rules' => 'required',
                'tag' => [
                    'tag.required' => 'The title field is mandatory.'
                ]
            ]);
           }
           if($this->getData('level')!=null && $this->getData('level')==true ){

            $this->add('level', 'number',[

                'rules' => 'required|min:1',
                'tag' => [
                    'level.required' => 'The title field is mandatory.'
                ]
            ]);
           }
           if($this->getData('scn')!=null && $this->getData('scn')==true ){

            $this->add('scn', 'text',[

                'rules' => 'required',
                'scn' => [
                    'scn.required' => 'The title field is mandatory.'
                ]
            ]);
           }

           if($this->getData('mode')!=null && $this->getData('mode')==true ){

            $this->add('mode', 'text',[

                'rules' => 'required',
                'mode' => [
                    'mode.required' => 'The title field is mandatory.'
                ]
            ]);
           }

           if($this->getData('number')!=null && $this->getData('number')==true ){

            $this->add('number', 'number',[

                'rules' => 'required|min:1',
                'number' => [
                    'number.required' => 'The title field is mandatory.'
                ]
            ]);
           }

    }
}
