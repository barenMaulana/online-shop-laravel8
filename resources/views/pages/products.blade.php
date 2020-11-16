@extends('layouts.App')
@section('content')
<section class="about-section text-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">SportLine</h2>
                    <p class="text-white-50">
                        Sebuah toko online asal indonesia yang menyediakan produk untuk olahraga,dan otomotif, lengkap,
                        murah, mudah.
                        <a href="#">sport</a>
                        kesehatan itu penting, mari berolahraga dan mulai hidup sehat.
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                <div class="col-12 col-lg-3 my-4">
                    <div class="card mx-auto" style="width: 17rem;">
                        <img class="card-img-top" src="{{ asset('storage/'.$product->product_image) }}" alt="Card image cap">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text" style="height: 100px;overflow:auto;font-size:12px">{{ $product->product_description }}</p>
                            <hr>
                            @auth
                            <form action="{{ url('admin/transactions/store') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product->product_price }}">
                                <button class="btn-sm btn-custom-card-product" style="width: 100%">tambah<i class="fa fa-shopping-cart"></i></button>
                            </form>
                            @endauth
                            @guest
                                <a href="{{ url('register') }}" class="btn-sm btn-custom-card-product">BELI</a>
                            @endguest
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
