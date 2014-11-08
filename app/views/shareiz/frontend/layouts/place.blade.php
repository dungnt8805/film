<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta content="True" name="HandheldFriendly"/>
    <meta content="320" name="MobileOptimized"/>
    <title></title>
    <meta content="C7cCwvViEJJf6SxiZ4DMKFcBVGQTvdLfuHeNXgEi" name="csrf-token">

    <link href="{{asset('assets/shareiz/frontend/css/place.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin"/>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand site" href="/">Shareiz.com</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav"></ul>
            <ul class="nav navbar-nav navbar-right">
            @include('shareiz/frontend/layouts/includes/nav_user')
            </ul>

        </div>
    </div>

</div>
<div id="wrap">
    <div id="ohsnap"></div>
    <div id="ajaxModal" class="modal fade">
        <div style="padding: 50px 20px;">
            <i class="fa fa-spinner fa-spin fa-large">
                Please wait....
            </i>
        </div>
    </div>
    <div class="container body">
        @yield('content')
    </div>
</div>
<footer id="footer">
    @include('shareiz/frontend/layouts/includes/footer')
</footer>
</body>
</html>