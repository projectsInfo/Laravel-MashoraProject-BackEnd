
<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Payment Methods</title>
        <link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,600,700&display=swap&subset=arabic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstraprtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main-rtl.css')}}">
    </head>
    <body >
        <!-- Start join us section -->
        <div class="join-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="join-us-tabs nav align-items-center">
                            <li><a href="#">English</a></li>
                            <li><a href="#">دخول</a></li>
                            <li class="join-btn p-1 rounded dropdown">
                                <a class="join-dropdown" href="#">Ahmed Ibrahim</a>
                                <div class="lawyer-name-menu join-menu shadow">
                                    <a href="#"><i class="fas fa-user-tie"></i>بياناتي</a>
                                    <a href="#"><i class="fas fa-sign-out-alt"></i>خروج</a>
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
          <!-- the content -->
        <div class="payment-methods py-5">
            <div class="container">
                <div class="row justify-content-between no-gutters">
                    <div class="col-md-3">
                        <div class="payment-methods__frame">
                            <h4>القائمة</h4>
                            <div class="nav flex-md-column nav-pills payment-methods__frame__list bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active payment-methods__frame__list__link" id="v-pills-cash-tab" data-toggle="pill" href="#v-pills-cash" role="tab" aria-controls="v-pills-cash" aria-selected="true"><i class="fas fa-money-bill-wave"></i>فودافون كاش</a>
                                <a class="nav-link payment-methods__frame__list__link" id="v-pills-fawry-tab" data-toggle="pill" href="#v-pills-fawry" role="tab" aria-controls="v-pills-fawry" aria-selected="false"><i class="fas fa-money-bill-wave"></i>فوري</a>
                                <a class="nav-link payment-methods__frame__list__link" id="v-pills-visa-tab" data-toggle="pill" href="#v-pills-visa" role="tab" aria-controls="v-pills-visa" aria-selected="false"><i class="fab fa-cc-visa"></i>فيزا كارد</a>
                                <a class="nav-link payment-methods__frame__list__link" id="v-pills-convert-tab" data-toggle="pill" href="#v-pills-convert" role="tab" aria-controls="v-pills-convert" aria-selected="false"><i class="fas fa-random"></i>تحويل بنكي</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-3 mt-md-0">
                        <div class=" payment-methods__frame">
                            <h4>طرق الدفع</h4>
                            <div class="tab-content payment-methods__frame__info bg-white" id="v-pills-tabContent">
                                <div class="tab-pane fade show active border-0 payment-methods__frame__info__tab" id="v-pills-cash" role="tabpanel" aria-labelledby="v-pills-cash-tab">
                                    <form method="" action="" id="cash">
                                        <div class="form-row">
                                            <div class="form-group row no-gutters col-12">
                                                <label for="phone-number" class="col-md-2">رقمك</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="phone-number" name="phone-number" placeholder="01001544044">
                                                </div>
                                            </div>
                                            <div class="form-group row no-gutters col-12">
                                                <label for="code" class="col-md-2">كود التحويل</label>
                                                <div class="col-md-10">
                                                    <input type="email" class="form-control" id="code" name="code">

                                                </div>
                                            </div>

                                            <div class="form-group row no-gutters col-12 payment-methods__frame__info__tab__invoice">
                                                <label for="invoice" class="col-md-2">صورة الفاتورة</label>
                                                <div class="col-md-10">
                                                    <div class="form-control payment-methods__frame__info__tab__invoice__preview">
                                                        <span class="text-muted">يجب ان تكون الصورة واضح بها كود وتاريخ التحويلورقم الحساب المحول إليه ....</span>
                                                        <img src="assets/images/Elipsa 2.png" class="invoice-img">
                                                    </div>
                                                </div>
                                                <label class="payment-methods__frame__info__tab__invoice__img-choice ml-auto mt-2">
                                                    إختار الصورة
                                                    <input type="file" id="invoice" onchange="invoicePreview(this);">
                                                </label>
                                            </div>
                                            <p class="account-number">رقم حساب :<span class="ml-2">01001112654</span></p>
                                        </div>
                                        <div class="col-10 save-edit-btn ml-auto px-0">
                                            <button class="edit-btn">تعديل</button>
                                            <button type="submit" class="save-btn">حفظ</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade payment-methods__frame__info__tab" id="v-pills-fawry" role="tabpanel" aria-labelledby="v-pills-fawry-tab">
                                    <form id="fawry">

                                        <div class="form-group row no-gutters col-12">
                                            <label for="phone-number" class="col-md-2">رقمك</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="phone-number" name="phone-number" placeholder="01001544044">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters col-12">
                                            <label for="code" class="col-md-2">رصيدك الحالي</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="code" name="code">

                                            </div>
                                        </div>
                                        <p class="account-number">رقم حساب :<span class="ml-2">01001112654</span></p>
                                        <div class="col-9 save-edit-btn ml-auto px-0">
                                            <button class="edit-btn">تعديل</button>
                                            <button type="submit" class="save-btn">حفظ</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade payment-methods__frame__info__tab" id="v-pills-visa" role="tabpanel" aria-labelledby="v-pills-visa-tab">
                                    <form id="visa">

                                        <div class="form-group row no-gutters col-12">
                                            <label for="visa-number" class="col-md-2">رقم الفيزا</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="visa-number" name="visa-number">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters col-12">
                                            <label for="expiry-date" class="col-md-2">تاريخ الانتهاء</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="expiry-date" name="expiry-date">

                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters col-12">
                                            <label for="security-code" class="col-md-2">رقم CSC</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="security-code" name="security-code">

                                            </div>
                                        </div>
                                        <p class="account-number">رقم حساب :<span class="ml-2">2645 6548 6523 789 124</span></p>
                                        <div class="col-9 save-edit-btn ml-auto px-0">
                                            <button class="edit-btn">تعديل</button>
                                            <button type="submit" class="save-btn">حفظ</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade payment-methods__frame__info__tab" id="v-pills-convert" role="tabpanel" aria-labelledby="v-pills-convert-tab">
                                    <form id="bank">

                                        <div class="form-group row no-gutters col-12">
                                            <label for="account-number" class="col-md-2">رقم حسابك</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="account-number" name="account-number">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters col-12">
                                            <label for="transaction-date" class="col-md-2">تاريخ التحويل</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="transaction-date" name="transaction-date">

                                            </div>
                                        </div>
                                        <p class="account-number">رقم حساب :<span class="ml-2">2645 6548 6523 789 124</span></p>
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


        <!-- js file-->
        <script src="{{asset('')}}assets/js/jquery-3.3.1.min.js"></script>

        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/all.min.js')}}"></script>
        <script src="{{asset('assets/js/modules/payment-methods/payment-methods.js')}}"></script>

    </body>
</html>
