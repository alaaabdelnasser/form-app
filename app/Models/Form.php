<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $with= ['answers'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
