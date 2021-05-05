@extends('master')
@section('content')


<div id="custom-login" class="container ">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <form action="login" method="POST">@csrf
                {{-- <div class="form-group ">
                    <label for="name">Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div> --}}
                <div class="form-group ">
                    <label for="email">Email</label>
                  <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                  @error('password')
                      <span class="invalid-feedback">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>



@endsection
