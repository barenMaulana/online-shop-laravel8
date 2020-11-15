@extends('layouts.Auth')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="card mt-5 shadow">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <button type="submit" class="btn-sm btn-custom-login">Login</button>
                    </form>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            <a href="{{ url('/') }}">cancel</a>
                        </div>
                        <div class="col">
                            <a href="{{ url('/register') }}">not have account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection