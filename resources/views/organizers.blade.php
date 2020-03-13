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
              <td>{{$organizer->email}}</td>
              <td>{{$organizer->created_at}}</td>
              <td><button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#centralModalDanger"  style=" background-image:linear-gradient(to left, #B02E0C, #EB4511)">
                <i class="far fa-trash-alt mt-0"></i>
              </button></td>
            </tr>

              <!-- Central Modal Medium Warning -->
  <div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Delete Organizer</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          {{-- <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i> --}}
          <p> Are you sure you want to delete this organizer , Admin ?</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No</a>

        <form  action="{{route('delete',$organizer->id)}}"  id="delete-form-{{$organizer->id }}" method="POST>
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

          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>

    </div>

  </div>

  <!-- Table with panel -->
  @endsection
