@extends('layouts.app')
@section('content')
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url({{asset('frontend/img/product-5.jpg')}})" href="{{asset('frontend/img/product-5.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="{{asset('frontend/img/product-5-alt-1.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="{{asset('frontend/img/product-5-alt-2.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="{{route('cart')}}">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('cart')}}">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="#">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="firstName">First name </label>
                    <input class="form-control form-control-lg" type="text" id="firstName" placeholder="Enter your first name">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="lastName">Last name </label>
                    <input class="form-control form-control-lg" type="text" id="lastName" placeholder="Enter your last name">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="email">Email address </label>
                    <input class="form-control form-control-lg" type="email" id="email" placeholder="e.g. Jason@example.com">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Phone number </label>
                    <input class="form-control form-control-lg" type="tel" id="phone" placeholder="e.g. +02 245354745">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="company">Company name (optional) </label>
                    <input class="form-control form-control-lg" type="text" id="company" placeholder="Your company name">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="form-label text-sm text-uppercase" for="country">Country</label>
                    <select class="country" id="country" data-customclass="form-control form-control-lg rounded-0">
                      <option value>Choose your country</option>
                    </select>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="address">Address line 1 </label>
                    <input class="form-control form-control-lg" type="text" id="address" placeholder="House number and street name">
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="addressalt">Address line 2 </label>
                    <input class="form-control form-control-lg" type="text" id="addressalt" placeholder="Apartment, Suite, Unit, etc (optional)">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                    <input class="form-control form-control-lg" type="text" id="city">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="state">State/County </label>
                    <input class="form-control form-control-lg" type="text" id="state">
                  </div>
                  <div class="col-lg-6">
                    <button class="btn btn-link text-dark p-0 shadow-0" type="button" data-bs-toggle="collapse" data-bs-target="#alternateAddress">
                      <div class="form-check">
                        <input class="form-check-input" id="alternateAddressCheckbox" type="checkbox">
                        <label class="form-check-label" for="alternateAddressCheckbox">Alternate billing address</label>
                      </div>
                    </button>
                  </div>
                  <div class="collapse" id="alternateAddress">
                    <div class="row gy-3">
                      <div class="col-12 mt-4">
                        <h2 class="h4 text-uppercase mb-4">Alternative billing details</h2>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName2">First name </label>
                        <input class="form-control form-control-lg" type="text" id="firstName2" placeholder="Enter your first name">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="lastName2">Last name </label>
                        <input class="form-control form-control-lg" type="text" id="lastName2" placeholder="Enter your last name">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="email2">Email address </label>
                        <input class="form-control form-control-lg" type="email" id="email2" placeholder="e.g. Jason@example.com">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="phone2">Phone number </label>
                        <input class="form-control form-control-lg" type="tel" id="phone2" placeholder="e.g. +02 245354745">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="company2">Company name (optional) </label>
                        <input class="form-control form-control-lg" type="text" id="company2" placeholder="Your company name">
                      </div>
                      <div class="col-lg-6 form-group">
                        <label class="form-label text-sm text-uppercase" for="countryAlt">Country</label>
                        <select class="country" id="countryAlt" data-customclass="form-control form-control-lg rounded-0">
                          <option value>Choose your country</option>
                        </select>
                      </div>
                      <div class="col-lg-12">
                        <label class="form-label text-sm text-uppercase" for="address2">Address line 1 </label>
                        <input class="form-control form-control-lg" type="text" id="address2" placeholder="House number and street name">
                      </div>
                      <div class="col-lg-12">
                        <label class="form-label text-sm text-uppercase" for="addressalt2">Address line 2 </label>
                        <input class="form-control form-control-lg" type="text" id="addressalt2" placeholder="Apartment, Suite, Unit, etc (optional)">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="city2">Town/City </label>
                        <input class="form-control form-control-lg" type="text" id="city2">
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="state2">State/County </label>
                        <input class="form-control form-control-lg" type="text" id="state2">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Red digital smartwatch</strong><span class="text-muted small">$250</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Gray Nike running shoes</strong><span class="text-muted small">$351</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>$601</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    @endsection

