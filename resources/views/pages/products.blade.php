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
                <div class="col-12 col-lg-4 my-1">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/frontend/assets/img/sepatu1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Nike shoes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <hr>
                            <a href="#" class="btn-sm btn-custom-card-product">BELI</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-1">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/frontend/assets/img/sepatu1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Nike shoes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <hr>
                            <a href="#" class="btn-sm btn-custom-card-product">BELI</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-1">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/frontend/assets/img/sepatu1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">Nike shoes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <hr>
                            <a href="#" class="btn-sm btn-custom-card-product">BELI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
