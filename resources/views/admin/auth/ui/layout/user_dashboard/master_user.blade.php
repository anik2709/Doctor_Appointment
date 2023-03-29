<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:21:31 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("admin/assets/images/favicon.ico")}}">
    <!-- third party css -->
    <link href="{{asset("admin/assets/css/vendor/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset("admin/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("admin/assets/css/app.min.css")}}" rel="stylesheet" type="text/css" id="app-style"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    @stack('style')
</head>


<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid">
@include('admin.auth.ui.layout.user_dashboard.user_sidebar')
@section('body_content')
@show
</body>


<!-- Footer Start -->

<footer class="footer">
    <div class="container-fluid">
        <div class="col-md-6">
            <div class="text-md-end footer-links d-none d-md-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

<!-- Footer End -->

</html>
