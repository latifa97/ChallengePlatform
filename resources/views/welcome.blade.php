@extends('layouts.main')
@section('content')
<main class="py-4">
    @yield('content')
</main>
<div class="container">
    <br><br><br><br>
    <div style="text-align: center">
    <h1 ><b> Challenge Dashboard </b></h1>
    <br><br>
    <h2> Are you ready for challenges ? Here we go !</h2>
    </div>


    <br>
<br>
@if (Auth::check() && Auth::user()->role_id == 4)

<div class="container">
<div class="row align-items-start" style="margin-top:5%; margin-left:20px">
             <!-- Card -->
            <div class="col card " >

                <!-- Card image -->
                <div style="background:-webkit-linear-gradient(left, #3931af, #00c6ff);" class="view view-cascade gradient-card-header " >
                    <h4 class="card-text" style="color:white"><strong>Dear Guest, </strong></h4><br>

                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <h5 class="card-text">Please Wait For Admin To Approve Your Request </h5><br>
                <!-- Text -->

                <!-- Link -->
                <!-- Card content -->

            </div>

            <!-- Card -->



@endif

     @if (session('successMsg'))
        <hr>
        <br>
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif

@endsection
