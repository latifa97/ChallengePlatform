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


     @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif
</div>

@endsection
