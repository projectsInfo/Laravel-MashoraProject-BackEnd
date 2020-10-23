@extends('layouts.indexlinks')
@section('content')
<!-- Start Slider Section -->
<div class="slider">
    <div class="owl-carousel owl-theme h-100">
        <div class="slider-img">
            <img src="assets/images/law3.jpg" class="img-fluid"/>
            <div class="slider__content d-flex direction-column justify-content-center align-items-center">
                <div class="slider__content__text text-center">
                    <p class="mb-0">حل مشكلتك القانونية</p>
                    <p class="mb-0">بمنتهى السهولة</p>
                    <p class="mb-0">lawyes.com</p>
                </div>
            </div>
        </div>
        <div class="slider-img">
            <img src="assets/images/law4.jpg" class="img-fluid"/>
            <div class="slider__content d-flex direction-column justify-content-center align-items-center">
                <div class="slider__content__text text-center">
                    <p class="mb-0">حل مشكلتك القانونية</p>
                    <p class="mb-0">بمنتهى السهولة</p>
                    <p class="mb-0">lawyes.com</p>
                </div>
            </div>
        </div>

        <div class="slider-img">
            <img src="assets/images/law2.jpg" class="img-fluid"/>
            <div class="slider__content d-flex direction-column justify-content-center align-items-center">
                <div class="slider__content__text text-center">
                    <p class="mb-0">حل مشكلتك القانونية</p>
                    <p class="mb-0">بمنتهى السهولة</p>
                    <p class="mb-0">lawyes.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our society -->
<section class="society bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="society__text pr-3">
                    <h2>مرحباً بك فى مجتمعنا</h2>
                    <p class="short-p">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا </p>
                    <p class="long-p">أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس

                        أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت

                        نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا

                        كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
                    <button>انضـم لنا</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="society__vedio mt-5 mt-md-0 mb-md-5">
                    <img src="assets/Images/social.jpg" class="img-fluid society__vedio__img">
                    <div class="society__vedio__my-vedio" id="myVedio">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IFncZA5k_1k?autoplay=0&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="society__vedio__playicon">
                                <span>
                                    <i class="fas fa-play"></i>
                                </span>
                    </div>
                    <div class="society__success_num shadow">
                        <p class="mb-0">150 +</p>
                        <p class="mb-0">حــالة</p>
                        <p class="mb-0">نـــاجحة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- low problem solution -->
<section class='solutions'>
    <div class="container">
        <p class="solutions__question mb-4 mx-auto text-center">إزاي تقدر تلاقي حل لمشكلاتك القانونية؟</p>
        <div class="solutions__contain">
            <div class="row justify-content-between no-gutters px-md-5">
                <div class="col-6 solutions__contain__suggest">
                    <div class="solutions__contain__suggest__box">
                        <i class="fas fa-users-cog"></i>
                        <p>سجل بياناتك، وكن جزء من العائلة</p>
                    </div>
                </div>
                <div class="col-6 solutions__contain__suggest">
                    <div class="solutions__contain__suggest__box">
                        <i class="fas fa-search"></i>
                        <p>دور على المحامي بالتخصص الذي تريده</p>
                    </div>
                </div>
                <div class="col-6 solutions__contain__suggest">
                    <div class="solutions__contain__suggest__box">
                        <i class="fas fa-user-tie"></i>
                        <p>قارن واختار حسب التقييمات المعروضة</p>
                    </div>
                </div>
                <div class="col-6 solutions__contain__suggest">
                    <div class="solutions__contain__suggest__box">
                        <i class="far fa-comment-dots"></i>
                        <p>أرسل إستشارتك ليتم الرد عليك بأفضل حل قانوني</p>
                    </div>
                </div>

            </div>
            <div class="solutions__contain__divide">
                <div class="solutions__contain__divide__column"></div>
            </div>
        </div>
    </div>
</section>

<!-- Start Fields Section -->
<section class="fields">
    <div class="container">
        <h3>المجالات المتاحة</h3>
        <div class="row">
            <div class="col-md-4">
                <ul class="fields__sub d-flex list-unstyled align-items-center my-4">
                    <li><i class="fa fa-university"></i>
                    </li>
                    <li>الضرائب والأعمال</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center my-4">
                    <li><i class="fas fa-users"></i>
                    </li>
                    <li>القضايا المدنية</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center my-4">
                    <li><i class="far fa-circle"></i>
                    </li>
                    <li>القضايا الجنسية</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center my-4">
                    <li><i class="fa fa-university"></i>
                    </li>
                    <li>الضرائب والأعمال</li>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="fields__sub d-flex list-unstyled align-items-center mx-md-auto my-4">
                    <li><i class="fas fa-male"></i>
                    </li>
                    <li>القضايا الجنائية</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center mx-md-auto my-4">
                    <li><i class="fas fa-user-injured"></i>
                    </li>
                    <li>قضايا الجنح</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center mx-md-auto my-4">
                    <li><i class="fas fa-child"></i>
                    </li>
                    <li>عمالة الأطفال</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center mx-md-auto my-4">
                    <li><i class="fas fa-male"></i>
                    </li>
                    <li>القضايا الجنائية</li>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="fields__sub d-flex list-unstyled align-items-center ml-auto my-4">
                    <li><i class="fas fa-gavel"></i>
                    </li>
                    <li>التعاملات البنكية</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center ml-md-auto my-4">
                    <li><i class="fas fa-home"></i>
                    </li>
                    <li>قوانين الملكية</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center ml-md-auto my-4">
                    <li><i class="fa fa-university"></i>
                    </li>
                    <li>قضايا الشركات</li>
                </ul>
                <ul class="fields__sub d-flex list-unstyled align-items-center ml-md-auto my-4">
                    <li><i class="fas fa-gavel"></i>
                    </li>
                    <li>التعاملات البنكية</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Start Secion Contact Us -->
<section class="about-us">
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
                            <img src="assets/images/googleplay.png" class="img-fluid"/>
                            <img src="assets/images/appstore.png" class="img-fluid"/>
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
@endsection()
