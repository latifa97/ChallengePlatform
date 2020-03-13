@extends('layouts.main')
@section('content')
<main class="py-4">
    @yield('content')
</main>
<div class="container">
    <br>
    <div style="text-align: center">
    <br><br>
    <h2> Here is the winners of each challenge in here !</h2><br>
    <h2>Take part in our challenges and be the next WINNER ! <a href="/challenges" style="color:#00B712"><i class="fas fa-angle-double-right ml-2"></i></a></h2>
    </div>

<br>
<br>
<hr  >
<br>


<style>

.md-v-line {
position: absolute;
border-left: 1px solid rgba(0,0,0,.125);
height: 50px;
top:0px;
left:54px;
}
    </style>
@if (Auth::check() && (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 ||  Auth::user()->role_id == 3))


<ul class="list-group">



    <li  class="list-group-item " style="background:-webkit-linear-gradient(right, #00B712, #5AFF15);text-align:center">
        <a  class="white-text"><strong>List of Winners</strong></a>
      </li>
      @foreach ($participations as $participation)
      <li class="list-group-item ">
      <div class="md-v-line"></div><i class=" mr-4 pr-3"><img  src="//js.pngtree.com/web3/images/v2/premium-pulldown-img.png" style="width:25;height:25px;"></i>
      {{$participation->user_id }}
      wins in challenge number {{$participation->challenge_id}}
      {{-- <div style="margin-left:70%"> --}}

       <button   class="btn btn-outline-white btn-rounded" style="background:-webkit-linear-gradient(LEFT, #FFDD00, #FBB034);float:right" ><strong>View Code</strong>
    </button>
      {{-- </div> --}}
    </li>
    @endforeach
  </ul>

</div>


@endif
@endsection
