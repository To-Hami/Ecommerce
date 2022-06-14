@extends('layouts.app')
@section('content')
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
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Fashion &amp; Acc</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Women's T-Shirts</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Men's T-Shirts</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Dresses</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Novelty socks</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Women's sunglasses</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Men's sunglasses</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Shavers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">bags</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Cosmetic</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Nail Art</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Skin Masks &amp; Peels</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Korean cosmetics</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Electronics</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">USB Flash drives</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Headphones</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Portable speakers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Cell Phone bluetooth headsets</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Keyboards</a></li>
                </ul>
                <h6 class="text-uppercase mb-4">Price range</h6>
                <div class="price-range pt-4 mb-5">
                  <div id="range"></div>
                  <div class="row pt-2">
                    <div class="col-6"><strong class="small fw-bold text-uppercase">From</strong></div>
                    <div class="col-6 text-end"><strong class="small fw-bold text-uppercase">To</strong></div>
                  </div>
                </div>
                <h6 class="text-uppercase mb-3">Show only</h6>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_1">
                  <label class="form-check-label" for="checkbox_1">Returns Accepted</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_2">
                  <label class="form-check-label" for="checkbox_2">Returns Accepted</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_3">
                  <label class="form-check-label" for="checkbox_3">Completed Items</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_4">
                  <label class="form-check-label" for="checkbox_4">Sold Items</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" id="checkbox_5">
                  <label class="form-check-label" for="checkbox_5">Deals &amp; Savings</label>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="checkbox_6">
                  <label class="form-check-label" for="checkbox_6">Authorized Seller</label>
                </div>
                <h6 class="text-uppercase mb-3">Buying format</h6>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_1">
                  <label class="form-check-label" for="radio_1">All Listings</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_2">
                  <label class="form-check-label" for="radio_2">Best Offer</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_3">
                  <label class="form-check-label" for="radio_3">Auction</label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="customRadio" id="radio_4">
                  <label class="form-check-label" for="radio_4">Buy It Now</label>
                </div>
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                      <li class="list-inline-item">
                        <select class="selectpicker" data-customclass="form-control form-control-sm">
                          <option value>Sort By </option>
                          <option value="default">Default sorting </option>
                          <option value="popularity">Popularity </option>
                          <option value="low-high">Price: Low to High </option>
                          <option value="high-low">Price: High to Low </option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-1.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Kui Ye Chen’s AirPods</a></h6>
                      <p class="small text-muted">$250</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-2.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Air Jordan 12 gym red</a></h6>
                      <p class="small text-muted">$300</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-primary">New</div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-3.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Cyan cotton t-shirt</a></h6>
                      <p class="small text-muted">$25</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-4.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Timex Unisex Originals</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-info">Sale</div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-5.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Red digital smartwatch</a></h6>
                      <p class="small text-muted">$250</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-6.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Nike air max 95</a></h6>
                      <p class="small text-muted">$300</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-7.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Joemalone Women prefume</a></h6>
                      <p class="small text-muted">$25</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-8.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Apple Watch</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-danger">Sold</div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-9.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Men silver Byron Watch</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-primary">New</div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-10.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Ploaroid one step camera</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-11.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Gray Nike running shoes</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                  <!-- PRODUCT-->
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="{{route('detail')}}"><img class="img-fluid w-100" src="{{asset('frontend/img/product-12.jpg')}}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('cart')}}">Add to cart</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="{{route('detail')}}">Black DSLR lense</a></h6>
                      <p class="small text-muted">$351</p>
                    </div>
                  </div>
                </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
    @endsection
