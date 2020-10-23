@extends('layouts.admin_page_links')
@section('admin_page')
    <!-- start admin page -->
    <section class="admin-page">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="admin-page__fixed-frame">
                        <div class="admin-page__fixed-frame__up text-center">
                            <h3>إدارة المستخدمين</h3>
                            <nav>
                                <div
                                    class="nav nav-tabs admin-page__tabs border-top-0 flex-nowrap flex-md-wrap justify-content-md-center"
                                    id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active admin-page__tabs__link" id="user-tab-manager"
                                       data-toggle="tab" href="#user-manager" role="tab" aria-controls="user-manager"
                                       aria-selected="true">إدارة المستخدمين</a>
                                    <a class="nav-item nav-link admin-page__tabs__link" id="lawyer-tab-manager"
                                       data-toggle="tab" href="#lawyer-manager" role="tab"
                                       aria-controls="lawyer-manager" aria-selected="false">إدارة المحاميين</a>
                                    <a class="nav-item nav-link admin-page__tabs__link" id="admin-tab-consulting"
                                       data-toggle="tab" href="#admin-consulting" role="tab"
                                       aria-controls="admin-consulting" aria-selected="false">الإستشارات</a>
                                    <a class="nav-item nav-link admin-page__tabs__link" id="admin-tab-credit"
                                       data-toggle="tab" href="#admin-credit" role="tab" aria-controls="admin-credit"
                                       aria-selected="false">الرصيد</a>
                                    <a class="nav-item nav-link admin-page__tabs__link" id="admin-tab-service"
                                       data-toggle="tab" href="#admin-service" role="tab" aria-controls="admin-service"
                                       aria-selected="false">الدعم الفني</a>
                                    <a class="nav-item nav-link admin-page__tabs__link" id="admin-tab-setting"
                                       data-toggle="tab" href="#admin-setting" role="tab" aria-controls="admin-setting"
                                       aria-selected="false">الإعداد</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content admin-page__fixed-frame__down" id="nav-tabContent">

                            <!-- user manager tab -->
                            <div
                                class="tab-pane fade show active admin-page__fixed-frame__down__user-manager px-lg-4 border-bottom-0"
                                id="user-manager" role="tabpanel" aria-labelledby="user-tab-manager">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="admin-page__fixed-frame__down__user-manager__table__head thead-dark">
                                    <tr>
                                        <th scope="col">الاسم</th>
                                        <th scope="col">الإيميل</th>
                                        <th scope="col">رقم التليفون</th>
                                        <th scope="col">عدد الإستشارات</th>
                                        <th scope="col">الحالة</th>
                                        <th scope="col">أخر ظهور</th>
                                    </tr>
                                    </thead>
                                    <tbody class="admin-page__fixed-frame__down__user-manager__table__body">
                                    <tr class="bg-light">
                                        @foreach($userAdmin as $user)
                                        <th scope="row">{{$user->name}}</th>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->consulting_total}}</td>
                                        <td>{{$user->user_case}}</td>
                                        <td>{{$user->last_seen}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- lawyer manager tab -->
                            <div class="tab-pane fade admin-page__fixed-frame__down__lawyer-manager text-center"
                                 id="lawyer-manager" role="tabpanel" aria-labelledby="lawyer-tab-manager">
                                <div class="row justify-content-between text-left">
                                    {{--                                        <div class="col-4 admin-page__fixed-frame__down__lawyer-manager__search">--}}
                                    {{--                                            <div class="form-group row no-gutters">--}}
                                    {{--                                                <label class="col-2">بحث</label>--}}
                                    {{--                                                <div class="col-10 admin-page__search-input">--}}
                                    {{--                                                    <input type="text" class="form-control" placeholder="....">--}}
                                    {{--                                                    <i class="fa fa-search"></i>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    <div class="col-4">
                                        <div class="form-group row no-gutters">
                                            {{--                                                <label for="subject" class="col-md-2">فلتر</label>--}}
                                            {{--                                                <div class="col-md-10 select-input">--}}
                                            {{--                                                    <select class="form-control" id="subject" name="subject">--}}
                                            {{--                                                        <option value="">التخصص</option>--}}
                                            {{--                                                        <option value="1">جنائي</option>--}}
                                            {{--                                                        <option value="2">قضايا مدنية</option>--}}
                                            {{--                                                        <option value="3">قضايا البنوك</option>--}}
                                            {{--                                                        <option value="4">قضايا الأسرة</option>--}}
                                            {{--                                                        <option value="5">قضايا مالية</option>--}}
                                            {{--                                                        <option value="6">قضايا صحافة</option>--}}
                                            {{--                                                    </select>--}}
                                            {{--                                                    <i class="fas fa-chevron-down select-input__arrow"></i>--}}
                                            {{--                                                </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead
                                        class="admin-page__fixed-frame__down__lawyer-manager__table__head thead-dark">
                                    <tr>
                                        <th scope="col">الاسم</th>
                                        <th scope="col">الإيميل</th>
                                        <th scope="col">رقم التليفون</th>
                                        <th scope="col">عدد الإستشارات</th>
                                        <th scope="col">الحالة</th>
                                        <th scope="col">التخصص</th>
                                    </tr>
                                    </thead>
                                    <tbody class="admin-page__fixed-frame__down__lawyer-manager__table__body">
                                    @foreach($lawyerAdmin as $admin)
                                    <tr class="bg-light">
                                        <th scope="row">{{$admin->name}}</th>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->phone_number}}</td>
                                        <td>{{$admin->consulting_total}} </td>
                                        <td>{{$admin->lawyer_case}}</td>
                                        <td>{{$admin->Specialization}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <!-- Admin page Consulting -->
                            <div class="tab-pane fade admin-page__fixed-frame__down__admin-consulting"
                                 id="admin-consulting" role="tabpanel" aria-labelledby="admin-tab-consulting">
                                <div class="row text-center align-items-center">
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">عدد
                                                الإستشارات الناجحة:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">2800</span>إستشارة</p>
                                            <div class="col-4">
                                              <a href="{{route('success_consulting')}}"> <button
                                                    class="admin-page__fixed-frame__down__consulting-credit__button">
                                                    التفاصيل
                                                </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">عدد
                                                الإستشارات الملغية:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">1100</span>إستشارة</p>
                                            <div class="col-4">
                                                <a href="{{route('ignored_consulting')}}"> <button
                                                        class="admin-page__fixed-frame__down__consulting-credit__button">
                                                        التفاصيل
                                                    </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">عدد
                                                الإستشارات المنتظرة:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">600</span>إستشارة</p>
                                            <div class="col-4">
                                                <a href="{{route('waiting_consulting')}}"> <button
                                                        class="admin-page__fixed-frame__down__consulting-credit__button">
                                                        التفاصيل
                                                    </button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Admin Page credit  -->
                            <div class="tab-pane fade admin-page__fixed-frame__down__admin-credit" id="admin-credit"
                                 role="tabpanel" aria-labelledby="admin-tab-credit">
                                <div class="row text-center align-items-center">
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">الرصيد
                                                المحول من المستخدمين:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">5800</span>ج/م</p>
                                            <div class="col-4">
                                                <button
                                                    class="admin-page__fixed-frame__down__consulting-credit__button">
                                                    التفاصيل
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">الرصيد
                                                المسحوب من المحاميين:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">2400</span>ج/م</p>
                                            <div class="col-4">
                                                <button
                                                    class="admin-page__fixed-frame__down__consulting-credit__button">
                                                    التفاصيل
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4">صافي
                                                الحساب:</p>
                                            <p class="admin-page__fixed-frame__down__consulting-credit__p col-4"><span
                                                    class="mr-3">3400</span>ج/م</p>
                                            <div class="col-4">
                                                <button
                                                    class="admin-page__fixed-frame__down__consulting-credit__button admin-credit__print-btn">
                                                    طباعة
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
