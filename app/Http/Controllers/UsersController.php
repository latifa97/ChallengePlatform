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
}
