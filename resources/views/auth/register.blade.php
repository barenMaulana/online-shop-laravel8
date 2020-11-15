@extends('layouts.Auth')

@section('content')

<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>password confirm</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>

                </div>
                
                <button type="submit" class="btn-sm btn-custom-login">REGISTER</button>
            </form>
        </div>
    </div>
    <div class="login mt-3 text-center">
        <p>Sudah punya akun ? Login <a href="/login">Disini</a></p>
    </div>
</div>

@endsection
