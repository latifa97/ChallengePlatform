@extends('layouts.main')
@section('content')

<!-- Table with panel -->
<div class="card card-cascade narrower">

    <!--Card image-->
    <div
      class="view view-cascade gradient-card-header  narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center" style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)">

      <div>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">

        </button>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">

        </button>
      </div>

      <a  class="white-text">List of Guests</a>

      <div>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">

        </button>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">

        </button>
      </div>

    </div>
    <!--/Card image-->

    <div class="px-4">

      <div class="table-wrapper">
        <!--Table-->
        <table class="table table-hover mb-0">

          <!--Table head-->
          <thead>
            <tr>
                <th></th>
                <th class="th-lg">
                    <a>Identifier
                      <i class="fas fa-sort ml-1"></i>
                    </a>
                  </th>
              <th class="th-lg">
                <a>Name
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Username
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Email
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Created At
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>

              @foreach ($guests as $guest)
            <tr>
              <th scope="row">
                {{-- <input class="form-check-input" type="checkbox" id="checkbox1">
                <label class="form-check-label" for="checkbox1" class="label-table"></label> --}}
              </th>
              <td>{{$guest->id}}</td>
               <td>{{$guest->name}}</td>
              <td>{{$guest->username}}</td>
              <td>{{$guest->email}}</td>
              <td>{{$guest->created_at}}</td>

              <td>
                <form action="{{ route('approve', $guest->id) }}" method="POST" id="approve-form-{{$guest->id }}">
                    {{ csrf_field() }}
                  <button   class="btn btn-outline-white btn-rounded px-4" style="background-image:linear-gradient(to left, #06BCFB, #06BCFB)" >Approve
                  </button>
                </form>
             </td>

            </tr>



            <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-notify modal-warning" role="document">
   <!--Content-->
   <div class="modal-content">
     <!--Header-->
     <div class="modal-header">
       <p class="heading lead"> Approve <b>{{$guest->name}}</b> </p>

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true" class="white-text">&times;</span>
       </button>
     </div>

     <!--Body-->
     <div class="modal-body">
       <div class="text-center">
         <i class="fas fa-question fa-4x mb-3 animated rotateIn"></i>
         <p> Are you sure you want to approve <b>{{$guest->name}}</b> so he/she becomes able to take part in challenges ?</p>
       </div>
     </div>

     <!--Footer-->
     <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No</a>

        <form action="{{ route('approve', $guest->id) }}" method="POST" id="approve-form-{{$guest->id }}">
            {{ csrf_field() }}
            <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">Yes, Approve </a>
        </form>

     </div>
   </div>
   <!--/.Content-->
 </div>
</div>
<!-- Central Modal Medium Success-->
            @endforeach

          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>

    </div>

  </div>


  @if (session('successMsg'))
  <div class="alert alert-success" role="alert">
      {{ session('successMsg') }}
  </div>
@endif

  <!-- Table with panel -->
  @endsection
