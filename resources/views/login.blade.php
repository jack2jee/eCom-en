@extends('master')
@section('content')


<div id="custom-login" class="container ">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>



@endsection
