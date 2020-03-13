<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
  {
    $sum = User::whereHas('role', function($query) {
        $query->where('id', 4);
        })->count();

    $today= Carbon::now()->toDateTimeString();

    view()->share('sumGuests', $sum);
    view()->share('today', $today);
  }
}
