<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>admin page</title>
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,600,700&display=swap&subset=arabic"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstraprtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main-rtl.css')}}">
</head>
<body>
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

@yield('admin_page')

<!-- js file-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/additional-methods.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.ar.js')}}"></script>


<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/modules/admin-page/admin-page.js')}}"></script>
<!--Wow File-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

<!--Data_Table-->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        // $("#example2").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

</body>
</html>
