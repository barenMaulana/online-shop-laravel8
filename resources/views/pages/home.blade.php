   @extends('layouts/App')
   @section('content')
   <!-- Masthead-->
   <header class="masthead">
       <div class="container d-flex h-100 align-items-center">
           <div class="mx-auto text-center">
               <h1 class="mx-auto my-0 text-uppercase">SportLine</h1>
               <h2 class="text-white-50 mx-auto mt-2 mb-5">Belanja online membantu mengurangi wabah covid 19 menyebar,
                   ayo belanja online.</h2>
               <a class="btn btn-primary js-scroll-trigger" href="#about">BELANJA</a>
           </div>
       </div>
   </header>
   <!-- About-->
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
           <img class="img-fluid" src="{{ url('/frontend/assets/img/run.png') }}" alt="" />
       </div>
   </section>
   <!-- Product-->
   <section class="projects-section bg-light" id="projects">
       <div class="container">
           <!-- Featured Product Row-->
           <div class="row align-items-center no-gutters mb-4 mb-lg-5">
               <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ url('/frontend/assets/img/sepatu1.png') }}" alt="" /></div>
               <div class="col-xl-4 col-lg-5">
                   <div class="featured-text text-center text-lg-left">
                       <h4>Nike</h4>
                       <p class="text-black-50 mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde
                           excepturi cum accusantium incidunt, a ducimus, quas facere at adipisci sunt cupiditate rem
                           debitis sapiente corporis? Minus tenetur nobis nulla cum!</p>
                   </div>
               </div>
           </div>
           <!-- Project One Row-->
           <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
               <div class="col-lg-6"><img class="img-fluid" src="{{ url('/frontend/assets/img/sepatu2.png') }}" alt="" /></div>
               <div class="col-lg-6">
                   <div class="bg-black text-center h-100 project">
                       <div class="d-flex h-100">
                           <div class="project-text w-100 my-auto text-center text-lg-left">
                               <h4 class="text-white">Trail running</h4>
                               <p class="mb-0 text-white-50">An example of where you can put an image of a project, or
                                   anything else, along with a description.</p>
                               <hr class="d-none d-lg-block mb-0 ml-0" />
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Project Two Row-->
           <div class="row justify-content-center no-gutters">
               <div class="col-lg-6"><img class="img-fluid" src="{{ url('/frontend/assets/img/sepatu3.png') }}" alt="" /></div>
               <div class="col-lg-6 order-lg-first">
                   <div class="bg-black text-center h-100 project">
                       <div class="d-flex h-100">
                           <div class="project-text w-100 my-auto text-center text-lg-right">
                               <h4 class="text-white">Adidas</h4>
                               <p class="mb-0 text-white-50">Another example of a project with its respective
                                   description. These sections work well responsively as well, try this theme on a
                                   small screen!</p>
                               <hr class="d-none d-lg-block mb-0 mr-0" />
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Signup-->
   <section class="signup-section" id="signup">
       <div class="container">
           <div class="row">
               <div class="col-md-10 col-lg-8 mx-auto text-center">
                   <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                   <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                   <form class="form-inline d-flex">
                       <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                       <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact-->
   <section class="contact-section bg-black">
       <div class="container">
           <div class="row">
               <div class="col-md-4 mb-3 mb-md-0">
                   <div class="card py-4 h-100">
                       <div class="card-body text-center">
                           <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                           <h4 class="text-uppercase m-0">Address</h4>
                           <hr class="my-4" />
                           <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 mb-3 mb-md-0">
                   <div class="card py-4 h-100">
                       <div class="card-body text-center">
                           <i class="fas fa-envelope text-primary mb-2"></i>
                           <h4 class="text-uppercase m-0">Email</h4>
                           <hr class="my-4" />
                           <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 mb-3 mb-md-0">
                   <div class="card py-4 h-100">
                       <div class="card-body text-center">
                           <i class="fas fa-mobile-alt text-primary mb-2"></i>
                           <h4 class="text-uppercase m-0">Phone</h4>
                           <hr class="my-4" />
                           <div class="small text-black-50">+1 (555) 902-8832</div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="social d-flex justify-content-center">
               <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
               <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
               <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
           </div>
       </div>
   </section>
   @endsection