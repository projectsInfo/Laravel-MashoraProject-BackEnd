
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consulting Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,600,700&display=swap&subset=arabic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstraprtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/all.min.css')}}">
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
                        <a class="join-dropdown bg-0" href="#">Admin One</a>
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
<!-- start admin page -->
<section class="consult-details">
    <div class="container">
        <div class="row">
            <div class="col-12 m-auto">
                <div class="consult-details__fixed-frame">
                    <div class="consult-details__fixed-frame__up text-center">
                        <h3>تفاصيل الإستشارات</h3>
                        <div class="consult-details__fixed-frame__up__p">
                            <p>الإستشارات الملغية</p>
                        </div>
                    </div>
                    {{--                            <div class="consult-details__fixed-frame__down">--}}
                    {{--                                <table class="consult-details__fixed-frame__down__table table table-responsive-sm text-center">--}}
                    {{--                                    <thead class="consult-details__fixed-frame__down__table__head thead-dark">--}}
                    {{--                                      <tr>--}}
                    {{--                                        <th scope="col">name</th>--}}
                    {{--                                        <th scope="col">email</th>--}}
                    {{--                                        <th scope="col">consulting number</th>--}}
                    {{--                                        <th scope="col">consulting date</th>--}}
                    {{--                                        <th scope="col">lawyer</th>--}}
                    {{--                                        <th scope="col">rate</th>--}}
                    {{--                                        <th scope="col">payment</th>--}}
                    {{--                                      </tr>--}}
                    {{--                                    </thead>--}}

                    {{--                                    @foreach($consulting as $data)--}}
                    {{--                                    <tbody class="consult-details__fixed-frame__down__table__body">--}}
                    {{--                                        <tr class="bg-light">--}}
                    {{--                                            <th scope="row">{{$data->name}}</th>--}}
                    {{--                                            <td>{{$data->email}}</td>--}}
                    {{--                                            <td>{{$data->consulting_number}}</td>--}}
                    {{--                                            <td>{{$data->consulting_date}}</td>--}}
                    {{--                                            <td>{{$data->lawyer_name}}</td>--}}
                    {{--                                            <td>--}}
                    {{--                                                {{$data->rate}}--}}
                    {{--                                                <div class="lawyer__grade">--}}
                    {{--                                                    <i class="far fa-star lawyer__grade__empty"></i>--}}
                    {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                    {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                    {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                    {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                    {{--                                                </div>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td>{{$data->payment}}</td>--}}
                    {{--                                            <td>{{$data->name}}</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                    </tbody>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </table>--}}


                    <div class="card">
                    {{--                                    <div class="card-header">--}}
                    {{--                                        <h3 class="card-title">DataTable with default features</h3>--}}
                    {{--                                    </div>--}}
                    <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="consult-details__fixed-frame__down__table__head thead-dark">
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">consulting number</th>
                                    <th scope="col">consulting date</th>
                                    <th scope="col">lawyer</th>
                                    <th scope="col">rate</th>
                                    <th scope="col">payment</th>
                                </tr>
                                </thead>
                                <tbody class="consult-details__fixed-frame__down__table__body">
                                @foreach($consultingIgnored as $data)
                                    <tr class="bg-light">
                                        <th scope="row">{{$data->name}}</th>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->consulting_number}}</td>
                                        <td>{{$data->consulting_date}}</td>
                                        <td>{{$data->lawyer_name}}</td>
                                        <td>
                                            {{$data->rate}}
                                            {{--                                                <div class="lawyer__grade">--}}
                                            {{--                                                    <i class="far fa-star lawyer__grade__empty"></i>--}}
                                            {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                                            {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                                            {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                                            {{--                                                    <i class="fas fa-star lawyer__grade__full"></i>--}}
                                            {{--                                                </div>--}}
                                        </td>
                                        <td>{{$data->payment}}</td>
                                        {{--                                            <td>{{$data->name}}</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                                {{--                                            <tfoot>--}}
                                {{--                                            <tr>--}}
                                {{--                                            </tr>--}}
                                {{--                                            </tfoot>--}}
                            </table>
                        </div>
                        <!-- /.card-body -->
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
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>

<!--Data_Table-->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
</body>
</html>
