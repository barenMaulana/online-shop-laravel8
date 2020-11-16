@extends('layouts.Admin')
@section('content')
<div class="container">
    <div class="text-center">
    <h1>{{ $product->product_name }}</h1>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-12 col-lg-6 mx-auto">
            <div class="card shadow">
            <img class="card-img-top" src="{{ asset('storage/'.$product->product_image) }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title text-center">{{ $product->product_name }}</h5>
            <hr>
            <p class="card-text">harga : {{ $product->product_price }}</p>
            <p class="card-text">stok : {{ $product->product_qty }}</p>
            <p class="card-text">Deskripsi</p>
            <div class="card p-2 shadow">
            <p>{{ $product->product_description }}</p>
            </div>
            </div>
            </div>
        </div>
        </div>  
      </div>
    </div>
  </div>
</div>
@endsection