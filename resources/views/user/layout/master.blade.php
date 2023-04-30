<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>LARABOOTSTRAP</title>
       <!-- href="{{ asset('public/admin/assets/images/favicon.png') }}" -->
      <link href="{{ asset('public/user/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/aos.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/swiper-bundle.min.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/cssmenu-styles.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/fontawesome.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('public/user/css/responsive.css') }}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="menu-overlay"></div>

        @include('user.layout.header')

        @include('user.layout.menubar')


        @yield('content')

    <!-- <div class="best-offer-sec comm-PTB-half">
         <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">Best offers</h2>
            <div class="row best-offers">
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="best-offer-box skyblue-box">
                     <div class="offer-card-det">
                        <div class="offer-card"><img src="images/smart-sim.jpg" alt=""></div>
                        <div class="offer-card-name">
                           <h6>Smart Comfort X eSIM</h6>
                           <p>SimOptions</p>
                        </div>
                     </div>
                     <div class="price-rating flex-cn-sb">
                        <div class="rating-star">
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star lightblue-star"></i>
                        </div>
                        <div class="card-price">
                           <span>$17.90</span><del>$24.90</del>
                        </div>
                     </div>
                     <div class="card-box-padd">
                        <div class="card-list-sec">
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Data <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                 <div class="show-info-tooltip">This package has been upgraded from 4GB to 6GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.<i class="pointer"></i></div></div>
                              </div>
                              <div class="card-pro-res">5GB</div>

                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Calls <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                 <div class="show-info-tooltip">This package has been upgraded from 4GB to 6GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.<i class="pointer"></i></div></div>
                              </div>
                              <div class="card-pro-res">not included</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">SMS
                                 <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                    <div class="show-info-tooltip">This package has been upgraded from 4GB to 6GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.<i class="pointer"></i></div></div>
                              </div>
                              <div class="card-pro-res">not included</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Credit validity
                                 <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                    <div class="show-info-tooltip">This package has been upgraded from 4GB to 6GB for all activations after 10 April 2019. Supports 3G+ / 4G speed wherever available.<i class="pointer"></i></div></div>
                              </div>
                              <div class="card-pro-res">30 days</div>
                           </div>
                        </div>
                        <div class="sim-show-detail">
                           <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-1" aria-expanded="false" aria-controls="col-1">
                                       Country Coverage</button>
                                 </h2>
                                 <div id="col-1" class="accordion-collapse collapse" aria-labelledby="acc-1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <ul>
                                             <li>Aland Islands</li>
                                             <li>Austria</li>
                                             <li>Azores</li>
                                             <li>Balearic Islands</li>
                                             <li>Belgium</li>
                                             <li>Bulgaria</li>
                                             <li>Canary Islands</li>
                                             <li>Croatia</li>
                                             <li>Cyprus</li>
                                             <li>Czech Republic</li>
                                             <li>Denmark</li>
                                             <li>Estonia</li>
                                             <li>Finland</li>
                                             <li>France</li>
                                             <li>French Guiana</li>
                                             <li>Germany</li>
                                             <li>Gibraltar</li>
                                             <li>Greece</li>
                                             <li>Guadeloupe</li>
                                             <li>Guernsey</li>
                                             <li>Hungary</li>
                                             <li>Iceland</li>
                                             <li>Ireland</li>
                                             <li>Isle of Man</li>
                                             <li>Italy</li>
                                             <li>Jersey</li>
                                             <li>Latvia</li>
                                             <li>Liechtenstein</li>
                                             <li>Lithuania</li>
                                             <li>Luxembourg</li>
                                             <li>Madeira</li>
                                             <li>Malta</li>
                                             <li>Martinique</li>
                                             <li>Mayotte</li>
                                             <li>Netherlands</li>
                                             <li>Norway</li>
                                             <li>Poland</li>
                                             <li>Portugal</li>
                                             <li>Réunion</li>
                                             <li>Romania</li>
                                             <li>Saint Barthélemy</li>
                                             <li>Saint Martin</li>
                                             <li>San Marino</li>
                                             <li>Slovakia</li>
                                             <li>Slovenia</li>
                                             <li>Spain</li>
                                             <li>Sweden</li>
                                             <li>Switzerland</li>
                                             <li>United Kingdom</li>
                                             <li>Vatican City</li>
                                         </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-2" aria-expanded="false" aria-controls="col-2">
                                       SIM Card Formats
                                    </button>
                                 </h2>
                                 <div id="col-2" class="accordion-collapse collapse" aria-labelledby="acc-2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                             <div class="bt-order d-flex align-items-start justify-content-between">
                                                <div class="sim-left-cont">Pre-cut in</div>
                                                <div class="sim-right-cont"></div>
                                             </div>
                                             <div class="bt-order d-flex align-items-start justify-content-between">
                                                <div class="sim-left-cont">Standard SIM</div>
                                                <div class="sim-right-cont">25 x 15mm</div>
                                             </div>
                                             <div class="bt-order d-flex align-items-start justify-content-between">
                                                <div class="sim-left-cont">Micro SIM</div>
                                                <div class="sim-right-cont">15 x 12mm</div>
                                             </div>
                                             <div class="bt-order d-flex align-items-start justify-content-between">
                                                <div class="sim-left-cont">15 x 12mm</div>
                                                <div class="sim-right-cont">12.3 x 8.8mm</div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-3" aria-expanded="false" aria-controls="col-3">
                                      Top-Up Options
                                    </button>
                                 </h2>
                                 <div id="col-3" class="accordion-collapse collapse" aria-labelledby="acc-3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p>Please note that THREE UK only accepts top up with (1) credit cards that are registered to a UK address or (2) THREE UK top up vouchers.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-4" aria-expanded="false" aria-controls="col-4">
                                       Compatibility
                                    </button>
                                 </h2>
                                 <div id="col-4" class="accordion-collapse collapse" aria-labelledby="acc-4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p>Usable in any unlocked phone, tethering not allowed.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-5"  aria-expanded="false" aria-controls="col-5">
                                       Useful information
                                    </button>
                                 </h2>
                                 <div id="col-5" class="accordion-collapse collapse" aria-labelledby="acc-5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p>This SIM Card comes with a U.K. phone number.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-6" aria-expanded="false" aria-controls="col-6">
                                       APN settings
                                    </button>
                                 </h2>
                                 <div id="col-6" class="accordion-collapse collapse" aria-labelledby="acc-6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p>Access Point Name (or APN): three.co.uk User name: none Password: none **Please always enable your data roaming after inserting your travel SIM Card</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-7" aria-expanded="false" aria-controls="col-7">
                                       SIM validity
                                    </button>
                                 </h2>
                                 <div id="col-7" class="accordion-collapse collapse" aria-labelledby="acc-7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p><b>1 year</b> (If you are not using your SIM Card within 1 year, your SIM Card becomes invalid.)</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-8"  aria-expanded="false" aria-controls="col-8">
                                       Activation required
                                    </button>
                                 </h2>
                                 <div id="col-8" class="accordion-collapse collapse" aria-labelledby="acc-8" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p><b>No</b> (Please note that the SIM Card activates immediately upon insertion into your device. Your credit validity starts from this moment.)</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="acc-9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-9" aria-expanded="false" aria-controls="col-9">
                                       SIM Number
                                    </button>
                                 </h2>
                                 <div id="col-9" class="accordion-collapse collapse" aria-labelledby="acc-9" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <div class="sim-acc-det">
                                          <p><b>U.K. (+44)</b> (This SIM Card comes with a U.K. phone number)</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                        <div class="offer-list-btn flex-cn-sb">
                           <a href="javascript:void(0);" class="btn btn-primary black-btn more-det-btn">More details</a>
                           <a href="" class="btn btn-primary blue-btn">Buy now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="best-offer-box darkblue-box">
                     <div class="offer-card-det">
                        <div class="offer-card"><img src="images/q2-sim.jpg" alt=""></div>
                        <div class="offer-card-name">
                           <h6>Go Card eSIM</h6>
                           <p>O2</p>
                        </div>
                     </div>
                     <div class="price-rating flex-cn-sb">
                        <div class="rating-star">
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star lightblue-star"></i>
                        </div>
                        <div class="card-price">
                           <span>$24.90</span><del>$39.90</del>
                        </div>
                     </div>
                     <div class="card-box-padd">
                        <div class="card-list-sec">
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Data <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">10GB</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Calls <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">50 CZK</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">SMS <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">50 CZK</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Credit validity <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">30 days</div>
                           </div>
                        </div>
                        <div class="offer-list-btn flex-cn-sb">
                           <a href="" class="btn btn-primary black-btn">More details</a>
                           <a href="" class="btn btn-primary blue-btn">Buy now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="best-offer-box orange-box">
                     <div class="offer-card-det">
                        <div class="offer-card"><img src="images/orang-sim.jpg" alt=""></div>
                        <div class="offer-card-name">
                           <h6>Holiday Zen eSIM</h6>
                           <p>Orange</p>
                        </div>
                     </div>
                     <div class="price-rating flex-cn-sb">
                        <div class="rating-star">
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star yellow-star"></i>
                           <i class="fa fa-star lightblue-star"></i>
                        </div>
                        <div class="card-price">
                           <span>$29.90</span><del>$39.90</del>
                        </div>
                     </div>
                     <div class="card-box-padd">
                        <div class="card-list-sec">
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Data <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">8GB</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Calls <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">Unlimited*</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">SMS <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">Unlimited*</div>
                           </div>
                           <div class="card-list flex-cn-sb">
                              <div class="card-pro">Credit validity <a href=""><i class="bi bi-question-circle"></i></a></div>
                              <div class="card-pro-res">14 days</div>
                           </div>
                        </div>
                        <div class="offer-list-btn flex-cn-sb">
                           <a href="" class="btn btn-primary black-btn">More details</a>
                           <a href="" class="btn btn-primary blue-btn">Buy now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div> -->
      <div class="howitwork-sec comm-PTB-half">
         <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">How it works</h2>
            <p data-aos="fade-up" data-aos-delay="200">Check <a href="">Help & FAQs</a> to see if your device supports eSIM</p>
            <div class="row">
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="howitwork-box">
                     <div class="howitwork-img">
                        <img src="{{ asset('public/user/images/how-it-work-img-1.png') }}" alt="">
                     </div>
                     <div class="howitwork-cont">
                        <h5>Choose destination & package</h5>
                        <p>MobiMatter offers eSIM packages for 130+ countries</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="howitwork-box">
                     <div class="howitwork-img">
                        <img src="{{ asset('public/user/images/how-it-work-img-2.png') }}" alt="">
                     </div>
                     <div class="howitwork-cont">
                        <h5>Install eSIM</h5>
                        <p>Instantly get your eSIM and configure it in your eSIM compatible device</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="howitwork-box">
                     <div class="howitwork-img">
                        <img src="{{ asset('public/user/images/how-it-work-img-3.png') }}" alt="">
                     </div>
                     <div class="howitwork-cont">
                        <h5>Enjoy high speed connectivity</h5>
                        <p>Once eSIM is configured, you can enjoy high speed roaming data connectivity</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="esim-process-sec comm-PTB text-center">
         <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">eSIM Activation Process</h2>
            <p data-aos="fade-up" data-aos-delay="200">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <div class="tab-slider-sec" data-aos="fade-up" data-aos-delay="300">
               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Android</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Apple</button>
                  </li>
               </ul>
               <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-delay="400">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="app-mobile-process">
                        <div class="tab-android-slider">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-1.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-2.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-3.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-4.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-5.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-1.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-2.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-3.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-4.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-5.png') }}" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination1"></div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <div class="app-mobile-process">
                        <div class="tab-apple-slider d-none">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-1.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-2.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-3.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-4.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-5.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-1.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-2.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-3.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-4.png') }}" alt=""></div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="pro-img-padd"><img src="{{ asset('public/user/images/android-act-pro-img-5.png') }}" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

       @include('user.layout.footer')


      <script src="{{ asset('public/user/js/jquery-3.6.1.js') }}"></script>
      <script src="{{ asset('public/user/js/bootstrap.js') }}"></script>
      <script src="{{ asset('public/user/js/popper.min.js') }}"></script>
      <script src="{{ asset('public/user/js/cssmenu-script.js') }}"></script>
      <script src="{{ asset('public/user/js/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('public/user/js/sticky-header.js') }}"></script>
      <script src="{{ asset('public/user/js/aos.js') }}"></script>
      <script src="{{ asset('public/user/js/main.js') }}"></script>
      <script>
         var swiper = new Swiper(".homemainslider", {
           slidesPerView: 9,
           slidesPerGroup: 9,
           spaceBetween: 14,

           breakpoints: {
            320: {
               slidesPerView: 3,
               slidesPerGroup: 3,
               navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
               },
             },
            480: {
               slidesPerView: 4,
               slidesPerGroup: 4,
               navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
               },
             },

             768: {
               slidesPerView: 4,
               slidesPerGroup: 4,
               navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
               },
             },
             992: {
               slidesPerView: 6,
               slidesPerGroup: 6,
               navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
               },
             },

             1200: {
               slidesPerView: 9,
               slidesPerGroup: 9,
               pagination: {
                  el: ".swiper-pagination",
                  clickable: true,
               },
             },
           },
         });
      </script>
      <script>
         var tab_android_slider = new Swiper('.tab-android-slider', {
         centeredSlides: true,
         loop: true,
         speed: 500,
         slidesPerView: 5,
         spaceBetween: 45,
         observer: true,
         observeParents: true,
         autoplay: {
            delay: 3000,
         },
         pagination: {
         el: ".swiper-pagination1",
         clickable: true,
         },
         breakpoints: {
            320: {
               slidesPerView: 1,
               spaceBetween: 20,
            },
            480: {
               slidesPerView: 3,
               spaceBetween: 20,
            },
            1280: {
                  slidesPerView: 5,
            },
         },
         });
      </script>
      <script>

      </script>
      <script>
        $(document).on('shown.bs.tab','button[data-bs-toggle="pill"]',function(){
            // Initialize Apple Slider after first time tab content shown due to display issue of slider in tab.
            setTimeout(function(){
                if(!$('.tab-apple-slider').hasClass('swiper-initialized'))
                {
                    var tab_apple_slider = new Swiper('.tab-apple-slider', {
                        centeredSlides: true,
                        loop: true,
                        speed: 500,
                        slidesPerView: 5,
                        spaceBetween: 45,
                        observer: true,
                        observeParents: true,
                        autoplay: {
                            delay: 3000,
                        },
                        pagination: {
                            el: ".swiper-pagination2",
                            clickable: true,
                            },
                        breakpoints: {
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            480: {
                                slidesPerView: 3,
                                spaceBetween: 20,
                            },
                            1200: {
                                slidesPerView: 5,

                            },
                        },
                    });
                    setTimeout(function(){
                     $(".tab-apple-slider").removeClass('d-none');
            },300)
                }
            },20)

        });
      </script>
      <script>
        //  $(document).ready(function(){
        //     $(".more-det-btn").click(function(){
        //        $(".sim-show-detail").slideToggle(400);
        //     });
        //  });
         </script>
   </body>
</html>
