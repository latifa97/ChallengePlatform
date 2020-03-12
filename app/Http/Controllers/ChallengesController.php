<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ChallengesController extends Controller
{

    public function index()
    {    $sum = User::whereHas('role', function($query) {
        $query->where('id', 4);
    })->count();

        return view('welcome')->with('sumGuests',$sum);
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
        $challenge = Challenge::find($id);
        return view('participate',compact('challenge'));
    }


    public function edit($id)
    {
        $challenge = Challenge::find($id);
 	return view('editChallenge',compact('challenge'));
    }


    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'

               ]);

        $chall = Challenge::find($id);
        $chall->name = $request->name;
        $chall->description = $request->description;
        $chall->startDate = $request->startDate;
        $chall->endDate = $request->endDate;
        $chall->save();
        return redirect(route('home'))->with('successMsg','Challenge Successfully Updated');

       }


    public function destroy($id)
    {
        //
    }
}
