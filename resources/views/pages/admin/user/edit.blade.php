@extends('layouts.Admin')
@section('content')
<h2 class="text-center">Update Produk</h2>
<div class="row">
    <div class="col-lg-9 mx-auto">
        <div class="card mt-3 shadow">
            <div class="card-body">
                <form action="{{ url('admin/users/update/'.$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')  
                    <div class="form-group">
                        <label for="nameProduct">Nama</label>
                        <input name="name" type="text" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" class="form-control" id="nameProduct"
                            aria-describedby="emailHelp">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>    
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="product_price">email</label>
                                <input name="email" type="email"  disabled value="{{ $user->email }}" class="form-control" id="product_price"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/users') }}" class="btn btn-light">cancel</a>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection