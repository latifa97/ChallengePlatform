<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ParticipantMiddleware;
use App\Participation;
use Illuminate\Http\Request;

class PartipationController extends Controller
{
    public function create(){
        return view ('/participate');
    }

    public function store(Request $request,$idUser,$idChallenge)
    {

        $participation = new Participation();
        $participation->user_id = $idUser;
        $participation->challenge_id= $idChallenge;
        $participation->winner=false;
        $participation->code = $request->code;
        $participation->save();

        return redirect(route('home'))->with('successMsg','Code Successfully Submitted');
    }

    public function viewCode($idChallenge){

         $participations = Participation::where('challenge_id', $idChallenge)->get();
        return view('viewCode',compact('participations'));
    }

    public function decideWinner($id)
    {
        $participation = Participation::find($id);
        $participation->winner = true;
        $participation->update();
        return redirect(route('home'))->with('successMsg', 'The winner is Chosen Successfully ');
    }

    public function getWinners(){

        $participations = Participation::where('winner',1)->get();
        return view('winners',compact('participations'));
    }

    public function getWinnerCode($id){
        //
    }

}
