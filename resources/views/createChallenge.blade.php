@extends('layouts.main')
@section('content')

<div class="container">

    @if($errors->any())
    @foreach ($errors->all() as $error)

    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>

    @endforeach

    @endif

    <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
        {{ csrf_field() }}
        <p class="h4 mb-4">Add New Challenge !</p>
        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" placeholder="Challenge Name">
        <input class="form-control mb-4" name="startDate" placeholder="Start Date">
        <input class="form-control mb-4" name="endDate" placeholder="End Date">

        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="9" name="description" placeholder="Description"></textarea>
        </div>
        <button class="btn btn-info btn-block"style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)"  type="submit">Create Challenge</button>

        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Launch
            modal
        </button>
        <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-success" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading lead">Success</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                            <p> Challenge Successfully Added</p>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">OK</a>
                    </div>
                </div>

            </div>
        </div> -->

    </form>

    <br>
    <br>
    <br>
</div>
@endsection
