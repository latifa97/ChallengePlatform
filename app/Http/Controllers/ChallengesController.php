<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ChallengesController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function create()
    {
      return view ('createChallenge');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'

               ]);

           $chall = new Challenge();
               $chall->name = $request->name;
               $chall->description = $request->description;
               $chall->startDate = $request->startDate;
               $chall->endDate = $request->endDate;
               $chall->save();
               return redirect(route('home'))->with('successMsg','Challenge Successfully Added');
    }

    public function getChallenges(){

        $challenges = Challenge::all();
                return view('challenges',compact('challenges'));
    }

    public function delete($id){
     Challenge::find($id)-> delete();
      return redirect(route('challenges'))->with('successMsg', 'Challenge Successfully Deleted');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
