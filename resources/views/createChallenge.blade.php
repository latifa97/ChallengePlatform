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

        <input type="date" class="form-control mb-4" name="startDate" placeholder="Start Date">
        <input type="date" class="form-control mb-4" name="endDate" placeholder="End Date">

        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="9" name="description" placeholder="Description"></textarea>
        </div>
        <button class="btn btn-info btn-block"style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)"  type="submit">Create Challenge</button>


    </form>

    <br>
    <br>
    <br>
</div>
@endsection
