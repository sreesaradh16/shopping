@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online shopping for Mobiles and Laptops</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.js')}}">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color-01.css')}}">

    <style>
        * {
            box-sizing: border-box;
        }

        .zoom {
            padding: 50px;
            transition: transform .2s;
            max-width: 150px;
            max-height: 300px;
            margin: 0 auto;
        }

        .zoom:hover {
            -ms-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        ul li a:hover {
            color: red;
        }

        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
            color:red;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 20%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
        .containerhead{
            background-color:black;
        }
        .menu-item{
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
        }
    </style>

</head>


<body>
    <div class="container-fluid">
    <div class="nav-section header-sticky">
					

					<div class="primary-nav-section" >
						<div class="containerhead">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="shop.html" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="cart.html" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>								
							</ul>
						</div>
					</div>
				</div>
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="index" style="color:black;" class="link">home</a></li>
                <li class="item-link"><span>/ Product details</span></li>
            </ul>
        </div>
        <div class="form-row">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            @foreach($data as $Data1)
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="gallery">
                        <div class="container">
                            <div class="mySlides">
                                <div class="numbertext">1 / 6</div>
                               <center> <img src="/storage/profile/{{$Data1->image1}}" style="width:50%"></center>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 6</div>
                                <center><img src="/storage/profile/{{$Data1->image2}}" style="width:50%"></center>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 6</div>
                                <center><img src="/storage/profile/{{$Data1->image3}}" style="width:50%"></center>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 6</div>
                                <center><img src="/storage/profile/{{$Data1->image1}}" style="width:50%"></center>
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">5 / 6</div>
                                <center><img src="/storage/profile/{{$Data1->image2}}" style="width:50%"></center>
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="/storage/profile/{{$Data1->image1}}" style="width:80%"
                                        onclick="currentSlide(1)" >
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="/storage/profile/{{$Data1->image2}}" style="width:80%"
                                        onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="/storage/profile/{{$Data1->image3}}" style="width:80%"
                                        onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="/storage/profile/{{$Data1->image1}}" style="width:80%"
                                        onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="/storage/profile/{{$Data1->image2}}" style="width:80%"
                                        onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>

                            </div>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                                showSlides(slideIndex += n);
                            }

                            function currentSlide(n) {
                                showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("demo");
                                var captionText = document.getElementById("caption");
                                if (n > slides.length) { slideIndex = 1 }
                                if (n < 1) { slideIndex = slides.length }
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                captionText.innerHTML = dots[slideIndex - 1].alt;
                            }
                        </script>

                    </div>
                </div>
                <div class="detail-info">
                    <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <a href="#" class="count-review">(05 review)</a>
                    </div>
                    <h2 class="product-name">{{$Data1->name}}</h2>
                    <div class="short-desc">
                        <ul>
                            <li>{{$Data1->description}}</li>
                            <li>{{$Data1->description}}</li>
                            <li>{{$Data1->description}}</li>
                        </ul>
                    </div>
                    <div class="wrap-social">
                        <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                    </div>
                    <div class="wrap-price"><span class="product-price">{{$Data1->price}}</span></div>
                    <div class="stock-info in-stock">
                        <p class="availability">Availability: <b>In Stock</b></p>
                    </div>
                    <div class="quantity">
                        <span>Quantity:</span>
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="5" pattern="[0-9]*">

                            <a class="btn btn-reduce" href="#"></a>
                            <a class="btn btn-increase" href="#"></a>
                        </div>
                    </div>
                    <div class="wrap-butons">
                        <a href="cart" class="btn add-to-cart">Add to Cart</a>
                    </div>
                </div>
                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#" class="tab-control-item active">description</a>
                        
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                            <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, a t
                                everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne cum falli dolor
                                voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
                            <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere
                                expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis
                                accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an nominavi, et
                                stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu
                                putent habemus voluptua sit, sit cu rationibus scripserit, modus taria . </p>
                            <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem tatibus mea.
                                Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex per.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Oder Over $99</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>
							</ul>
                        </div>
					</div>
		</div><!-- Categories widget-->
        </div>
	        
    
    
        <footer id="footer">
	    <div class="wrap-footer-content footer-style-1">
            <div class="wrap-function-info">
	            <div class="container">
	                <ul>
	                    <li class="fc-info-item">
	                        <i class="fa fa-truck" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Free Shipping</h4>
	                            <p class="fc-desc">Free On Oder Over $99</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-recycle" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Guarantee</h4>
	                            <p class="fc-desc">30 Days Money Back</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Safe Payment</h4>
	                            <p class="fc-desc">Safe your online payment</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-life-ring" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Online Suport</h4>
	                            <p class="fc-desc">We Have Support 24/7</p>
	                        </div>

	                    </li>
	                </ul>
	            </div>
	        </div>
        </div>
        </footer>
    </div>
</body>

</html>
@endsection