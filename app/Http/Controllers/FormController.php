<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Form;
use App\Models\FormEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Kris\LaravelFormBuilder\FormBuilder;

class FormController extends Controller
{
    public function answerlist(Form $form)
    {
        return view('answerList',compact('form'));

    }

    public function formlist()
    {
        $forms = Form::all();
        return view('formList', compact('forms'));
    }


    public function storeAnswer(Form $form)
    {


        $data = request()->except(['_token']);


        $form->answers()->create(['answers' => json_encode(Arr::flatten($data))]);


    }

    public function getfrom(Form $form)
    {

        return view('formRender', compact('form'));
    }


    public function store()
    {
        Form::create(
            ['json' => request()->jsoninput]
        );


        return response('data save successfully');
    }


    public function apiforms()
    {
        $forms = Form::all();
        return response()->json($forms);
    }

}
