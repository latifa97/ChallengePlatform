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

      <a  class="white-text">List of Organizers</a>

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

              @foreach ($organizers as $organizer)
            <tr>
              <th scope="row">
                {{-- <input class="form-check-input" type="checkbox" id="checkbox1">
                <label class="form-check-label" for="checkbox1" class="label-table"></label> --}}
              </th>
              <td>{{$organizer->id}}</td>
               <td>{{$organizer->name}}</td>
              <td>{{$organizer->username}}</td>
              <td>{{$organizer->email}}</td>
              <td>{{$organizer->created_at}}</td>
              <td><button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" style=" background-image:linear-gradient(to left, rgba(255,0,0,0), rgba(255,0,0,1))">
                <i class="far fa-trash-alt mt-0"></i>
              </button></td>
            </tr>
            @endforeach

          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>

    </div>

  </div>

  <!-- Table with panel -->
  @endsection
