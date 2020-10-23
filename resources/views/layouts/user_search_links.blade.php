<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>user search page</title>
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstraprtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main-rtl.css')}}">
</head>
<body id="body">
{{--<div id="content">--}}
<div id="cool">
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
                                    {{--                            @if (Route::has('userRegister') or Route::has('lawyerRegister') or Route::has('lawyerOffice'))--}}
                                    <a href="{{route('userRegister')}}">مستخدم</a>
                                    {{--                            <a href="{{ route('edit', ['id' => Auth::id()]) }}">--}}
                                    {{--                                مستخدم--}}
                                    {{--                            </a>--}}
                                    <a href="{{route('lawyerRegister')}}">محامي</a>
                                    <a href="{{route('lawyerOffice')}}">مكتب محاماه</a>
                                {{--                            @endif--}}
                                <!---start-------->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #c69500" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" style="color: #c69500" href="{{ route('edit',  ['id' => Auth::id()]) }}">
                                        بياناتي
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            {{--                        </div>--}}
                        @endguest
                        {{--                            </li>--}}
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
</div>

{{--<!-- Start Header -->--}}
{{--<div>--}}

{{--</div>--}}
{{--<header class="fixed-header">--}}
{{--    <div class="header">--}}
{{--        <div class="container">--}}
{{--            <div class="header__hold py-2">--}}
{{--                <div class="header__hold__nav-close d-md-none">--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                </div>--}}
{{--                <ul class="header__hold__nav align-items-center d-md-block mb-0">--}}
{{--                    <li class="header__hold__nav__search">--}}
{{--                        <i class="fas fa-search header__hold__nav__search__icon" onclick="openSearch()"></i>--}}
{{--                    </li>--}}
{{--                    <li><a href="#">استشارتك</a></li>--}}
{{--                    <li><a href="#">الأقسام</a></li>--}}
{{--                    <li><a href="#">من نحن</a></li>--}}
{{--                </ul>--}}
{{--                <div class="header__hold__logo">--}}
{{--                    <a class="header__hold__logo__img" href="#">Lawyer<i class="fas fa-balance-scale-left pl-2"></i></a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- search overlay code -->--}}
{{--            <div class="header__search-overlay" id='mySearchOverlay'>--}}
{{--                <div class="header__search__overlay__close" onclick="closeSearch()"></div>--}}
{{--                <div class="header__search__overlay__content">--}}
{{--                    <form>--}}
{{--                        <input type="text" class="header__search__overlay__content__input"--}}
{{--                               placeholder="ابحث هنا . . . .">--}}
{{--                        <button class="header__overlay__content__input-search"><i class="fas fa-search"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- End search overlay code -->--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

@yield('user_search')

<!-- js file-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/modules/user-search-page/user-search.js')}}"></script>
<!--Wow File-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

<script>
    $("body").ready(function () {
        $("#card-contain").empty();
        var gender2 = document.getElementById("gender2").value;


        function checkClick(typeValue, dataTypeInfo, apiUrl, dataValue) {
            alert('d');
            $.ajax({
                type: typeValue,
                dataType: dataTypeInfo,
                url: apiUrl,
                data: dataValue,
                success: function (data) {
                    console.log(data);

                    for (var i = 0; i < data.length; i++) {
                        var cardContent = `
                            <div class="col-md-6 col-lg-4">
                                <div class="card mt-4">
                                    <img src="assets/images/${data[i].user_image}" class="card-img-top" alt="...">
                                    <div class="our-lawyers__card__body card-body">
                                        <h5 class="our-lawyers__card__body__title card-title">${data[i].name}</h5>
                                        <p class="our-lawyers__card__body__text card-text">${data[i].work_sector}</p>
                                        <div class="our-lawyers__card__body__grade">
                                            <i class="far fa-star our-lawyers__card__body__grade__empty"></i>
                                            <i class="fas fa-star our-lawyers__card__body__grade__full"></i>
                                            <i class="fas fa-star our-lawyers__card__body__grade__full"></i>
                                            <i class="fas fa-star our-lawyers__card__body__grade__full"></i>
                                            <i class="fas fa-star our-lawyers__card__body__grade__full"></i>
                                        </div>
                                        <div class="d-flex our-lawyers__card__body__reserve-details justify-content-between">
                                            <p><i class="fas fa-money-bill-wave price mr-2"></i>سعر الاستشارة</p>
                                            <p><i class="fas fa-history time mr-2"></i>مدة الانتظار</p>
                                        </div>
                                        <div class="our-lawyers__card__body__social d-flex justify-content-center">
                                            <i class="fab fa-instagram"></i>
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="our-lawyers__card__overlay">
                                        <div class="d-flex justify-content-center">
                                            <a class="our-lawyers__card__overlay__info" href="#">مزيدمن المعلومات</a>
                                            <a class="our-lawyers__card__overlay__reverse" href="#">إستشارة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                        $("#card-contain").append(cardContent);

                    }
                }
            })

        }

        checkClick('get', 'json', '{{'/user_search'}}', {gender2: gender2});

        $('#gender1').click(function () {
            $("#card-contain").empty();
            checkClick('get', 'json', '{{'/user_search'}}', {gender2: gender2});
        });
        $('#gender2').click(function () {
            $("#card-contain").empty();
            checkClick('get', 'json', '{{'/user_search'}}', {gender2: gender2});
        });

    });

</script>
{{--</div><!--end-content-->--}}
</body>
</html>
