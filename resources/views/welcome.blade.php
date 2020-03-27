@extends('layouts.master')
@section('title')
    Social Network - Login and Signup
@endsection
@section('content')
<div class="row my-2 align-items-center">
    <div class="col-md-7">
        <p class="display-4 ">
          Social Network helps you connect and share with the people in your life.
        </p>
    </div>
    <div class="col-md-5">
        <h2 class="py-1 mt-3">Create an account</h2>
        <h4 class="py-1">It's quick and easy.</h4>
    <form action="{{route('signup')}}" method="post">
          <div class="form-row">
          <div class="form-group col-md-6">
              <label for="first_name">First Name</label>
              <input id="first_name" class="form-control form-control-sm shadow-sm rounded" type="text" name="first_name">
          </div>

          <div class="form-group col-md-6">
              <label for="last_name" >Last Name</label>
              <input id="last_name" class="form-control form-control-sm shadow-sm rounded" type="text" name="last_name">
          </div>

          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control form-control-sm shadow-sm rounded" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control form-control-sm shadow-sm rounded" id="exampleInputPassword1">
          </div>
          <div class="form-group col-md-12">
              <button type="submit" class="btn btn-sm btn-primary float-right shadow-sm rounded">Sign Up</button>
              <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>
      </div>
        </form>
    </div>
</div>
@endsection