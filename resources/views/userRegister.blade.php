@extends('layouts.resevationlinks')
@section('reservation')
<!-- start user page -->
<section class="user-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="user-page__hold borde text-center">
                    <h3>سجل الأن</h3>
                    <div class="user-page__hold__content p-5">
                        <!-- login with social media -->
                        <ul class="user-page__hold__content__social list-unstyled d-lg-flex justify-content-between align-items-center">
                            <li class="user-page__hold__content__social__f col-12 col-lg-5"><a href="/login/facebook">عن طريق الفيسبوك<span class="pl-2"><i class="fab fa-facebook-f"></i></span></a></li>
                            <li class="user-page__hold__content__social__g col-12 col-lg-5 mt-3 mt-lg-0"><a href="/login/google">عن طريق الجيميل<img src="assets/Images/gmail2.png" class="img-fluid"></a></li>
                        </ul>
                        <div class="row user-page__hold__content__social__or align-items-center mx-0 mb-3">
                            <div class="col-5 user-page__hold__content__social__or__line"></div>
                            <div class="col-2">أو</div>
                            <div class="col-5 user-page__hold__content__social__or__line"></div>
                        </div>
                        <!--fixed profile picture its style exits in fixed file scss -->
                        <!-- form -->
                        <form class="user-page__hold__content__form text-left" id="uservalidation" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="fixed__profile-picture">
                                <img src="assets/Images/profile.png" class="user-profile-picture img-fluid">
                                <div class="fixed__profile-picture__overlay">
                                    <i class="fas fa-edit"></i>
                                    <input class="fixed__profile-picture__overlay__input" type="file" name="user_image" onchange="readURL(this);">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="fullName" class="col-sm-3">الاســــم</label>
                                <div class="col-sm-9  user-page__hold__content__form__input">
                                    <input type="text" name="name" class="form-control" id="fullName" placeholder="الاســـــم بالكامــل">
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="email" class="col-sm-3">البريد الالكتروني</label>
                                <div class="col-sm-9 user-page__hold__content__form__input">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@domian.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label for="userbirthDay" class="col-sm-3">تاريخ الميلاد</label>
                                <div class="col-sm-9  user-page__hold__content__form__input">
                                    <input type="text" name="birth_date" class="form-control" id="userbirthDay" placeholder="dd/mm/yy">
                                </div>
                            </div>
                            <fieldset class="form-group user-page__hold__content__form__radio">
                                <div class="row align-items-center">
                                    <legend class="col-form-label col-sm-3 pt-0">النـــوع</legend>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline mr-4">
                                            <input class="form-check-input mr-2" type="radio" name="user_gender" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                ذكــر
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline" >
                                            <input class="form-check-input mr-2" type="radio" name="user_gender" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                أنثـــي
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row align-items-center">
                                <label for="userPass" class="col-sm-3">كلمة المرور</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" id="userPass">
                                    <p class="fixed__terms">بقيامك بكتابة كلمة المرور فأنت توافق علي <a href="#">الشروط والقوانين</a></p>
                                </div>
                            </div>

                            <!-- Start-display-non-->
                            <input type="password" name="user_card_id" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="user_mobile" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="user_phone" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="country" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="user_card_id" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="governorate" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="work_sector" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="graduate_year" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="experience_years" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="information" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <input type="password" name="user_card_image" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <div class="fixed__profile-picture d-none">
                                <img src="assets/Images/profile.png" class="user-profile-picture img-fluid">
                                <div class="fixed__profile-picture__overlay">
                                    <i class="fas fa-edit"></i>
                                    <input class="fixed__profile-picture__overlay__input" type="file"
                                           value="profile.png" name="user_card_image" onchange="readURL(this);">
                                </div>
                            </div>
                            <input type="password" name="user_type" value = 2 class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                            <!--End-display-non-->

                            <!-- Register button -->
                            <button type="submit" id="form-btn" class="fixed__btn__disabled fixed__btn mb-4">سجل الأن</button>

                        </form>
                        <hr class="fixed__hr">
                        <p class="fixed__terms text-muted mt-3">مسجل بالفعل فى مشورة ؟ <a href="#">دخول</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
