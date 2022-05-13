<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Buy Flow') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



    <meta name="description" content="Get your crypto wallet setup and buy Flow token easily in a few quick steps" />
    <link rel="canonical" href="https://buy-flow.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Buy Flow" />
    <meta property="og:description" content="Get your crypto wallet setup and buy Flow token easily in a few quick steps" />
    <meta property="og:url" content="https://buy-flow.com/" />
    <meta property="og:site_name" content="Buy Flow" />
    <meta property="article:modified_time" content="2022-05-12T22:29:49+00:00" />
    <meta property="og:image" content="https://buy-flow.com/images/share.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://buy-flow.com/images/share.png" />
    <meta name="twitter:site" content="@flow_blockchain" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!--fonts-->
    <link rel="stylesheet" href="https://use.typekit.net/dov2gwc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script>
        var moonpayDomain = '{!! config('flovatar.moonpayDomain') !!}';
        var moonpayParams = '{!! config('flovatar.moonpayParams') !!}';
        var moonpayPublicKey = '{!! config('flovatar.moonpayPublicKey') !!}';
    </script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="{{request()->routeIs('home', 'builder') ? 'header-transparent ' : ''}}">
<div id="wrapper"
     x-bind:class="jsLoaded ? 'jsloaded' : ''"
     x-data="appData"
     x-init="initApp($dispatch); jsLoaded = true;"
     @user-check-finish.window="userCheckLoading = false"
     @user-loaded.window="user = $event.detail.user"
     @profile-loaded.window="profile = $event.detail.profile; userCheckLoading = false;"
     @logged-out.window="user = null; profile = null;"
     @loading-start.window="loading = true; waitingSeal = false;"
     @waiting-seal.window="loading = false; waitingSeal = true;"
     @loading-completed.window="loading = false; waitingSeal = false; sealCompleted = true; setTimeout(()=>sealCompleted=false,3000);"
     @subscribed-email.window="showSubscription = false"
     @moonpay-signed.window="moonpaySignature = $event.detail.signature"
     @pack-sealing.window="sealingPack = true"
     @pack-purchased.window="packPurchased = true"
     @user-not-initialized.window="showInitPopup = true;"
     @transaction-error.window="handleTransactionErrorMessage($event.detail.message)"
     @address-found.window="handleAddressFound($event.detail.profile)"
     @login-failed.window="showLoginResult = true"
     @reserve-failed.window="showReserveResult = true"
     @executing-transaction.window="txId = $event.detail.txId"
>
    <div class="w1">

    @include('partials/navigation')

    <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <div x-show="loading" class="fixed z-10 inset-0 flex items-center justify-center bg-black-100 bg-opacity-95 transition-opacity" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="loading relative flex justify-between items-center mb-50">
            <span class="left-wall bg-yellow-100 mb-20 w-12 rounded-5"></span>
            <span class="ball bg-pink-100 w-24 h-24 mb-13 rounded-full"></span>
            <span class="right-wall bg-yellow-100 mt-20 w-12 rounded-5"></span>
        </div>
    </div>

    @if(!request()->routeIs('builder'))
        @include('partials/footer')
    @endif

    @include('partials/modals')


    <!-- transaction loader -->
    <div class="loader-widget" x-bind:class="getToasterClass()">
        <span class="txt" x-text="waitingSeal ? 'Sealing Transaction' : 'Loading'"></span>
        <img class="spinner" src="/images/loader-white.svg" alt="">
    </div>
    <!-- end of transaction loader -->
</div>


@stack('modals')

</body>
</html>
