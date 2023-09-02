<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class FormController extends Controller
{
    public function createForm(FormBuilder $formBuilder)
    {

        $form = $formBuilder->create(\App\Forms\SongForm::class, [
            'method' => 'POST',
            'url' => 'google.com'
        ]);

        return view('form', compact('form'));


    }
}
