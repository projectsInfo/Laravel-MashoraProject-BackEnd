@extends('layouts.user_search_links')
@section('user_search')
    <!-- Hero Image  -->
    <div class="user-search">
        <div class="hero-img">
            <div class="container">
                <form method="POST" action="{{route('lawyerSearch')}}">
                    {{csrf_field()}}
                    <div class="user-search__control d-flex">
                        <div class="user-search__control__select select-input d-flex">
                            <select name="name">
                                <option value="name" selected>بحث عن طريق</option>
                                <option value="name">أ- الإسم</option>
                                <option value="work_sector">ب- التخصص</option>
                                <option value="country">ج- الدرجة العلمية</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="user-search__control__text">
                            <input type="text" class="user-search__control__text__input" name="lawyer"
                                   placeholder="........"/>
                            <span class="user-search__control__text__search-icon"><input type="submit"><i
                                    class="fas fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="our-lawyers">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="user-search__check">
                            <form action="{{url('/user_search-filter')}}" method="post">
                                @csrf
                                <h3><i class="fas fa-gavel mr-3"></i>حدد التخصص</h3>
                                <div class="user-search__check__side">
                                    <div class="show-side-control">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                    <div class="user-search__check__side__hold">

                                        <div class="user-search__check__side__hold__head">
                                            <h5><i class="fas fa-graduation-cap"></i> اللقب</h5>
                                            <i class="fas fa-chevron-down user-search__check__side__hold__head__icon-down"></i>
                                        </div>

                                        <div class="user-search__check__side__hold__box">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="prof">
                                                <label class="form-check-label" for="ptof">
                                                    أستاذ
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       id="consultant">
                                                <label class="form-check-label" for="consultant">
                                                    مستشار
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3" id="veto">
                                                <label class="form-check-label" for="veto">
                                                    بالنقض
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4" id="rule">
                                                <label class="form-check-label" for="rule">
                                                    الدستورية العليا
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-search__check__side__hold">

                                        <div class="user-search__check__side__hold__head">
                                            <h5><i class="fas fa-american-sign-language-interpreting"></i>التخصص</h5>
                                            <i class="fas fa-chevron-down user-search__check__side__hold__head__icon-down"></i>
                                        </div>
                                        <div class="user-search__check__side__hold__box">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check1">
                                                <label class="form-check-label" for="box2check1">
                                                    جنح
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check2">
                                                <label class="form-check-label" for="box2check2">
                                                    جنائية
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check3">
                                                <label class="form-check-label" for="box2check3">
                                                    مالية
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check4">
                                                <label class="form-check-label" for="box2check4">
                                                    مدنية
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check5">
                                                <label class="form-check-label" for="box2check5">
                                                    مواريث
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check6">
                                                <label class="form-check-label" for="box2check6">
                                                    شركات
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="box2check7">
                                                <label class="form-check-label" for="box2check7">
                                                    ضرائب
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-search__check__side__hold">
                                        <div class="user-search__check__side__hold__head">
                                            <h5><i class="fas fa-venus-mars"></i>النوع</h5>
                                            <i class="fas fa-chevron-down user-search__check__side__hold__head__icon-down"></i>
                                        </div>
                                        <div class="user-search__check__side__hold__box">
                                            <div class="form-check">
                                                <input id="gender1" class="form-check-input" type="checkbox"
                                                       value="option1">
                                                <label class="form-check-label" for="gender1">
                                                    محامية
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input id="gender2" class="form-check-input" type="checkbox"
                                                       value="option2">
                                                {{--                                                <button id="test">test</button>--}}
                                                <label class="form-check-label" for="gender2">
                                                    محامي
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                            <nav aria-label="our-lawyers__breadcrumb breadcrumb col-md-6">
                                <ol class="breadcrumb bg-white mb-0">
                                    <li class="breadcrumb-item"><a class="our-lawyers__breadcrumb__link"
                                                                   href="#">مستشار</a>
                                    </li>
                                    <li class="breadcrumb-item"><a class="our-lawyers__breadcrumb__link"
                                                                   href="#">مدنية</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">محامي</li>
                                </ol>
                            </nav>
                            <div
                                class="form-group row select-input col-md-6 p-0 align-items-center m-0 justify-content-md-end">
                                <label class="col-3">ترتيب</label>
                                <select class="form-control col-9 col-md-8">
                                    <option value="" selected>أعلي التقييمات</option>
                                    <option value="1">الاختيارالاول</option>
                                    <option value="2">الاختيارالثاني</option>
                                    <option value="3">الاختيار الثالث</option>
                                    <option value="4">الاختيار الرابع</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        {{--                        @include('layouts.filter')--}}

                        <div class="row our-lawyers__card" id="card-contain">


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
                        <li>كيفية الاستشارة</li>
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
    {{--<p>{{$vacancies->all}}</p>--}}
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
