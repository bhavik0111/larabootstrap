@extends('user.layout.master')

@section('content')
    <div class="best-offer-sec comm-PTB-half">
        <div class="container">

            @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            @if (session()->has('error_msg'))
                <div class="alert alert-danger">
                    {{ session()->get('error_msg') }}
                </div>
            @endif

            <h2 class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">All products</h2>

            <div class="row best-offers">

                @foreach ($products as $mainkey => $product)
                    <div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="best-offer-box skyblue-box">
                            <div class="offer-card-det" style="background-color:{{ $product->colour }}">
                                <div class="offer-card"><img src="{{ asset('public/' . $product->image) }}" alt="">
                                </div>
                                <div class="offer-card-name">
                                    <h6>{{ $product->name }}</h6>
                                    <p>{{ $product->category->name }}</p>
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
                                    <span>$ {{ $product->price }}</span>
                                    <!--<del>$24.90</del> -->
                                </div>
                            </div>
                            <div class="card-box-padd">
                                <div class="card-list-sec">
                                    <div class="card-list flex-cn-sb">
                                        <div class="card-pro">{{ __('Data') }} <div class="info-tooltip"><i
                                                    class="bi bi-question-circle"></i>
                                                <div class="show-info-tooltip">{{ $product->data_detail }}<i
                                                        class="pointer"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-pro-res">{{ $product->data }}</div>
                                    </div>


                                    <div class="card-list flex-cn-sb">
                                        <div class="card-pro">{{ __('Calls') }} <div class="info-tooltip"><i
                                                    class="bi bi-question-circle"></i>
                                                <div class="show-info-tooltip">{{ $product->calls_detail }}<i
                                                        class="pointer"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-pro-res">{{ $product->calls }}</div>
                                    </div>

                                    <div class="card-list flex-cn-sb">
                                        <div class="card-pro">{{ __('SMS') }}
                                            <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                                <div class="show-info-tooltip">{{ $product->sms_detail }}<i
                                                        class="pointer"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-pro-res">{{ $product->sms }}</div>
                                    </div>

                                    <div class="card-list flex-cn-sb">
                                        <div class="card-pro">Credit validity

                                            <div class="info-tooltip"><i class="bi bi-question-circle"></i>
                                                <div class="show-info-tooltip">{{ $product->credit_validity_detail }}<i
                                                        class="pointer"></i></div>
                                            </div>
                                        </div>
                                        <div class="card-pro-res">{{ $product->credit_validity }}</div>
                                    </div>



                                </div>
                                <div class="sim-show-detail" id="sim-show-detail{{ $mainkey }}">
                                    <div class="accordion" id="accordionExample">

                                        @foreach ($product->features as $key => $feature)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="acc-1">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#col-{{ $mainkey }}-{{ $key }}"
                                                        aria-expanded="false" aria-controls="col-1">
                                                        {{ $feature->title }}</button>
                                                </h2>
                                                <div id="col-{{ $mainkey }}-{{ $key }}"
                                                    class="accordion-collapse collapse" aria-labelledby="acc-1"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="sim-acc-det">
                                                            <ul>
                                                                <li>{{ $feature->description }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>


                                <div class="offer-list-btn flex-cn-sb">
                                    <a href="javascript:void(0);" class="btn btn-primary black-btn more-det-btn"
                                        onclick="$('#sim-show-detail{{ $mainkey }}').slideToggle(400);">More
                                        details</a>
                                    <a href="{{ route('user.cart.cart', ['id' => $product->id]) }}"
                                        class="btn btn-primary blue-btn">
                                        Buy now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
