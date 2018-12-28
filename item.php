<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title></title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">首頁</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">聯繫我們</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html"><span class="glyphicon glyphicon-user"></span>登入/註冊</a></li>
                    <li><a href="account.html"><span class="glyphicon glyphicon-user"></span>會員中心</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>購物車</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="image_area col-sm-4">
            <img src="img/item.png">
        </div>
        <div class="detail_area col-sm-8">
            <h3>漢來海港城 南部下午茶券</h3>
            <h1>$699</h1>
            <span>數量</span>
            <input type="number"><br><br>
            <button class="btn btn-default">放入購物車</button>
            <button class="btn btn-default">直接購買</button>
        </div>
    </div>

    <div class="container">
       <div class="col-sm-12 a">
           詳細資訊<br><br><br><br>
       </div>
    </div>

    <div class="container">
        <div class="col-sm-12 a">
            商品評價<br><br>
            <img src="img/account.png" width="50" height="50">
            <span>userid:0x123</span><br>
            <span>time_stamp:2018/12/11</span>
        </div>
    </div>

    <div class="align_center">
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
</body>

</html>
