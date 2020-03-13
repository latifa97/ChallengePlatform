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

    <form class="text-center border border-light p-5" action="{{ route('update', $challenge->id) }}" method="POST">
        {{ csrf_field() }}
        <p class="h4 mb-4">Edit Challenge Number {{$challenge->id}} </p>

        <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
            <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" value="{{$challenge->name}}">
            <label for="form23">Edit Title</label>
          </div>
          <br>

          <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
            <input type="date" class="form-control mb-4" name="startDate" value="{{$challenge->startDate}}">
            <label for="form23">Edit Start Date</label>
          </div>
          <br>
          <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
            <input type="date" class="form-control mb-4" name="endDate" value="{{$challenge->endDate}}">
            <label for="form23">Edit Start Date</label>
          </div>
     <br>
     <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="description"  rows="10" >{{$challenge->description}}</textarea>
    </div>
        <!--Textarea with icon prefix-->
            {{-- <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
            <textarea id="form23"  class="md-textarea form-control" rows="10"> {{$challenge->description}}</textarea>
            <label for="form23">Edit Description</label>
        </div> --}}

  <!--Textarea with icon prefix-->
        <button class="btn btn-info btn-block"style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)"  type="submit">Edit Challenge</button>


    </form>

    <br>
    <br>
    <br>
</div>
@endsection
