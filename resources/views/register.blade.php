@extends('layouts.app')
@section('content')

<div class="row" style="margin-top: 10px;">
  <div class="col-md-8 ">
      <form action="{{ route('register_post') }}" method="POST" role="form" enctype="multipart/form-data">
      @csrf
      <legend>User Registration</legend>
   
      <div class="form-group">
         <label for="">User Name</label>
         <input type="text" class="form-control" placeholder="User Name" name="username">
      </div>
      <div class="form-group">
         <label for="">First Name</label>
         <input type="text" class="form-control" placeholder="First Name" name="user_firstname">
      </div>
      <div class="form-group">
         <label for="">Last Name</label>
         <input type="text" class="form-control" placeholder="Last Name" name="user_lastname">
      </div>
      <div class="form-group">
         <label for="">User Email</label>
         <input type="email" class="form-control" placeholder="User Email" name="user_email">
      </div>

      <div class="form-group">
         <label for="">User Image</label>
         <input type="file" class="form-control" placeholder="User Image" name="user_image">
      </div>

      <div class="form-group">
         <label for="">Password</label>
         <input type="password" class="form-control" name="user_password">
      </div>
   
      
   
      <button style="margin-bottom: 10px;" type="submit" class="btn btn-primary">Register</button>
   </form>
</div>
</div>
     
@endsection