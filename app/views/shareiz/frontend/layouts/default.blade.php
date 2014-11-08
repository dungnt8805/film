<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta name="keywords" content="@yield('meta_keywords')"/>
    <meta http-equiv="REFRESH" content="1800"/>
    <meta name="author" content=""/>

    <!-- Mobile Specific Metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS ================================================== -->
    <link href="{{asset('assets/shareiz/commons/css/style.css')}}" rel="stylesheet"/>

    <!-- Javascript =========================================== -->
    <script src="{{asset('assets/shareiz/commons/js/jquery.1.10.2.min.js')}}" type="text/javascript"></script>

    <!-- less css ============================================= -->
    <link href="{{asset('assets/shareiz/frontend/css/style.less')}}" rel="stylesheet/less" type="text/css"/>
    <script src="{{asset('assets/shareiz/commons/js/less.js')}}" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <header>
        <div id="notify-container">
            <div id="notify">
                <div class="notify-bar">
                    <div class="notify-menu">

                    </div>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div id="header">
            <div class="header-inner">
                <div id="logo">
                    <a href="/"></a>
                </div>
            </div>
        </div>
    </header>
</div>
</body>
</html>