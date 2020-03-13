@extends('layouts.main')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}

.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #00B712;
    background-color:#fff ;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}


</style>
@foreach ($participations as $participation)


  <div class="container login-container">

        <div class="col-md-12 login-form-2" style="margin-bottom:1%"">
            <h3>Code Candidat {{$participation->user_id}}</h3><br>
            <div class="form-group">
                <textarea readonly class="form-control rounded-0"  rows="20" name="description" >{{$participation->code}}</textarea>
              {{-- <div class="container" style="background-color:white"><code> {{$participation->code}}</code></div> --}}

            <form  action="{{ route('decideWinner', $participation->id) }}" method="POST" >
                {{ csrf_field() }}
            <div class="form-group col-md-6 " style="margin-left:35%">
                {{-- <input type="submit" class="btnSubmit" value="Decide Winner" /> --}}
                <button   class="btn btn-outline-white btn-rounded px-4" style="background-image:linear-gradient(to left,#5AFF15, #5AFF15)" ><strong>Decide Winner</strong>
                </button>
            </div>
            </form>
        </div>

    </div>
</div>
@endforeach

@endsection
