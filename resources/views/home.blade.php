<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <style>
        .nav-menu ul li {
            position: relative;
            white-space: nowrap;
            padding: 10px 0 10px 28px;
            list-style-type: none;
        }

        .nav-menu ul {
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
            align-items: center !important;
        }

        .d-flex {
            display: flex !important;
        }

        .nav-menu2 {
            position: relative;
            white-space: nowrap;
            padding: 10px 0 10px 0px;
            list-style-type: none;
        }

        .social {
            list-style-type: disc;
        }

        .top {
            height: 100px;
        }

        .imgtv {
            max-width: 282px;
            max-height: 176px;
        }

        .imghead {
            max-height: 200px;
            max-width: 200px;
        }

        .boxpad {
            padding: 5px 5px 5px 5px;
        }

        .view {
            text-decoration: none;
            text-align: right;
            padding-right: 30px;

        }

        a:hover {
            text-decoration: none;
        }

        li a {
            color: white;
        }

        .imgphn1 {
            max-width: 100px;
            max-height: 200px;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
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

        .button2 {
            padding-left: 300px;
        }

        #btn1 {
            background-color: #4e71ba;
            color: white;
            border: none;
            cursor: pointer;
            width: 95%;
        }

        #btn3 {
            background-color: red;
            color: white;
            padding: 5px 20px;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        #btn4 {
            background-color: green;
            color: white;
            padding: 5px 20px;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        #btn5 {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        .btn6 {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            width: 50%;
        }

        .carousel-control-next,
        .carousel-control-prev {
            width: 8%;
        }

        }

        .btn7 {
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
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 6px;
            top: 0;
            width: 99%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            padding: 0px 20px 30px 20px;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 2px solid #888;
            width: 30%;
            /* Could be more or less, depending on screen size */
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
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
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

        .imgphnbox {
            max-width: 100px;
            max-height: 200px;
        }

        .imgproduct {
            max-width: 300px;
            max-height: 500px;
        }

        .boxpad2 {
            padding: 35px 10px 10px 10px;
        }

        .checked {
            color: orange;
        }

        .font1 {
            font-family: Roboto, Arial, sans-serif;
            font-weight: normal;
        }

        .del {
            font-weight: bold;
        }

        .lineh {
            line-height: 60%;
        }

        body {
            background-color: rgb(250, 240, 240);
        }

        .text {
            color: white;
            font-size: 14px;
        }

        .nav-bcolor {
            background-color: lightseagreen;
        }

        .card {
            border: none;
        }

        .header {
            background-color: #4e71ba;
            transition: all 0.5s;
            z-index: 997;
            padding: 10px 0;
        }

        .bgcolor {
            background-color: white;
            padding: 20px 20px 20px 20px;
        }

        .nav-l {
            color: white;
            font-size: 20px;
        }

        .box {
            width: 200px;
            height: 300px;
            border: 2px solid black;
        }

        .box2 {
            border: 2px cadetblue double;
            text-align: center;
        }

        #menu1 {
            background-color: #2CBDBB;
        }
    </style>

</head>

<body>
    <div class="container-fluid">

        <!-- nav bar -->

        <header class="top-fixed header">
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
                        <li class="nav-item">
                            <a class="nav-link" href="index" style="font-size:20px"><i
                                    class="fa fa-fw fa-home"></i>Home</a>
                        </li>

                        <li class="nav-item active dropdown">
                            @if(session()->has('user_id'))
                            <a class="nav-link dropdown-toggle" href="logout" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" name="login"
                                style="padding-right:20px; font-size:20px;"><i class="fa fa-fw fa-user"></i>
                                <p>{{session('user_id')}}</p>
                            </a>

                            <ul class="dropdown-menu" id="navbarDropdown" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout">Logout</a></li>
                            </ul>
                            @else
                            <a class="nav-link" href="login" name="login" style="padding-right:20px; font-size:20px;"><i
                                    class="fa fa-fw fa-user"></i>
                                <p>Login</p>
                            </a>
                            @endif
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="cart" style="font-size:20px"><i class="fa"></i> Cart</a>
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



</body>

</html>