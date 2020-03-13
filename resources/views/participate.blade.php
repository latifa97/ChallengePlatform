@extends('layouts.main')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    /* background:-webkit-linear-gradient(top right, white, black); */
    margin-top: 1%;
    margin-bottom: 1%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 5%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.customcar{
    color: black;
    -webkit-text-fill-color: white;
                                          -webkit-text-stroke-width: 1px;
                                            -webkit-text-stroke-color: black;
}
 </style>
<div class=" register">

                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h1>Welcome to Challenge</h1>
                        <p>Show us your fantastic code !</p>

                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Challenge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Submit</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h1 class="register-heading">{{$challenge->name}}</h1><br><br>
                                <div class=" register-form">
                                    <div class="row">
                                        <div class="col">    <h4 >  Challenge Number :</h4></div>
                                        <div class="col">   <h4 > {{$challenge->id}} </h4></div>
                                    </div><br><br>
                                    <div class="row">
                                        <div class="col">    <h4 >  Start Date :</h4></div>
                                        <div class="col">    <h4 > {{$challenge->startDate}} </h4></div>
                                    </div><br><br>
                                    <div class="row">
                                        <div class="col">   <h4 >  Deadline :</h4></div>
                                        <div class="col">    <h4 > {{$challenge->endDate}} </h4></div>
                                    </div><br><br>
                                    <div class="row">
                                        <div class="col">    <h4 > Status :</h4></div>
                                        {{-- @if ({{$today}} <=> {{$challenge->endDate}} == -1) --}}
                                        <div class="col">   <h4 style="
                                            -webkit-text-fill-color: #00B712;
                                          -webkit-text-stroke-width: 1.5px;
                                            -webkit-text-stroke-color: #5AFF15;"> {{$challenge->status}} </h4>
                                        </div>
                                        {{-- @else
                                        <div class="col">   <h4 style="
                                            -webkit-text-fill-color: red;
                                          -webkit-text-stroke-width: 1.5px;
                                            -webkit-text-stroke-color: red;"> Closed </h4>
                                        </div>
                                        @endif --}}

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Submit Yor Code !</h3>
                                <form action="{{ route('participate',['idUser'=>Auth::user()->id,'idChallenge'=> $challenge->id])}}" method="post">
                                    {{ csrf_field() }}
                                    @method('POST')
                                     <div class="row register-form">
                                    <textarea class="form-control rounded-0"  placeholder="Submit your code here and win the challenge ! " rows="11" name="code" ></textarea>

                                     <div class="col-md-6" style="margin-left:15%" >
                                     <input type="submit"  class="btnRegister"  value="Submit"/>
                                     </div>
                                    </div>
                                </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
 @endsection
