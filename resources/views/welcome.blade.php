<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <title>Has Logistic - Transportation</title>
    <meta name="author" content="mbsdev">
    <meta name="description" content="Has Logistic and Transportation">
    <meta name="keywords" content="logistic, transportation, package, delivery, cargo, carousel, post, moving, caring">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Shipper Logistic - Transportation Template">
    <meta property="og:image" content="http://www.themezinho.net/shipper/preview.png">
    <meta property="og:site_name" content="HAS LOGISTIQUE">
    <meta property="og:title" content="HAS LOGISTIQUE">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/shipper">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@HASLOGISTIC">
    <meta name="twitter:creator" content="@HASLOGISTIC">
    <meta name="twitter:title" content="HASLOGISTIC">
    <meta name="twitter:description" content="Has Logistique - Transportation ">

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="soft-transition"></div>
<!-- end soft-transition -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
<main>
    <!-- end side-box -->
    @include('partiel_front.partial_header')

</main>

@include('partiel_front.scrip')
</body>
</html>

