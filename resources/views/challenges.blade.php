@extends('layouts.main')
@section('content')





    <div class="row align-items-start" style="margin-top:5%; margin-left:20px">
        @foreach ($challenges as $chall)
        <!-- Card -->
        <div class="col card card-cascade wider" style="height:400px; length:300px; margin-right:30px">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header " style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)">

            <!-- Title -->
            <h2 class="card-header-title mb-3" style="color:white">{{$chall->name}}</h2>
            <!-- Text -->
            <p class="mb-0" style="color:white"><i class="fas fa-calendar mr-2" style="color:white"></i>{{$chall->endDate}}</p>

            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

            <!-- Text -->
            <p class="card-text">{{$chall->description}}</p>
            <!-- Link -->

                <a class="blue-text d-flex flex-row-reverse p-2 " href="/participate" style="margin-bottom:20%">
                    <h5 class="waves-effect waves-light nav-link" >Participate<i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>


                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)">
                    <i class="fas fa-pencil-alt mt-0"></i>
                  </button>
                  <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#centralModalDanger" style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)">
                    <i class="far fa-trash-alt mt-0"></i>
                  </button>


            </div>
            <!-- Card content -->
        </div>
        <!-- Card -->


         <!-- Central Modal Medium Warning -->
  <div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Delete Challenge</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          {{-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> --}}
          <p> Are you sure you want to delete this challenge , Admin ?</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No</a>

        <form  action="{{route('delete',$chall->id)}}" method="POST>
            {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>

        {{-- <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Yes, Delete</a> --}}

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Warning-->
        @endforeach


        {{-- peach-gradient
            blue-gradient --}}

  </div>

  @if (session('successMsg'))
        <div class="alert alert-success" role="alert">
            {{ session('successMsg') }}
        </div>
        @endif





@endsection
