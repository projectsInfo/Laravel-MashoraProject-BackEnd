<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>lawyer profile</title>
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
<div class="join-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="join-us-tabs nav align-items-center">
                    <li><a href="#">English</a></li>
                    <li><a href="#">دخول</a></li>
                    <li class="join-btn p-1 rounded dropdown">
                        <a class="join-dropdown" href="#">Youssif Raafat</a>
                        <div class="join-menu shadow">
                            <a href="#">مستخدم</a>
                            <a href="#">محامي</a>
                            <a href="#">مكتب محاماه</a>
                        </div>
                    </li>
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
<!-- Start Header -->
<header class="fixed-header">
    <div class="header">
        <div class="container">
            <div class="header__hold py-2">
                <div class="header__hold__nav-close d-md-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="header__hold__nav align-items-center d-md-block mb-0">
                    <li class="header__hold__nav__search" >
                        <i class="fas fa-search header__hold__nav__search__icon" onclick="openSearch()"></i>
                    </li>
                    <li><a href="#">استشارتك</a></li>
                    <li><a href="#">الأقسام</a></li>
                    <li><a href="#">من نحن</a></li>
                </ul>
                <div class="header__hold__logo">
                    <a class="header__hold__logo__img" href="#">Lawyer<i class="fas fa-balance-scale-left pl-2"></i></a>
                </div>

            </div>
            <!-- search overlay code -->
            <div class="header__search-overlay" id='mySearchOverlay'>
                <div class="header__search__overlay__close" onclick="closeSearch()"></div>
                <div class="header__search__overlay__content">
                    <form>
                        <input type="text" class="header__search__overlay__content__input" placeholder="ابحث هنا . . . ." >
                        <button class="header__overlay__content__input-search"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!-- End search overlay code -->

        </div>
    </div>
</header>
<!-- content -->
<div class="lawyer-profile">
    <div class="hero-img">
    </div>
    <div class="lawyer-profile__content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="lawyer-profile__content__personal-info">
                        <div class="lawyer-profile__content__personal-info__img">
{{--                            <img src="{{asset("images/$information->user_image")}}" class="img-fluid" alt="{{$information->user_image}}"/>--}}
                            <img src="{{asset("public/images/$information->user_image")}}" class="img-fluid" alt="{{$information->user_image}}"/>
{{--                            <img src="{{ URL::to('/') }}/images/{{ $information->user_image }}" alt="No Photo" />--}}
{{--                            <p>{{ $information->information }}</p>--}}
                        </div>
                        <div class="lawyer-profile__content__personal-info__box">
                            <h3>{{$information->name}}</h3>
                            <div class="lawyer__grade">
                                <?php $reviews = \App\Review::where('user_id', $information->id)->get(); ?>
                                @foreach($reviews as $review)
                                        @foreach($reviews as $review)
                                            @if($review->reviews == 1)
                                                @for($x = 0 ; $x <= 1 ; $x++)
                                                    <i  class="far fa-star our-lawyers__card__body__grade__full"></i>
                                                @endfor
                                            @elseif($review->reviews == 2)
                                                @for( $x = 1 ; $x <= 2 ; $x++)
                                                    <i class="far fa-star our-lawyers__card__body__grade__full"></i>
                                                @endfor
                                            @elseif($review->reviews == 3)
                                                @for( $x = 1 ; $x <= 3 ; $x++)
                                                    <i class="far fa-star our-lawyers__card__body__grade__full"></i>
                                                @endfor
                                            @elseif($review->reviews == 4)
                                                @for( $x = 1 ; $x <= 4 ; $x++)
                                                    <i class="far fa-star our-lawyers__card__body__grade__full"></i>
                                                @endfor
                                            @elseif($review->reviews == 5)
                                                @for( $x = 1 ; $x <= 5 ; $x++)
                                                    <i class="far fa-star our-lawyers__card__body__grade__full"></i>
                                                @endfor
                                            @endif
                                        @endforeach
                                @endforeach
                            </div>
                            <p><i class="fas fa-star fa-fw lawyer__grade__full"></i>{{$information->experience_years}} سنوات من الخبرة</p>
                            <p><i class="far fa-envelope-open fa-fw"></i>{{$information->email}}</p>
                            <p><i class="fas fa-map-marker-alt fa-fw"></i>طريق النصر,القاهرة</p>
                            <button>إستشارة</button>
                        </div>
                        <hr>
                        <div class="lawyer-profile__content__personal-info__box py-2">
                            <ul class="list-unstyled lawyer-profile__content__personal-info__box__list">
                                <li><span>الجامعة :</span>عين شمس</li>
                                <li><span>الدرجة العلمية :</span>دكتوراة فى العلومالجنائية</li>
                                <li><span>التخصص :</span>
                                    <ul class="list-unstyled list-unstyled lawyer-profile__content__personal-info__box__list__sub-list">
                                        <li><i class="fas fa-circle"></i>مدني</li>
                                        <li><i class="fas fa-circle"></i>جنائي</li>
                                    </ul>
                                </li>
                                <li><span>تكلفة الأستشارة :</span>300 EGP</li>
                                <li><span>مدة الإنتظار :</span>20 min</li>
                                <li><span>عدد الإستشارات :</span>8</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="lawyer-profile__content__public-info h-100">
                        <h4>عن المحامي</h4>
                        <hr>
                        <div class="lawyer-profile__content__public-info__box border-bottom">
                            <h6>- الإنجازات الشخصية -</h6>
                            <p><i class="fas fa-check"></i>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                            <p><i class="fas fa-check"></i>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                            <p><i class="fas fa-check"></i>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                            <p><i class="fas fa-check"></i>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                        </div>
                        <div class="lawyer-profile__content__public-info__box">
                            <h6>- آراء العملاء -</h6>
                            <div class="lawyer-profile__content__public-info__box__client">
                                <h5>Youssif Raafat</h5>
                                <p>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                                <div class="lawyer__grade">
                                    <i class="far fa-star lawyer__grade__empty"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                </div>
                                <span>5 Dec 2019</span>
                            </div>
                            <div class="lawyer-profile__content__public-info__box__client">
                                <h5>Youssif Raafat</h5>
                                <p>ابجد هوز هو لغة تصحيح و وسم لتركيب الأنماط الغير متوافقة</p>
                                <div class="lawyer__grade">
                                    <i class="far fa-star lawyer__grade__empty"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                    <i class="fas fa-star lawyer__grade__full"></i>
                                </div>
                                <span>5 Dec 2019</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Start Secion Contact Us -->
<section class="about-us bg-light">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 col-md-2 col-lg-2">
                <h5 class="about-us__header">Lawyer<span>.com</span></h5>
                <ul class="about-us__info list-unstyled">
                    <li>من نحن</li>
                    <li>كيفية الاستشارة </li>
                    <li>فريق عمل</li>
                </ul>
            </div>
            <div class="col-4 col-md-3 col-lg-2">
                <h5 class="about-us__header">ابحث عن طريق</h5>
                <ul class="about-us__info list-unstyled">
                    <li>التخصص</li>
                    <li>اللقب</li>
                </ul>
            </div>
            <div class="col-4 col-md-3 col-lg-2">
                <h5 class="about-us__header">هل انت محامي ؟</h5>
                <ul class="about-us__info list-unstyled">
                    <li>انضم إلى فريفنا</li>
                </ul>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
                <div class="row justify-content-between">
                    <div class="col-8">
                        <h5>تحتاج إلى مساعدة ؟</h5>
                        <ul class="about-us__help list-unstyled">
                            <li>شروط الاستخدام</li>
                            <li>الخصوصية للأعضاء</li>
                            <li>الخصوصية للمحامين</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="about-us__app">
                            <img src="{{asset('assets/images/googleplay.png')}}" class="img-fluid"/>
                            <img src="{{asset('assets/images/appstore.png')}}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row text-center align-items-center py-2">
            <div class="col-md-6">
                <p class="text-md-left mb-0">جميع الحقوق محفوظة &copy; فريق لوير</p>
            </div>
            <div class="col-md-6">
                <div class="footer__socialmedia">
                    <ul class="d-flex list-unstyled text-md-right mb-0">
                        <li class="ml-4"><i class="fab fa-google-plus-g"></i></li>
                        <li class="ml-4"><i class="fab fa-twitter"></i></li>
                        <li class="ml-4"><i class="fab fa-facebook-f"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js file-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/file.js')}}"></script>
<script src="{{asset('assets/js/modules/user-search-page/user-search.js')}}"></script>
<!--Wow File-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

</body>
</html>
