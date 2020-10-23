@extends('layouts.resevationlinks')
@section('reservation')
<!-- start user page -->
<section class="lawyer-data">
    <div class="container">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="fixed-frame">
                    <div class="fixed-frame__up text-center">
                        <h3>مواعيد الحجوزات</h3>
                        <nav>
                            <div class="nav nav-tabs lawyer-data__tabs border-top-0 flex-nowrap flex-md-wrap justify-content-md-center" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active lawyer-data__tabs__link" id="lawyer-tab-reserve" data-toggle="tab" href="#lawyer-reservation" role="tab" aria-controls="lawyer-reservation" aria-selected="true">مواعيد الحجوزات</a>
                                <a class="nav-item nav-link lawyer-data__tabs__link" id="lawyer-tab-credit" data-toggle="tab" href="#lawyer-credit" role="tab" aria-controls="lawyer-credit" aria-selected="false">الرصيد</a>
                                <a class="nav-item nav-link lawyer-data__tabs__link" id="lawyer-tab-consulting" data-toggle="tab" href="#prev-consulting" role="tab" aria-controls="prev-consulting" aria-selected="false">الاستشارات السابقة</a>
                                <a class="nav-item nav-link lawyer-data__tabs__link" id="lawyer-tab-data" data-toggle="tab" href="#personal-data" role="tab" aria-controls="personal-data" aria-selected="false">البيانات الشخصية</a>
                                <a class="nav-item nav-link lawyer-data__tabs__link" id="lawyer-tab-service" data-toggle="tab" href="#lawyer-service" role="tab" aria-controls="lawyer-service" aria-selected="false">الدعم الفني</a>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content fixed-frame__down" id="nav-tabContent">
                        <div class="tab-pane fade show active fixed-frame__down__reservation px-lg-4 border-bottom-0" id="lawyer-reservation" role="tabpanel" aria-labelledby="lawyer-tab-reserve">
                            <div class="row align-items-center justify-content-center px-md-3">
                                <div class="col-lg-8 mb-4">
                                    <div class="d-flex align-items-center fixed-frame__down__reservation__box">
                                        <div class="fixed-frame__down__reservation__box__img col-4 col-md-3">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="fixed-frame__down__reservation__box__card col-8 list-unstyled mb-0">
                                            <li>وقت الحجز: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>مدة الانتظار: <span class="ml-2">30 دقيقة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center mb-5 mb-md-3">
                                    <a class="fixed-frame__down__reservation__box__ans-btn" href="#">رد</a>
                                    <a class="fixed-frame__down__reservation__box__prev-btn" href="#">إستشارات سابقة</a>

                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center px-md-3">
                                <div class="col-lg-8 mb-4">
                                    <div class="d-flex align-items-center fixed-frame__down__reservation__box">
                                        <div class="fixed-frame__down__reservation__box__img col-4 col-md-3">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="fixed-frame__down__reservation__box__card col-8 list-unstyled mb-0">
                                            <li>وقت الحجز: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>مدة الانتظار: <span class="ml-2">30 دقيقة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center mb-5 mb-md-3">
                                    <a class="fixed-frame__down__reservation__box__ans-btn" href="#">رد</a>
                                    <a class="fixed-frame__down__reservation__box__prev-btn" href="#">إستشارات سابقة</a>

                                </div>
                            </div>
                            <div class="row align-items-center justify-content-center px-md-3">
                                <div class="col-lg-8 mb-4">
                                    <div class="d-flex align-items-center fixed-frame__down__reservation__box">
                                        <div class="fixed-frame__down__reservation__box__img col-4 col-md-3">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="fixed-frame__down__reservation__box__card col-8 list-unstyled mb-0">
                                            <li>وقت الحجز: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>مدة الانتظار: <span class="ml-2">30 دقيقة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center mb-5 mb-md-3">
                                    <a class="fixed-frame__down__reservation__box__ans-btn" href="#">رد</a>
                                    <a class="fixed-frame__down__reservation__box__prev-btn" href="#">إستشارات سابقة</a>
                                </div>
                            </div>
                        </div>

                        <!-- Credit tab -->
                        <div class="tab-pane fade fixed-frame__down__credit text-center" id="lawyer-credit" role="tabpanel" aria-labelledby="lawyer-tab-credit">
                            <div class="fixed-frame__down__credit__info bg-white">
                                <ul class="row px-4 py-3 list-unstyled mb-0 text-center">
                                    <li class="col-md-5">الإستشارات المجابة: <span class="ml-2">76 حالة</span></li>
                                    <li class="col-md-5">الإستشارات المنتظرة: <span class="ml-2">13 حالة</span></li>
                                    <li class="col-md-5">رصيد الحساب: <span class="ml-2">1800 EGP</span></li>
                                </ul>
                                <button class="fixed-frame__down__credit__info__btn">كشف حساب</button>
                            </div>
                            <div class="reserve-statement px-md-3">
                                <div class="form-group row select-input col-10 col-md-6 col-lg-4 p-0">
                                    <label class="col-3">ترتيب</label>
                                    <select class="form-control col-9">
                                        <option value="" selected>Dec - 2019</option>
                                        <option value="1">الاختيارالاول</option>
                                        <option value="2">الاختيارالثاني</option>
                                        <option value="3">الاختيار الثالث</option>
                                        <option value="4">الاختيار الرابع</option>
                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <table class="reserve-statement__table table table-responsive-sm  mt-5">
                                    <thead class="reserve-statement__table__head thead-dark">
                                    <tr>
                                        <th scope="col">م</th>
                                        <th scope="col">التاريخ</th>
                                        <th scope="col">التوقيت</th>
                                        <th scope="col">كود الإستشارة</th>
                                        <th scope="col">رقم الحساب</th>
                                        <th scope="col">المبلغ</th>
                                        <th scope="col">إجمالى الرصيد</th>
                                    </tr>
                                    </thead>
                                    <tbody class="reserve-statement__table__body">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>25/12/2019</td>
                                        <td>9:00 am</td>
                                        <td>321</td>
                                        <td>265 684 3964 8567</td>
                                        <td>300</td>
                                        <td>1840</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="tab-pane fade fixed-frame__down__prev-consulting" id="prev-consulting" role="tabpanel" aria-labelledby="lawyer-tab-consulting">
                            <div class="row bg-white ">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center fixed-frame__down__prev__consulting__box">
                                        <div class="col-4">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="col-8 list-unstyled mb-0">
                                            <li>وقت الأستشارة: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>المبلغ المدفوع: <span class="ml-2">300 EGP</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center fixed-frame__down__prev__consulting__box">
                                        <div class="col-4">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="col-8 list-unstyled mb-0">
                                            <li>وقت الأستشارة: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>المبلغ المدفوع: <span class="ml-2">300 EGP</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center fixed-frame__down__prev__consulting__box">
                                        <div class="col-4">
                                            <img class="img-fluid" src="{{asset('assets/images/Elipsa 2.png')}}"/>
                                        </div>
                                        <ul class="col-8 list-unstyled mb-0">
                                            <li>وقت الأستشارة: <span class="ml-2">11/01/2020 - 9:30pm</span></li>
                                            <li>التخصص: <span class="ml-2">قضايا مدنية</span></li>
                                            <li>المبلغ المدفوع: <span class="ml-2">300 EGP</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Start-Personal-Profile-->
                        <div class="tab-pane fade fixed-frame__down__personal-data" id="personal-data" role="tabpanel" aria-labelledby="lawyer-tab-data">
                            <div class="row justify-content-between">
                                <div class="col-md-4">
                                    <div class="fixed-frame__down__personal-data__body">
                                        <h4>القائمة</h4>
                                        <div class="nav flex-md-column nav-pills fixed-frame__down__personal-data__list bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active fixed-frame__down__personal-data__list__link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-users"></i>البيانات الشخصية</a>
                                            <a class="nav-link fixed-frame__down__personal-data__list__link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-users-cog"></i>كلمة المرور</a>
                                            <a class="nav-link fixed-frame__down__personal-data__list__link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-money-bill-wave"></i>رقم الحساب</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 fixed-frame__down__personal-data__body px-0">
                                    <h4>صفحتي الشخصية</h4>
                                    <div class="tab-content fixed-frame__down__personal-data__info bg-white" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active border-0 fixed-frame__down__personal-data__info__tab" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <form method="POST" action="{{route('update' ,  $information['id'])}}"  id="lawyerprofile" enctype="multipart/form-data">
                                                @csrf
{{--                                                <p style="color: #0b2e13">{{$information->user_image}}</p>--}}
                                                <div class="fixed-frame__down__personal-data__info__tab__photo">
{{--                                                    <img src="public/images/{{$information['user_image']}}"/>--}}
{{--                                                    <img src="{{url(Storage::url('public/images/'.$information['user_image']))}}"/>--}}
                                                    <img src="{{asset("public/images/$information->user_image")}}"/>

                                                    <div class="fixed-frame__down__personal-data__info__tab__photo__change">
                                                        <p class="mb-0">تغيير الصورة</p>
                                                        <input type="file" class="fixed-frame__down__personal-data__info__tab__photo__change__input" name="lawyerimage" value="{{$information['user_image']}}"/>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="lawyerName" class="col-md-2">الإسم</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="lawyerName" value="{{$information['name']}}" name="lawyername" placeholder="الأسم بالكامل">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="lawyerEmail" class="col-md-2">البريد الإلكتروني</label>
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" id="lawyerEmail" value="{{$information['email']}}" name="lawyeremail" placeholder="example@domian.com">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="lawyer-birthday" class="col-md-2">تاريخ الميلاد</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="lawyer-birthday" value="{{$information['birth_date']}}" name="lawyerbirthday" placeholder="dd/mm/yy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-md-6">
                                                        <label for="lawyerMobile" class="col-md-4">رقم الموبايل</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" id="lawyerMobile" value="{{$information['user_mobile']}}" name="mobile" placeholder="02 ***********">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-md-6">
                                                        <label for="idCard" class="col-md-4">رقم البطاقة</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" id="idCard" value="{{$information['user_card_id']}}" name="idcard" placeholder="** **** ** * ****">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-md-6">
                                                        <label for="lawyerCity" class="col-md-4">المحافظة</label>
                                                        <div class="col-md-8 select-input">
                                                            <select class="form-control" id="lawyerCity" name="governorate">
                                                                <option value="{{$information['governorate']}}" selected>choose</option>
                                                                <option value="1">{{$information['governorate']}}</option>
{{--                                                                <option value="2">option 1</option>--}}
                                                            </select>
                                                            <i class="fas fa-chevron-down select-input__arrow"></i>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row no-gutters col-md-6">
                                                        <label for="lawyerState" class="col-md-4">قطاع العمل</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" value="{{$information['work_sector']}}" id="lawyerState" name="work_sector">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10 save-edit-btn ml-auto px-0">
{{--                                                    <button class="edit-btn">تعديل</button>--}}
                                                    <button type="submit" class="save-btn">حفظ</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade fixed-frame__down__personal-data__info__tab" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
{{--                                            <form method="POST" action="{{route('update' , $information['id'])}}" enctype="multipart/form-data" id="passwordchange">--}}
                                                @csrf
                                                <div class="form-row fixed-frame__down__personal-data__info__tab__pass">
{{--                                                    <div class="form-group row no-gutters col-12">--}}
{{--                                                        <label for="oldpass" class="col-md-3">كلمة المرور</label>--}}
{{--                                                        <div class="col-md-9 input-icon">--}}
{{--                                                            <input type="password" class="form-control"  id="oldpass" name="lawyerpass" placeholder="GHIBKL@$*132581">--}}
{{--                                                            <i class="far fa-eye-slash" onclick="showPassword()"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="newpassword" class="col-md-3">كلمة المرور الجديدة</label>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control" id="newpassword" name="newpass" placeholder="GHIBKL@$*132581">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="retype" class="col-md-3">إعادة كلمة المرور</label>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control" id="retype" name="retypepass" placeholder="GHIBKL@$*132581">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-9 save-edit-btn ml-auto px-0">
{{--                                                    <button class="edit-btn">تعديل</button>--}}
                                                    <button type="submit" class="save-btn">حفظ</button>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="tab-pane fade fixed-frame__down__personal-data__info__tab" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <form method="GET" action="" id="creditvalidation">
                                                <div class="form-row fixed-frame__down__personal-data__info__tab__pass">
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="oldbank-account" class="col-md-3">رقم الحساب المفعل</label>
                                                        <div class="col-md-9 input-icon">
                                                            <input type="password" class="form-control" id="oldbank-account" name="oldcredit" readonly>
                                                            <i class="far fa-eye-slash" onclick="showBankAccount()"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group row no-gutters col-12">
                                                        <label for="newbank-account" class="col-md-3">رقم الحساب الجديد</label>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control" id="newbank-account" name="newcredit">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 save-edit-btn ml-auto px-0">
                                                    <button class="edit-btn">تعديل</button>
                                                    <button type="submit" class="save-btn">حفظ</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End-Personal-Profile-->
                        <div class="tab-pane fade fixed-frame__down__service" id="lawyer-service" role="tabpanel" aria-labelledby="lawyer-tab-service">
                            <div class="row no-gutters">
                                <div class="col-md-6 px-4 fixed-frame__down__service__message">
                                    <h5>تواصل معنا</h5>
                                    <form id="sendmessage" action="sendMail" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row no-gutters">
                                            <label for="requestname" class="col-md-4">الإسم</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="requestname" name="requestname">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters">
                                            <label for="requestemail" class="col-md-4">البريد الإلكتروني</label>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" id="requestemail" name="requestemail">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters">
                                            <label for="requestmessage" class="col-md-4">إستفسارك</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="requestmessage" name="requestmessage"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8 ml-auto">
                                            <button type="submit">ارسال</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 px-4 fixed-frame__down__service__call mt-4 mt-md-0 pl-md-4">
                                    <div class="fixed-frame__down__service__call__phone">
                                        <h5>تواصل بنا</h5>
                                        <p>التليفون الأرضي<span class="ml-2">0226425344</span></p>
                                        <p>الموبايل<span class="ml-4">01002345253</span></p>
                                    </div>
                                    <div class="fixed-frame__down__service__call__email">
                                        <h5>راسلنا علي</h5>
                                        <p>example@gmail.com</p>
                                    </div>
                                    <div class="fixed-frame__down__service__call__social">
                                        <h5>راسلنا على</h5>
                                        <ul class="list-unstyled d-flex">
                                            <li class="mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="mr-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="solutions__contain__divide d-none d-md-block">
                                    <div class="solutions__contain__divide__column"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chat conversation page -->
            </div>
        </div>
    </div>

</section>

<!-- Start Section Contact Us -->
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
@endsection()
