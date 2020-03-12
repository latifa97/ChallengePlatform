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
        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" value="{{$challenge->name}}">

        <input class="form-control mb-4" name="startDate" value="{{$challenge->startDate}}">
        <input class="form-control mb-4" name="endDate" value="{{$challenge->endDate}}">

        <div class="form-group">
            <input class="form-control rounded-0" id="exampleFormControlTextarea2" name="description"  value="{{$challenge->description}}" ></textarea>
        </div>

        {{-- <!--Textarea with icon prefix-->
<div class="md-form mb-4 pink-textarea active-pink-textarea-2">
    <textarea id="form23" class="md-textarea form-control" rows="3"></textarea>
    <label for="form23">Edit Description</label>
  </div>

  <!--Textarea with icon prefix--> --}}
        <button class="btn btn-info btn-block"style="background:-webkit-linear-gradient(left, #3931af, #00c6ff)"  type="submit">Edit Challenge</button>


    </form>

    <br>
    <br>
    <br>
</div>
@endsection
