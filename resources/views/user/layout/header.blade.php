<header class="hedcontainer">
    <div class="hedbluebg">
        <div class="container">
            <div class="topsocialcont d-flex align-items-center  justify-content-between flex-wrap py-2">
                <div class="top-social">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="currency-language d-flex align-items-center justify-content-center flex-wrap">
                    <ul class="flex-center top-currency">
                        <li><a href=""><img src="{{ asset('public/admin/assets/images/currency-usd.png') }}"
                                    alt=""></a></li>
                        <li><a href=""><img src="{{ asset('public/admin/assets/images/currency-euro.png') }}"
                                    alt=""></a></li>
                        <li><a href=""><img src="{{ asset('public/admin/assets/images/currency-aud.png') }}"
                                    alt=""></a></li>
                        <li><a href=""><img src="{{ asset('public/admin/assets/images/currency-nzd.png') }}"
                                    alt=""></a></li>
                    </ul>
                    <div class="languagesec">
                        <div class="tpusrinfo usertrgr">
                            English
                        </div>
                        <div class="userdropdown">
                            <ul>
                                <li><a href="">English</a></li>
                                <li><a href="">Français</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="head-sec navesticky sticky">
        <div class="container">
            <div class="headerdflex d-flex align-items-center justify-content-between py-2">
                <div class="hedlogo">
                    <a href="index.html"><img src="{{ asset('public/admin/assets/images/logo.png') }}"alt="">
                        </a>
                </div>
                <div class="hedright">
                    <div id="cssmenu">
                        <ul>
                            @auth
                                <li><a href="#">eSIM</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="{{ route('user.cart.index') }}">Cart</a></li>
                            @endauth

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <li>
                                @auth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                @else
                                    <a href="{{ route('user.login') }}">Login</a>
                                @endauth
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
