@extends('layouts.resevationlinks')
@section('reservation')
<!-- start lawyer page -->
<section class="user-page">
    <div class="container">
        <div class="user-page__hold border m-auto pb-5">
            <h3 class="pt-1">سجل الأن</h3>
            <form class="pt-5" method="POST" action="{{ route('register') }}" id="lawyerValidate" enctype="multipart/form-data">
                @csrf
                <div class="form-row m-0">
                    <div class="col-lg-2">
                        <!-- profile picture -->
                        <div class="fixed__profile-picture">
                            <img src="assets/Images/profile.png" class="lawyer-profile-picture img-fluid">
                            <div class="fixed__profile-picture__overlay">
                                <i class="fas fa-edit"></i>
                                <input class="fixed__profile-picture__overlay__input" type="file" name="user_image"
                                       onchange="profilePreview(this);">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 row m-auto">
                        <div class="form-group col-md-6 row no-gutters">
                            <label for="lawyerName" class="col-md-4">الإسم</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lawyerName" name="name"
                                       placeholder="الأسم بالكامل">
                            </div>
                        </div>
                        <div class="form-group col-md-6 row no-gutters">
                            <label for="lawyer-birthday" class="col-md-4">تاريخ الميلاد</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lawyer-birthday" name="birth_date"
                                       placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group col-md-6 row no-gutters">
                            <label for="idcard" class="col-md-4">رقم البطاقة</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="idcard" name="user_card_id"
                                       placeholder="** **** ** * ****">
                            </div>
                        </div>
                        <div class="form-group col-md-6 row no-gutters">
                            <label for="lawyer-email" class="col-md-4">البريد الإلكتروني</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" id="lawyer-email" name="email" placeholder="example@domian.com">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <fieldset class="form-group user-page__hold__content__form__radio col-md-6">
                            <div class="row align-items-center">
                                <legend class="col-form-label col-sm-4">النـــوع</legend>
                                <div class="col-sm-8 text-left">
                                    <div class="form-check form-check-inline mr-4">
                                        <input class="form-check-input mr-2" type="radio" name="user_gender" id="male"
                                               value="option1" checked>
                                        <label class="form-check-label" for="male">
                                            ذكــر
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input mr-2" type="radio" name="user_gender" id="female"
                                               value="option2">
                                        <label class="form-check-label" for="female">
                                            أنثـــي
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row no-gutters col-md-6">
                            <label for="lawyerPassword" class="col-md-4">كلمة المرور</label>
                            <div class="col-sm-8  user-page__hold__content__form__input">
                                <input type="password" class="form-control" id="lawyerPassword" name="password">
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-md-6">
                            <label for="landPhone" class="col-md-4">رقم التليفون</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="landPhone" name="user_phone"
                                       placeholder="02 ***********">
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-md-6">
                            <label for="lawyerMobile" class="col-md-4">رقم الموبايل</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lawyerMobile" name="user_mobile"
                                       placeholder="02 ***********">
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="lawyerCountry" class="col-md-4">البلد</label>
                            <div class="col-md-8 select-input">
                                <select class="form-control" id="lawyerCountry" name="country">
                                    <option value="">اختار</option>
                                    <option value="مصر">مصر</option>
                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                </select>
                                <i class="fas fa-chevron-down select-input__arrow"></i>
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="lawyerCity" class="col-md-4">المحافظة</label>
                            <div class="col-md-8 select-input">
                                <select class="form-control" id="lawyerCity" name="governorate">
                                    <option value="">اختار</option>
                                    <option value="القاهرة">القاهرة</option>
                                    <option value="الجيزة">الجيزة</option>
                                </select>
                                <i class="fas fa-chevron-down select-input__arrow"></i>
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="lawyerState" class="col-md-4">قطاع العمل</label>
                            <div class="col-md-8 select-input">
                                <input type="text" class="form-control" id="lawyerState" name="work_sector">
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="gradeyear" class="col-md-4">سنة التخرج</label>
                            <div class="col-md-8 select-input">
                                <select class="form-control" id="gardeyear" name="graduate_year">
                                    <option value="" selected>choose</option>
                                    <option value="1">option 1</option>
                                    <option value="2">option 1</option>
                                </select>
                                <i class="fas fa-chevron-down select-input__arrow"></i>
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="lawyerState1" class="col-md-4">قطاع العمل</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lawyerState1" name="work_sector">
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-12 col-sm-6 col-md-4">
                            <label for="experience" class="col-6 col-md-4">سنين الخبرة</label>
                            <div class="col-md-8 select-input">
                                <select class="form-control" id="experience" name="experience_years">
                                    <option value="" selected>choose</option>
                                    <option value="1">option 1</option>
                                    <option value="2">option 1</option>
                                </select>
                                <!-- <input type="number" class="form-control" id="experience" name="experience"/> -->
                                <i class="fas fa-chevron-down select-input__arrow"></i>
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-lg-6">
                            <label for="info" class="col-md-4">معلومات عنك</label>
                            <div class="col-md-8">
                                <textarea class="form-control h-100" id="info" name="information"></textarea>
                            </div>
                        </div>
                        <div class="form-group row no-gutters col-lg-6">
                            <label for="lawyerCard" class="col-md-4">صورة الكارنيه</label>
                            <div class="fixed__profile-picture lawyer__register__card border-0 col-md-8">
                                <img src="assets/Images/contact.png" class="lawyer__register__card__img img-fluid">
                                <div class="fixed__profile-picture__overlay">
                                    <i class="fas fa-edit"></i>
                                    <input class="fixed__profile-picture__overlay__input" type="file"
                                           name="user_card_image" id="lawyerCard" onchange="cardPreview(this);">
                                </div>
                            </div>
                        </div>
                        <input type="password" name="user_type" value = 1 class="form-control d-none" id="userPass">
                    </div>
                    <div class="col">
                        <p class="fixed__terms mt-5">بقيامك بكتابة كلمة المرور فأنت توافق علي <a href="#">الشروط
                                والقوانين</a></p>
                        <button type="submit" id="lowyer-form-btn" class="submit-btn fixed__btn my-4 fixed__btn__disabled">سجل الأن</button>
                    </div>
                </div>
            </form>
            <hr class="fixed__hr">
            <p class="fixed__terms text-muted mt-3">مسجل بالفعل فى مشورة ؟ <a href="#">دخول</a></p>
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
