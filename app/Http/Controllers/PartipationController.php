<?php

namespace App\Http\Controllers;

use App\Participation;
use Illuminate\Http\Request;

class PartipationController extends Controller
{
    public function create(){
        return view ('/participate');
    }

    public function store(Request $request)
    {

           $participation = new Participation();
               $participation->code = $request->code;

               return redirect(route('home'))->with('successMsg','Code Successfully Submitted');
    }

}
