@extends('master')
@section("content")
<div class="container custum-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div><br>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection
