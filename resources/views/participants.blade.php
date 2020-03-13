@extends('layouts.main')
@section('content')

<!-- Table with panel -->
<div class="card card-cascade narrower">

    <!--Card image-->
    <div
      class="view view-cascade gradient-card-header narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center" style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)">

      <div>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        </button>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        </button>
      </div>

      <a  class="white-text">List of Participants</a>

      <div>
        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        </button>
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
              <th>
              </th>
              <th class="th-lg">
                <a>Identifier
                  <i class="fas fa-sort ml-1"></i>
                </a>
              </th>
              <th class="th-lg">
                <a href="">Name
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
              <th class="th-lg"></th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>

              @foreach ($participants as $participant)
            <tr>
              <th scope="row">
              </th>
               <td>{{$participant->id}}</td>
              <td>{{$participant->name}}</td>
              <td>{{$participant->email}}</td>
              <td>{{$participant->created_at}}</td>
              <td>
                <form  action="{{route('deleteParticipant',$participant->id)}}"  id="delete-form-{{$participant->id }}" method="POST>
                    {{ csrf_field() }}
                  <button type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2"   style=" background-image:linear-gradient(to left, #B02E0C, #EB4511)">
                <i class="far fa-trash-alt mt-0"></i>
                 </button>
                </form></td>
            </tr>
            @endforeach

          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>

    </div>

  </div>
  <br>
  <br>

  <div style="text-align: center">
  @if (session('successMsg'))
  <div class="alert alert-success" role="alert" style="width:50%">
      {{ session('successMsg') }}
  </div>
@endif
  </div>

  <!-- Table with panel -->
  @endsection
