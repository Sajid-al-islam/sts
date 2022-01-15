@extends('layouts.app')

@section('content')
  <section id="nav">
        <div class="container">
            <div class="row justify-content-between">
                  <div class="col-md-2 col-6">
                      <a class="nav-logo w-100 d-inline-block" href="index.html"><img class="w-100" src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
                  </div>
                  <div class="col-md-8 d-none d-md-block">
                      <ul class="nav-menu list-unstyled d-flex justify-content-center align-items-center m-0 h-100">
                            <li><a href="" class="menu-item">Home</a></li>
                            <li><a href="" class="menu-item">Social Activity</a></li>
                            <li><a href="e-learning.html" class="menu-item">E-Learning</a></li>
                            <li><a href="" class="menu-item">Gyan Baksho</a></li>
                            <li><a href="" class="menu-item">School</a></li>
                            <li><a href="study-abroad.html" class="menu-item">Study Abroad</a></li>
                            <li><a href="" class="menu-item">Fundraising</a></li>
                            <li><a href="innovation.html" class="menu-item">Innovation</a></li>
                            <li><a href="" class="menu-item p-0">Career</a></li>
                      </ul>
                  </div>
                  <div class="col-md-2 d-none d-md-block">
                      <ul class="nav-sign list-unstyled d-flex align-items-center m-0 h-100">
                            <li><a href="" class="sign-item">Sign in</a></li>
                            <li><a href="" class="sign-item">Sign up</a></li>
                            <li><a href="" class="sign-item text-center d-block rounded-circle p-0"><i class="fas fa-search"></i></a></li>
                      </ul>
                  </div>
                  <!-- toggle btn -->
                  <div class="col-2 d-flex d-md-none align-items-center justify-content-center">
                      <button class="btn toggle-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fas fa-bars"></i>
                      </button>
                  </div>
            </div>
            <!-- toggle menu -->
            <div class="offcanvas offcanvas-start toggleMenu w-75" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                      <a class="w-75 mx-auto" href="index.html"><img class="img-fluid" src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <ul class="toggle-menu list-unstyled m-0">
                      <li><a href="" class="menu-item">Home</a></li>
                      <li><a href="" class="menu-item">Social Activity</a></li>
                      <li><a href="e-learning.html" class="menu-item">E-Learning</a></li>
                      <li><a href="" class="menu-item">Gyan Baksho</a></li>
                      <li><a href="" class="menu-item">School</a></li>
                      <li><a href="study-abroad.html" class="menu-item">Study Abroad</a></li>
                      <li><a href="" class="menu-item">Fundraising</a></li>
                      <li><a href="innovation.html" class="menu-item">Innovation</a></li>
                      <li><a href="" class="menu-item p-0">Career</a></li>
                      <li><a href="" class="sign-item">Sign in</a></li>
                      <li><a href="" class="sign-item">Sign up</a></li>
                  </ul>
            </div>
        </div>
  </section>
  <!-- Nav Section end -->

  <!-- Banner Section -->
  <section id="banner">
        <div class="container">
            <div class="swiper banner-slider">
                  <div class="swiper-wrapper">
                      <div class="banner-item swiper-slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/banner-1.png') }}" alt="banner">
                      </div>
                      <div class="banner-item swiper-slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/banner-2.png') }}" alt="banner">
                      </div>
                      <div class="banner-item swiper-slide">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/banner-3.png') }}" alt="banner">
                      </div>
                  </div>
                  <div class="swiper-pagination"></div>
            </div>
        </div>
  </section>
  <!-- Banner Section end -->

  <!-- Gyan Baksho Section -->
  <section id="gyan-box">
        <div class="container">
            <div class="section-title text-center position-relative">
                  <h1 class="m-0">Gyan Baksho</h1>
            </div>
            <div class="gyan-div">
                  <div class="row">
                      <div class="col-md-9 col-8">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                      <div class="gyan-item mx-auto"></div>
                                </div>
                                <div class="col-6 col-md-3">
                                      <div class="gyan-item mx-auto"></div>
                                </div>
                                <div class="col-6 col-md-3 mt-3 mt-md-0 d-none d-md-block">
                                      <div class="gyan-item mx-auto"></div>
                                </div>
                            </div>
                      </div>
                      <div class="col-md-3 col-4">
                            <img class="img-fluid" src="{{ asset('assets/frontend/images/Union.png') }}" alt="div image">
                      </div>
                  </div>
            </div>
        </div>
  </section>
  <!-- Gyan Baksho Section end -->

  <!-- E-Learning Section -->
  <section id="e-learn">
        <div class="container">
            <div class="section-title text-center position-relative">
                  <h1 class="m-0">E-Learning</h1>
            </div>
            <div class="elearn-div">
                  <div class="row">
                      <div class="col-md-6 d-flex flex-column my-auto">
                            <img src="{{ asset('assets/frontend/images/10tk.png') }}" alt="" class="img-fluid">
                            <div class="elearn-div-inner d-flex mx-auto">
                                <div class="elearn-box"></div>
                                <div class="elearn-box"></div>
                                <div class="elearn-box"></div>
                            </div>
                            <div class="elearn-btn text-center"><a href="" class="btn d-inline-block">Submit Now</a></div>
                      </div>
                      <div class="col-md-6 d-none d-md-block"><img src="{{ asset('assets/frontend/images/e-learn-sub.png') }}" alt="" class="img-fluid"></div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-6 pe-md-5">
                      <div class="div-title position-relative">
                            <h2 class="pb-1 mb-2 mb-md-3">Innovation</h2>
                      </div>
                      <a href="" class="learn-item d-block"><img src="{{ asset('assets/frontend/images/Intersection-1.png') }}" alt="" class="img-fluid"></a>
                  </div>
                  <div class="col-6 ps-md-5">
                      <div class="div-title position-relative">
                            <h2 class="pb-1 mb-2 mb-md-3">Study Abroad</h2>
                      </div>
                      <a href="" class="learn-item d-block"><img src="{{ asset('assets/frontend/images/Intersection-2.png') }}" alt="" class="img-fluid"></a>
                  </div>
            </div>
        </div>
  </section>
  <!-- E-Learning Section end -->

  <!-- Fundraising Section -->
  <section id="fundraising">
        <div class="container">
            <div class="section-title text-center position-relative">
                  <h1 class="m-0">Fundraising</h1>
            </div>
            <div class="fund-div">
                  <div class="container">
                      <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="fund-item text-center">
                                      <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}">
                                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusamus neque perspiciatis, quisquam nulla expedita molestiae repudiandae
                                          iusto aliquid
                                          sint eum laudantium officia delectus nihil magnam? Ad consectetur culpa tempora.</p>
                                      <a href="" class="btn ">Donate Now</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="fund-item text-center">
                                      <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}">
                                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusamus neque perspiciatis, quisquam nulla expedita molestiae repudiandae
                                          iusto aliquid
                                          sint eum laudantium officia delectus nihil magnam? Ad consectetur culpa tempora.</p>
                                      <a href="" class="btn ">Donate Now</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 mt-3 mt-md-0 d-none d-md-block">
                                <div class="fund-item text-center">
                                      <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}">
                                      <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusamus neque perspiciatis, quisquam nulla expedita molestiae repudiandae
                                          iusto aliquid
                                          sint eum laudantium officia delectus nihil magnam? Ad consectetur culpa tempora.</p>
                                      <a href="" class="btn ">Donate Now</a>
                                </div>
                            </div>
                      </div>
                  </div>
            </div>
            <div class="social">
                  <div class="div-title position-relative w-md-50">
                      <h2 class="pb-1 my-4">Social Activity</h2>
                  </div>
                  <div class="container">
                      <div class="row">
                            <div class="col-md-8 col-12 pe-md-4 mb-3 mb-md-0">
                                <div class="social-div">
                                      <div class="row">
                                          <div class="col-md-4 col-6">
                                                <div class="social-item">
                                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}" alt="div image">
                                                    <h4 class="my-1 my-md-3">Lorem ipsum dolor</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione possimus alias maiores impedit commodi voluptas qui inventore quod
                                                          eligendi? Facilis aliquam architecto ratione reprehenderit voluptates ducimus consequatur ullam eveniet id?</p>
                                                    <a class="btn" href="">Read More</a>
                                                </div>
                                          </div>
                                          <div class="col-md-4 col-6">
                                                <div class="social-item">
                                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}" alt="div image">
                                                    <h4 class="my-1 my-md-3">Lorem ipsum dolor</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione possimus alias maiores impedit commodi voluptas qui inventore quod
                                                          eligendi? Facilis aliquam architecto ratione reprehenderit voluptates ducimus consequatur ullam eveniet id?</p>
                                                    <a class="btn" href="">Read More</a>
                                                </div>
                                          </div>
                                          <div class="col-md-4 col-6 mt-3 mt-md-0 d-none d-md-block">
                                                <div class="social-item">
                                                    <img class="img-fluid" src="{{ asset('assets/frontend/images/found-item.png') }}" alt="div image">
                                                    <h4 class="my-1 my-md-3">Lorem ipsum dolor</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione possimus alias maiores impedit commodi voluptas qui inventore quod
                                                          eligendi? Facilis aliquam architecto ratione reprehenderit voluptates ducimus consequatur ullam eveniet id?</p>
                                                    <a class="btn" href="">Read More</a>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 ps-md-4">
                                <div class="volunteer-div h-md-100">
                                      <div class="text-center mx-auto volunteer-img"><img src="{{ asset('assets/frontend/images/announce.png') }}" alt="" class="w-50"></div>
                                      <h6 class="mb-1">We Need You!</h6>
                                      <h2 class="m-0">Become Volunteer</h2>
                                      <p class="my-md-4 my-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic voluptatum dolorum nam porro quia, accusantium odit!</p>
                                      <a href="" class="btn">Apply Now</a>
                                </div>
                            </div>
                      </div>
                  </div>
            </div>
        </div>
  </section>
  <!-- Fundraising Section end -->

  <!-- Footer Section -->
  <section id="footer">
        <div class="container">
            <div class="row">
                  <div class="col-md-3 col-6 mb-3 mb-md-0">
                      <div class="contact-div">
                            <h4 class="footer-title">Contact Information</h4>
                            <ul class="list-unstyled m-0">
                                <li class="contact-item"><i class="fas fa-phone-alt"></i> Phone: +44 05210 1105</li>
                                <li class="contact-item"><i class="fas fa-envelope"></i> E-mail: savethestudent@mail.com</li>
                                <li class="contact-item d-flex"><i class="fas fa-home pt-1"></i><span class="">Address: 656 Kingsland Rd, Bighouse, London</span></li>
                            </ul>
                            <ul class="list-unstyled m-0 d-flex">
                                <li><a href="" class="link-item"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="" class="link-item"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" class="link-item"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" class="link-item"><i class="fab fa-google-plus-square"></i></a></li>
                                <li><a href="" class="link-item"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                      </div>
                  </div>
                  <div class="col-md-3 col-6 mb-3 mb-md-0">
                      <h4 class="footer-title">Recent Posts</h4>
                  </div>
                  <div class="col-md-3 col-6">
                      <h4 class="footer-title">Latest Works</h4>
                      <div class="latest-work">
                            <div class="container-fluid ps-2">
                                <div class="row">
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                      <div class="col-md-4 col-6 p-1">
                                          <div class="work-item">
                                                <img src="{{ asset('assets/frontend/images/retangle.png.png') }}" alt="" class="img-fluid">
                                          </div>
                                      </div>
                                </div>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-6 about-div">
                      <h4 class="footer-title d-flex"><i class="fas fa-globe-asia pt-1 pe-2 pt-md-2 pe-md-4"></i> <span>Lorem ipsum dolor sit amet</span></h4>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime quo, explicabo labore unde, deleniti laudantium voluptatem possimus mollitia cupiditate dolor quas
                            ratione. Temporibus molestiae ad, iste iusto nobis porro iure.</p>
                  </div>
            </div>
        </div>
  </section>
  <section id="sub-footer">
        <div class="container">
            <div class="row text-center">
                  <p class="my-2">&copy; all rights reserved</p>
            </div>
        </div>
  </section>
@endsection 
