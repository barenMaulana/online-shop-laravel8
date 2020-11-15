@extends('layouts.Admin')
@section('content')
<h2 class="text-center">Upload Produk</h2>
<div class="row">
    <div class="col-lg-9 mx-auto">
        <div class="card mt-3 shadow">
            <div class="card-body">
                <form action="{{ url('admin/products/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nameProduct">Nama produk</label>
                        <input name="product_name" type="text" value="{{ old('product_name') }}" class="form-control @error('product_name') is-invalid @enderror" class="form-control" id="nameProduct"
                            aria-describedby="emailHelp">
                        @error('product_name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>    
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="product_price">Harga produk</label>
                                <input name="product_price" type="number" value="{{ old('product_price') }}" class="form-control @error('product_price') is-invalid @enderror" class="form-control" id="product_price"
                                    aria-describedby="emailHelp">
                                @error('product_price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>    
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="product_qty">Stok</label>
                                <input name="product_qty" type="number" value="{{ old('product_qty') }}" class="form-control @error('product_qty') is-invalid @enderror" class="form-control" id="product_qty"
                                    aria-describedby="emailHelp">
                                @error('product_qty')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>    
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_description">Deskripsi produk</label>
                        <textarea name="product_description" id="product_description" class="form-control @error('product_description') is-invalid @enderror" cols="30" rows="10"></textarea>
                        @error('product_description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>    
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_image">Gambar produk</label>
                        <input name="product_image" type="file" class="form-control @error('product_image') is-invalid @enderror" class="form-control" id="product_image"
                            aria-describedby="emailHelp">
                        @error('product_image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>    
                        @enderror
                    </div>
                    <a href="{{ url('admin/products') }}" class="btn btn-light">cancel</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection