<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{asset('home/css/bootstrap.icon.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('home/js/jquery.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/js/vue.js')}}"></script>
    <!--[if lt IE 9]>
    <!--<script src="{{asset('home/js/modernizr.js')}}"></script>-->
    {{--<![endif]-->--}}

</head>
<body>
<header id="app-header">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-info">
        <a class="navbar-brand" href="/">
            <img src="{{asset('image/brand-white.png')}}" width="82" height="30" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">主页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">简介</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">小说</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        学习
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">笔记</a>
                        <a class="dropdown-item" href="#">心得</a>
                        <a class="dropdown-item" href="#">闲言碎语</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">留言</a>
                </li>
            </ul>
        </div>
        <form class="form-inline hidden-xs hidden-sm">
            <input class="form-control mr-sm-2" type="search" width="300px" placeholder="Search" aria-label="Search">
            <a href="">
                <i class="glyphicon glyphicon-bell text-muted" id="bell"></i>
            </a>
            <img  src="{{asset('image/touxiang.jpg')}}" alt="">

        </form>
    </nav>

</header>
<section id="info-header">
    <div class="container text-center">
        <div class="text-center info-header-center">
            <div class="img">
                <img src="{{asset('image/touxiang.jpg')}}" alt="">
            </div>
            <div class="text text-center">
                <span class="text-muted text-center h2">丁天柱</span>
                <span class="text-muted text-center p">天生我材必有用</span>
                <span class="text-muted text-center p">千金散尽还复来</span>
            </div>
        </div>
    </div>
</section>
<section id="info-images">
    <div class="container">
        <div class="images">
            <div class="image float-left">
                <img src="{{asset('image/instagram_5.jpg')}}" alt="">
            </div>
            <div class="image float-left">
                <img src="{{asset('image/instagram_6.jpg')}}" alt="">
            </div>
            <div class="image float-left">
                <img src="{{asset('image/instagram_5.jpg')}}" alt="">
            </div>
            <div class="image float-left">
                <img src="{{asset('image/instagram_5.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<footer id="app-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="glyphicon glyphicon-earphone"></i>
                <span v-text="msg_tel"></span>
            </div>
            <div class="col-md-4">
                <a class="text-dark">
                    <i class="glyphicon glyphicon-send"></i>
                    <span v-text="msg_wx"> </span>
                    <i class="glyphicon glyphicon-triangle-top"></i>
                    <img :src="msg_wx_src" alt="weixinimg">
                </a>
            </div>
            <div class="col-md-4">
                <i class="glyphicon glyphicon-envelope"></i>
                <span v-text="msg_email"> </span>
            </div>
        </div>
        <div class="row text-center v_info">
            <div class="col-md-12" v-text="msg_info">
            </div>
            <div class="col-md-12" v-text="msg_web">
            </div>

        </div>
    </div>
</footer>
<script src="{{asset('home/js/index.js')}}"></script>
</body>
</html>
