<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="og:url" content="{{ asset('assets/images/logo/logo.png') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="og:description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.png') }}" />

    <meta property="twitter:card" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="twitter:title" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="twitter:description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="twitter:image" content="{{ asset('assets/images/logo/logo.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/admin/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/admin/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toast.css') }}">


</head>

<body>
