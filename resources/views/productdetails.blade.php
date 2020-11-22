<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">

</head>

<body>
    <div class="container-fluid">

               <!-- nav bar -->

               <header id="header" class="top-fixed">
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

                        <div id="id01" class="modal">

                            <form class="modal-content animate" action="/action_page.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">&times;</span>
                                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                                </div>

                                <div class="container">
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <button type="submit">Login</button>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>

                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                                </div>
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

        <nav class="navbar navbar-expand-lg nav-bcolor">
            <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-l" href="mobile">Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-l" href="#">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-l" href="#">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-l" href="#">Accesories</a>
                    </li>
                </ul>
            </div>
        </nav><br>


			<div class="row">
				<div class="col-md-4">
				        <div class="col-md-12">
                            <center>><img src="{{asset('images/productimage/mobile/1/mi-redmi3.jpeg')}}" class="card-img imgproduct" alt="..."></center>
                        </div>
				</div>
				<div class="col-md-6">
				<div class="card-body font1">
                        <h5 class="card-title">Poco M2(Pitch Black,64GB)</h5>
                        <span class="fa fa-star checked"></span>
                    	<span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
					    <h4>Rs 99000</h4>
                        <p>No cost EMI</p>
                        <p>Delivery by <span class="del">Sunday, Nov15</span></p>
                        <p> <span class="del"> Warrenty </span>1 Year for Handset, 6 Months for Accesories</p>
                        <div>
                            <h5>Highlights</h5>
                            <ul>
                            <li>3GB RAM | 32GB ROM | Expandable UPTO 256GB</li>
                            <li>16.5 cm(6.5 inch)HD+ Display</li>
                            <li>12MP + 2MP + 6MP | 8MP Front Camera </li>
                            <li>5000 mAh Lithium-ion Battery</li>
                            <li>Quadcomm Snapdragon 665 Processor</li>
                            </ul>
                        </div>
                        <button id="btn3">ADD TO CART</button>
                        <a href="checkout"><button id="btn4">BUY NOW</button></a>
                        
				</div>
			</div>

    </div>
</body>

</html>