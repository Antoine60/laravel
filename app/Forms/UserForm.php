<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', ['rules' => 'required|min:5'])
            ->add('sexe', 'select', [
                'choices' => ['homme' => 'Man', 'femme' => 'Woman'],
                'selected' => 'homme'
            ], ['rules' => 'required'])
            ->add('job_id', 'select', [
            'choices' => ['1' => 'King', '2' => 'User'],
            'selected' => '2'
            ], ['rules' => 'required'])
            ->add('save', 'submit', ['label' => 'Save form'])
            ->add('clear', 'reset', ['label' => 'Clear form']);
    }
}
