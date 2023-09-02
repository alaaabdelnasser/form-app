<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class SongForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('2ame1', 'text')
            ->add('2ame3', 'checkbox')

            ->add('2ame71', 'text') ;

    }
}
