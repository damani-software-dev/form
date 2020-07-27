<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\runsurvey;
class formController extends Controller
{
    //
    function store(Request $req)
    {
        $form = new runsurvey();
        $form -> name = request('name');
        $form -> age = request('age');
        $form -> occupation = request('occupation');
        $form -> institute = request('institute');
        $form -> tele = request('tele');
        $form -> summary1 = request('summary1');
        $form -> summary2 = request('summary2');
        $form->save();

        return view('recieved.thanks');
    }
}
