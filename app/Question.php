<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'question',
        'correct_answer',
    	'wrong_option1',
    	'wrong_option2',
    	'wrong_option3',
    ];
}
