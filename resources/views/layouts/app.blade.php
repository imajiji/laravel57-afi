<!DOCTYPE html>
<html>
<head>
    @yield('head')
</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">Debu stock</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#"></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">閲覧履歴</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">カテゴリー&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>カテゴリー</h3>
                        <ul>
                            <li><a href="#">イラスト</a></li>
                            <li><a href="#">動画</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>リンク</h3>
                        <ul>
                            <li><a href="#">デジケット</a></li>
                            <li><a href="#">BIG-GYM</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <p class="copyright">DEBU STOCK © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
