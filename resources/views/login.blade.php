@extends('master')
@section('content')
<div class="container custome-style">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
   <form method="POST" action="/login">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>
@endsection