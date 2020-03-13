<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class UsersController extends Controller
{
    public function getOrganizers(){

         $organizers = User::whereHas('role', function($query) {
            $query->where('id', 2);
        })->get();
         return view('organizers',compact('organizers'));
    }

    public function getParticipants(){

        $participants = User::whereHas('role', function($query) {
           $query->where('id', 3);
       })->get();
        return view('participants',compact('participants'));
   }

   public function getGuests(){

        $guests = User::whereHas('role', function($query) {
        $query->where('id', 4);
        })->get();

    return view('guests',compact('guests'));

}

   public function delete($id){
     User::find($id)-> delete();
     return redirect(route('organizers'))->with('successMsg', 'Organizer Successfully Deleted');
   }
   public function deleteParticipant($id){
    User::find($id)-> delete();
    return redirect(route('participants'))->with('successMsg', 'Participant Successfully Deleted');
  }

   public function update($id)
    {
        $user = User::find($id);
        $user->role_id = 3;
        $user->update();
        return redirect(route('participants'))->with('successMsg', 'Guest Successfully Approved');
    }


}
