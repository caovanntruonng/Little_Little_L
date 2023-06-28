<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little & Little - L</title>
    <link rel="shortcut icon" href="/assets/images/Little & Little Logo page.png" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link href="/bootstrap-5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="/bootstrap-5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/slick.min.css">
    <link rel="stylesheet" href="/assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- link js -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/carousel-multiple-items.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
</head>

<body>
    @include('includes.header')
    @yield('homepage')
    @yield('eventpage')
    @yield('eventdetailspage')
    @yield('contactpage')
    @yield('paymentpage')
    @yield('successfulpaymentpage')
    <script src="/assets/js/custom-calendar.js"></script>
    <script src="/assets/js/notification.js"></script>
    <script src="/assets/js/expiration-date.js"></script>
    <script src="/assets/js/cardnumber.js"></script>
    <script src="/assets/js/uppercase.js"></script>
    <script src="/assets/js/cvv.js"></script>
</body>

</html>