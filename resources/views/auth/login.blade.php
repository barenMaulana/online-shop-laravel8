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
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn-sm btn-custom-login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection