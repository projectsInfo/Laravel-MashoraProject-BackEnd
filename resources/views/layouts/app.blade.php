<!DOCTYPE html>
<html lang="en" dir="rtl">
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>lawyer Template</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstraprtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main-rtl.css')}}">
</head>
<body>
<div id="app">
    <div class="join-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="join-us-tabs nav align-items-center">
                        <li><a href="#">English</a></li>
                        @guest
                            <li><a href="{{route('login')}}">دخول</a></li>
                            <li class="join-btn p-1 rounded dropdown">
                                <a class="join-dropdown" href="#">إنضم لنا</a>
                                <div class="join-menu shadow">
{{--                                                                @if (Route::has('userRegister') or Route::has('lawyerRegister') or Route::has('lawyerOffice'))--}}
                                    <a href="{{route('userRegister')}}">مستخدم</a>
{{--                                    <a href="{{ route('edit', ['id' => Auth::id()]) }}">--}}
{{--                                        مستخدم--}}
{{--                                    </a>--}}
                                    <a href="{{route('lawyerRegister')}}">محامي</a>
                                    <a href="{{route('lawyerOffice')}}">مكتب محاماه</a>
                                {{--                                 @endif--}}
                                <!---start-------->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #c69500" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" style="color: #c69500" href="{{ route('edit', ['id' => Auth::id()]) }}">
                                        بياناتي
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            {{--                                                    </div>--}}
                        @endguest
                        {{--                                                        </li>--}}
                    </ul>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <ul class="join-us-store nav align-items-center">
                        <li>App Store <i class="fab fa-app-store"></i></li>
                        <li>Play store <i class="fab fa-google-play"></i></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

{{--    <!-- Start Header -->--}}
{{--    <header class="fixed-header">--}}
{{--        <div class="header">--}}
{{--            <div class="container">--}}
{{--                <div class="header__hold py-2">--}}
{{--                    <div class="header__hold__nav-close d-md-none">--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                    </div>--}}
{{--                    <ul class="header__hold__nav align-items-center d-md-block mb-0">--}}
{{--                        <li class="header__hold__nav__search">--}}
{{--                            <i class="fas fa-search header__hold__nav__search__icon" onclick="openSearch()"></i>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">استشارتك</a></li>--}}
{{--                        <li><a href="#">الأقسام</a></li>--}}
{{--                        <li><a href="#">من نحن</a></li>--}}
{{--                    </ul>--}}
{{--                    <div class="header__hold__logo">--}}
{{--                        <a class="header__hold__logo__img" href="#">Lawyer<i class="fas fa-balance-scale-left pl-2"></i></a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <!-- search overlay code -->--}}
{{--                <div class="header__search-overlay" id='mySearchOverlay'>--}}
{{--                    <div class="header__search__overlay__close" onclick="closeSearch()"></div>--}}
{{--                    <div class="header__search__overlay__content">--}}
{{--                        <form>--}}
{{--                            <input type="text" class="header__search__overlay__content__input"--}}
{{--                                   placeholder="ابحث هنا . . . .">--}}
{{--                            <button class="header__overlay__content__input-search"><i class="fas fa-search"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- End search overlay code -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--    --}}{{--</div>--}}

    <main class="py-4">
        @yield('content')
    </main>
</div>
{{--    </div>--}}
@if(auth()->check())
    <script>
        var authuser = @JSON(auth()->user())
    </script>
@endif

<!-- js file-->
{{--<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>--}}
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/file.js')}}"></script>
<!--Wow File-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

</body>
</html>








