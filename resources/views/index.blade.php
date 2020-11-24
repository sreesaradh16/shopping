<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>
   
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('public/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">


    <style>
        
.nav-menu ul li{
    position: relative;
    white-space: nowrap;
    padding: 10px 0 10px 28px;
    list-style-type: none;
}
.nav-menu ul{
    display: flex;
}
.top-fixed {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.align-items-center {
    align-items: center!important;
}
.d-flex {
    display: flex!important;
}
.nav-menu2{
    position: relative;
    white-space: nowrap;
    padding: 10px 0 10px 0px;
    list-style-type: none;
}
.social{
    list-style-type: disc;
}
.top{
    height: 100px;
}

.imgtv{
    max-width: 282px;
    max-height: 176px;
}
.imghead{
    max-height: 200px;
    max-width: 200px;
}
.boxpad{
    padding: 5px 5px 5px 5px;
}
.view{
    text-decoration: none;
    text-align: right;
    padding-right: 30px;

}
a:hover {
    text-decoration: none;
}
li a{
    color: white;
}
.imgphn1{
    max-width: 100px;
    max-height: 200px;
}
 /* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  .button1 {
    background-color: #4e71ba;
    color: white;
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  .button2{
    padding-left: 300px;
}
  #btn1{
    background-color: #4e71ba;
    color: white;
    border: none;
    cursor: pointer;
    width: 95%;
  }
    #btn3{
    background-color:red;
    color: white;
    padding: 5px 20px;
    border: none;
    cursor: pointer;
    width: 30%;
  }

  #btn4{
    background-color: green;
    color: white;
    padding: 5px 20px;
    border: none;
    cursor: pointer;
    width: 30%;
  }
  #btn5{
    background-color: green;
    color: white;
    border: none;
    cursor: pointer;
    width: 30%;
  }
  .btn6{
    background-color: green;
    color: white;
    border: none;
    cursor: pointer;
    width: 50%;
  }
  .btn7{
    background-color: red;
    color: white;
    border: none;
    cursor: pointer;
    width: 50%;
  }
  button:hover {
    opacity: 0.8;
  }
  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 6px;
    top: 0;
    width: 99%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    padding: 0px 20px 30px 20px;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
    position: absolute;
    right: -10px;
    top: -25px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }
  .close1 {
    position: absolute;
    right: -10px;
    top: -35px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close1:hover,
  .close1 :focus,
  .close:focus {
    color: red;
    cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }
    
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  .imgphnbox{
      max-width: 100px;
      max-height: 200px;
  }
  .imgproduct{
    max-width: 300px;
    max-height: 500px;
  }
  .boxpad2{
      padding: 35px 10px 10px 10px;
  }
  .checked {
    color: orange;
  }
  .font1{
    font-family: Roboto,Arial,sans-serif;
    font-weight: normal;
  }
  .del{
    font-weight: bold;
  }
  .lineh{
    line-height: 60%;
  }

        body
        {
            background-color:rgb(250, 240, 240);
        }
        .text
        {
            color: white;
            font-size: 14px;
        }
            .nav-bcolor{
            background-color: lightseagreen;
        }
        .card
        {
            border: none;
        }
        .header
        {
            background-color:#4e71ba;
            transition: all 0.5s;
            z-index: 997;
            padding: 10px 0;
        }
        .bgcolor
        {
            background-color: white;
            padding: 20px 20px 20px 20px;
        }
        .nav-l
        {
            color: white;
            font-size: 20px;       }
        .box
        {
            width: 200px;
            height: 300px;
            border: 2px solid black;
        }
        .box2
        {
            border: 2px cadetblue double;
            text-align: center;
        }
        #menu1{
            background-color: #2CBDBB;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <!-- nav bar -->

        <header  class="top-fixed header">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <h3 style="padding-right:130px; color: white;">Shop-Cart</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 form-inline md-form mr-auto mb-4">
                        <input class="form-control mr-sm-2" style="width:450px " type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                            style="color: white;">Search</button>
                    </form>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index"><i class="fa fa-fw fa-home"></i>Home</a>
                        </li>
                        <a class="nav-link" href="#" style="padding-right:20px;" onclick="document.getElementById('id01').style.display='block'"
                            role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-user"></i>
                            Login
                        </a>
                    

                    <!-- modal -->
                        <div id="id01" class="modal">

                            <form class="modal-content animate" action="/action_page.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <input type="text" class="form-control" placeholder="Username" name="uname" required>

                                    <input type="password" class="form-control" placeholder="Password" name="psw" required>

                                    <button type="submit" id="btn5" class="btn btn-success">Login</button>
                                    <a href="">Forgot password??</a>
                                </div><br>
                                <center><a href="register"><input type="button" class="btn btn-info" value="register" id="btn1"></a></center>
                                
                            </form>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i style="font-size:24px" class="fa">&#xf07a;</i> Cart</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <div class="div top"></div>


        

        <!-- menu -->

            <div class="row" id="menu1">   
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Mobile</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Laptop</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Tv</a></center>
                    </div>
                    <div class="col-md-3 col-6">
                    <center><a class="nav-l" href="product">Accesories</a></center>
                    </div>
            </div><br>



        <!-- new items -->

        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img src="{{asset('images/picture1.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="{{asset('images/picture2.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="{{asset('images/picture3.jpg')}}" class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <br>


        <!-- offer zone -->

        <section>
            <div class="row">
                <div class="col-md-4 col-6 boxpad">
                    <div class="box2 bgcolor">
                    <center><h4>MONEY BACK</h4></center>
                    <center><p>30 DAY MONEY BACK GUARANTEE</p></center>
                    </div>
                </div>
                <div class="col-md-4 col-6 boxpad">
                    <div class="box2 bgcolor">
                    <center><h4>SPECIAL SALE</h4></center>
                    <center><P>ALL ITEMS UP TO 20% OFF</P></center>
                    </div>
                </div>
                <div class="col-md-4 col-12 boxpad">
                    <div class="box2 bgcolor">
                    <center><h4>FREE SHIPPING</h4></center>
                    <center><p>FREE SHIP-ON ORDER OVER RS:600</p></center>
                    </div>
                </div>
            </div>

        </section><br>


        <!-- mobile slide -->

        <section class="d-none d-md-block bgcolor">

            <h3>Featured</h3>
            <hr>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <div class="row ">
                            <div class=" card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}"
                                style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Redmi note 5 pro</h5>
                                        <h6>Rs:5999</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img src="{{asset('images/productimage/mobile/2/iphone6.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>iphone 6</h5>
                                        <h6>Rs:18500</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img
                                            src="{{asset('images/productimage/mobile/3/mi-redmi-note-4-1.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Mi redmi note4</h5>
                                        <h6>Rs:9999</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img src="{{asset('images/productimage/mobile/4/lenovo-k6.jpeg')}}"
                                style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Lenovo K6</h5>
                                        <h6>Rs:11500</h6>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center> <a href="#"><img
                                            src="{{asset('images/productimage/mobile/5/lenovo-k5-note-pa330010in-1.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Lenovo Vibe</h5>
                                        <h6>Rs:8500</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img
                                            src="{{asset('images/productimage/mobile/6/micromax-canvas-mega-4g-1.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Micromax canvas 2</h5>
                                        <h6>Rs:5900</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img
                                            src="{{asset('images/productimage/mobile/7/samsung-galaxy-on7-sm-1.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Samsung galaxy j6</h5>
                                        <h6>Rs:10500</h6>
                                    </div>
                                </center>
                            </div>
                            <div class="card col-md-3 col-6 d-flex justify-content-center">
                                <center><a href="#"><img
                                            src="{{asset('images/productimage/mobile/8/oppo-a57-na-original-1.jpeg')}}"
                                            style="max-width:100px; max-height:200px;" alt=""></a></center>
                                <center>
                                    <div>
                                        <h5>Oppa A57</h5>
                                        <h6>Rs:10500</h6>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section><br>

        <!-- laptop box -->
        <section>
            <div class="card-group bgcolor">
                <div class="col-md-6 col-12 boxpad">
                    <center><a href="#"><img src="{{asset('images/productimage/laptop/lapimg2.jpg')}}"
                                style="max-width: 30rem; max-height:230px;" class="card-img-top" alt="..."></a></center>
                </div>
                <div class="col-md-6 col-12 boxpad">
                    <center><a href="#"><img src="{{asset('images/productimage/laptop/lapimg.jpg')}}"
                                style="max-width: 30rem; max-height:230px;" class="card-img-top" alt="..."></a></center>
                </div>
            </div>
        </section><br>

        <!-- Laptop -->
        <section class="bgcolor">
            <a href="#">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/laptop/glap.jpg')}}" style="max-width:200px; max-height:150px;"
                                alt=""></a></center>
                    <center>
                        <center>
                            <div class="card-body">
                                <h5 class="card-title">Msi</h5>
                                <p class="card-text"><small class="text-muted">Rs: 98500</small></p>
                            </div>
                        </center>
                </div>
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/laptop/14/lenovo-ideapad-notebook-original-1.jpeg')}}" style="max-width:200px; max-height:150px;" alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Lenovo</h6>
                            <p class="card-text"><small class="text-muted">Rs: 38999</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/laptop/71K7P66CGnL._AC_SY355_.jpg')}}" style="max-width:200px; max-height:150px;"
                                 alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Hp pavallion</h6>
                            <p class="card-text"><small class="text-muted">Rs: 35000</small></p>
                        </div>
                    </center>
                </div>
            </div>
        </section><br>




        <!-- accesories -->
        <section class="bgcolor">
            <a href="#">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/61lnzTv2a0L._AC_SL1000_.jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Sony ZX110A Wired Headset with Mic</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 1800</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/download (3).jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">boAt Rockerz 450 Bluetooth Headset</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 1499</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/download.jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Boult Audio Thunder Bluetooth Headset</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 1299</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/images (3).jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">boAt Rockerz 510 Super Extra Bass Bluetooth Headset</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 1899</small></p>
                        </div>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/images (1).jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Redmi SonicBass Neckband Bluetooth Headset</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 999</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/access/images.jpg')}}"
                            class="card-img-top imghead boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">OnePlus Bullets Wireless Z Bluetooth Headset</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 899</small></p>
                        </div>
                </div>
                </center>
            </div>
        </section><br>



        <!-- tv  -->
        <section class="bgcolor">
            <a href="#">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/tv/samsung.jpg')}}" class="imgtv"
                                alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Sony ZX110A Wired Headset with Mic</h6>
                            <p class="card-text"><span>&#8377;</span> 1800</p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/tv/download.jpg')}}" class="imgtv"
                                alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">boAt Rockerz 450 Bluetooth Headset</h6>
                            <p class="card-text"><span>&#8377;</span> 1499</p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center> <a href="#"><img src="{{asset('images/productimage/tv/realme-tv-32-138421-large-1.jpg')}}"
                                class="imgtv" alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Boult Audio Thunder Bluetooth Headset</h6>
                            <p class="card-text"><span>&#8377;</span> 1299</p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><a href="#"><img src="{{asset('images/productimage/tv/motorolatv.jpeg')}}" class="imgtv"
                                alt=""></a></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">boAt Rockerz 510 Super Extra Bass Bluetooth Headset</h6>
                            <p class="card-text"><span>&#8377;</span> 1899</p>
                        </div>
                </div>
            </div>
        </section><br>
        <!-- Tv box -->
        <section>
            <div class="card-group bgcolor">
                <div class="col-md-6 col-12 boxpad">
                    <center><a href="#"><img src="{{asset('images/black.jpg')}}"
                                style="max-width: 30rem; max-height:230px;" class="card-img-top" alt="..."></a></center>
                </div>
                <div class="col-md-6 col-12 boxpad">
                    <center><a href="#"><img src="{{asset('images/black2.jpg')}}"
                                style="max-width: 30rem; max-height:230px;" class="card-img-top " alt="..."></a>
                    </center>
                </div>
            </div>
        </section><br>

        <!-- Mobile -->
        <section class="bgcolor">
            <a href="#">
                <h5 class="view">VIEW ALL</h5>
            </a>
            <hr>
            <div class="card-group">
                <div class="card">
                    <center><img
                            src="{{asset('images/productimage/mobile/10/133272-v7-vivo-s1-mobile-phone-large-1.jpg')}}"
                            class="card-img-top boxpad imgphn1" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Vivo S1</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 14999</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/mobile/10/71wPwmxo2NL._SL1500_.jpg')}}"
                            class="card-img-top boxpad imgphn1" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Oppo A5 2020</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 15999</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/mobile/10/iphone11.jpg')}}"
                            class="card-img-top imgphn1 boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Iphone 11</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 75000</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img src="{{asset('images/productimage/mobile/10/718assbhZlL._SX679_.jpg')}}"
                            class="card-img-top imgphn1 boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Samsung M10</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 19500</small></p>
                        </div>
                </div>
                <div class="card">
                    <center><img
                            src="{{asset('images/productimage/mobile/10/134177-v9-xiaomi-redmi-k20-mobile-phone-large-1.jpg')}}"
                            class="card-img-top imgphn1 boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">Redmi K20</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 25000</small></p>
                        </div>
                    </center>
                </div>
                <div class="card">
                    <center><img
                            src="{{asset('images/productimage/mobile/10/129877-v7-apple-iphone-xr-mobile-phone-large-1.jpg')}}"
                            class="card-img-top imgphn1 boxpad" alt="..."></center>
                    <center>
                        <div class="card-body">
                            <h6 class="card-title">iphone xr</h6>
                            <p class="card-text"><small class="text-muted"><span>&#8377;</span> 65899</small></p>
                        </div>
                </div>
                </center>
            </div>
        </section><br>



        <!-- brands -->
        <section>
            <h3>
                <center>Our Brands</center>
            </h3>
            <hr>
            <div class="row bgcolor">
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center ">
                    <a href="#" class="nav-link"><img src="{{asset('images/samsung.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/nokia.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/blackberry.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/panasonic.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/sony.jpg')}}"></a>
                </div>
                <div class="col-md-2 col-4 d-flex align-items-center justify-content-center">
                    <a href="#" class="nav-link"><img src="{{asset('images/lenovo.jpg')}}"></a>
                </div>
            </div>
        </section>


        <!-- footer -->
        <div class="text" style="background-color:#3b5998; padding: 60px 0 30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-4">
                        <center>
                            <h6>ABOUT</h6>
                            <ul class="nav-link nav-menu2">
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">ecart stories</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Help</h6>
                            <ul class="nav-link nav-menu2">
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Cancellation and return</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>POLICY</h6>
                            <ul class="nav-link nav-menu2">
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Return policy</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of use</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy </a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Security</a></li>
                            </ul>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Connect with us</h6>
                            <div class="social">
                                <ul class="nav-menu2">
                                    <li><a href="#" class="">Twitter</a></li>
                                    <li><a href="#" class="">Facebook</a></li>
                                    <li><a href="#" class="">Instagram</a></li>
                                </ul>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Mail us</h6>
                        </center>
                    </div>

                    <div class="col-md-2 col-4">
                        <center>
                            <h6>Registered Office Address:</h6>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>