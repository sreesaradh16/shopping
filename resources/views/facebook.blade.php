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
        
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" href="{{asset('css/index.js')}}">

    <style>
        .heading {
            width: auto;
            height: 80px;
            background-color: #3b5998;

        }

        .heading1 {
            text-align: center;
            background-color: #3b5998;
        }

        body {
            margin: 0%;
            ;
        }

        .a {
            color: white;
        }

        .logo {
            margin-top: 15px;
        }

        .box {
            width: 90%;
        }

        .btn1 {
            margin-top: 29px;
            background-color: #3b5998;
            color: white;
        }

        .form-control {
            display: inline-block;
            height:33px;
        }
       

        .container-fluid {
            width: 100%;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>

    <script>
        function formvalidation() {
            var email_elt = document.getElementById("email");
            var password_elt = document.getElementById("password");
            var email_msg = document.getElementById("email_msg");
            var password_msg = document.getElementById("password_msg");
            form_status = true;
            if (email_elt.value == '') {
                email_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                email_msg.style.visibility = 'hidden';
            }
            if (password_elt.value == '') {
                password_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                password_msg.style.visibility = 'hidden';
            }
            if (form_status == false) {
                return false;
            }

        }
        function formvalidation1()
        {
            var name_elt = document.getElementById("name");
            var surname_elt = document.getElementById("surname");
            var mob = document.getElementById("mob").value;
            var email1 = document.getElementById("email1");
            var password1 = document.getElementById("password1");
            var gender = document.getElementsByName("gender");
            var name_msg = document.getElementById("name_msg");
            var surname_msg = document.getElementById("surname_msg");
            var mob_msg = document.getElementById("mob_msg");
            var email1_msg = document.getElementById("email1_msg");
            var password1_msg = document.getElementById("password1_msg");
            var gender_msg = document.getElementById("gender_msg");
            form_status = true;
            if(name_elt.value == '')
            {
                name_msg.style.visibility = 'visible';
                name_elt.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                name_msg.style.visibility = 'hidden';
                name_elt.style.borderColor = 'black';
            }
            if(surname_elt.value == '')
            {
                surname_msg.style.visibility = 'visible';
                surname_elt.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                surname_msg.style.visibility = 'hidden';
                surname_elt.style.borderColor = 'black';
            }
            if(mob.length < 10)
            {
                mob_msg.style.visibility = 'visible';
                form_status = false;
            }
            else
            {
                mob_msg.style.visibility = 'hidden';
               
            }
            if(email1.value == '')
            {
                email1_msg.style.visibility = 'visible';
                email1.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                email1_msg.style.visibility = 'hidden';
                email1.style.borderColor = 'black';
            }
            if(password1.value == '')
            {
                password1_msg.style.visibility = 'visible';
                password1.style.borderColor = 'red';
                form_status = false;
            }
            else
            {
                password1_msg.style.visibility = 'hidden';
                password1.style.borderColor = 'black';
            }
            if(gender[0].checked == false && gender[1].checked == false)
            {
                gender_msg.style.visibility = 'visible';
                form_status = false;
            }
            else
            {
                gender_msg.style.visibility = 'hidden';
            }

            if(form_status == false)
            {
                return false;
            }
        }
    </script>

</head>

<body>
    <div class="container-fluid">
        <div class="d-none d-sm-block">
            <div class="heading">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3 logo"><img src="{{asset('images/logo.png')}}" alt=""></div>
                            <div class="col-md-7"></div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="form-group col-md-4" style="font-size: 13px; margin-top: 5px;">
                                    <label style="color: white;" for="email">Email</label>
                                    <input type="email" id="email">
                                    <span id="email_msg" style="color: red; visibility: hidden;">Enter your
                                        email</span>
                                </div>
                                <div class="form-group col-md-4" style="font-size: 13px; margin-top: 5px;">
                                    <label style="color: white;" for="password">Password</label><br>
                                    <input type="password" id="password"><br>
                                    <span id="password_msg" style="color: red; visibility: hidden;">Enter your
                                        password</span>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" value="submit" onclick="return formvalidation()"
                                        class="btn1">login</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div style=" font-size: 20px; width: 450px; margin-top: 80px; color: #3b5998;">Facebook
                                helps you connect and
                                share with the
                                people in your life
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <img src="{{asset('images/connect.png')}}"alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form>
                                <div>
                                    <h2>Create an account</h2>
                                    <h6>It's free and always will be.</h6>
                                </div>
                                <form action="" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" id="name" placeholder="First name">
                                            <span id="name_msg" style="color: red; visibility: hidden;">Enter your 1st name</span>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" id="surname" placeholder="Surname">
                                            <span id="surname_msg" style="color: red; visibility: hidden;">Enter your last name</span>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" id="mob" placeholder="Mobile number">
                                            <span id="mob_msg" style="color: red; visibility: hidden;">Enter your Mobile number</span>
                                        </div>
                                        <div  class="form-group col-md-10">
                                            <input type="text" class="form-control" id="email1" placeholder="Email address">
                                            <span id="email1_msg" style="color: red; visibility: hidden;">Enter your email address</span>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="form-group col-md-10">
                                            <input type="password" class="form-control" id="password1" placeholder="New password">
                                            <span id="password1_msg" style="color: red; visibility: hidden;">Enter your password</span>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1">
                                            <label for="birthday" ; style="max-height: 10px;">Birthday</label>
                                        </div>
                                        <div class="col-md-11"></div>
                                        <div class="col-md-5 dropdown">
                                            <select id="day" name="day">
                                                <option value="day">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">4</option>
                                                <option value="3">5</option>
                                                <option value="3">6</option>
                                                <option value="3">7</option>
                                                <option value="3">8</option>
                                                <option value="3">9</option>
                                                <option value="3">10</option>
                                            </select>
                                            <select id="month" name="month">
                                                <option value="day">Month</option>
                                                <option value="1">jan</option>
                                                <option value="2">feb</option>
                                                <option value="3">mar</option>
                                                <option value="3">apr</option>
                                                <option value="3">may</option>
                                                <option value="3">jun</option>
                                                <option value="3">jul</option>
                                                <option value="3">aug</option>
                                                <option value="3">sep</option>
                                            </select>
                                            <select id="year" name="year">
                                                <option value="day">Year</option>
                                                <option value="1">1997</option>
                                                <option value="2">1998</option>
                                                <option value="3">1999</option>
                                                <option value="3">2000</option>
                                                <option value="3">2001</option>
                                                <option value="3">2002</option>
                                                <option value="3">2003</option>
                                                <option value="3">2004</option>
                                                <option value="3">2005</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" style="font-size: 12px;">why do i
                                                need to provide my date of birth</a>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-8">
                                            <p>
                                                <label for="female">Female</label>
                                                <input type="radio" name="gender" value="male">
                                                <label for="male">Male</label>
                                                <input type="radio" name="gender" value="female">
                                                <span id="gender_msg" style="color: red; visibility: hidden;">Select a gender</span>
                                            </p>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <div style="width: 320px; font-size: 12px;">By clicking create an
                                                account,you
                                                agree to our <a href="#">Terms </a>and confirm that you haveread our <a
                                                    href="#">Data Policy</a>,including our <a href="#">Coockie Use
                                                    policy.</a>
                                                you may recieve SMS massage notification from Facebook and can
                                                opt out at any time</div>
                                        </div>
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                            <button style="background-color:#42b72a;" type="submit" onclick="return formvalidation1()" class="btn btn-success">Create an
                                                account</button>
                                        </div>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 d-block d-sm-none" style="background-color:  #dfe1ee;">
            <div class="heading1 col-xs-12 ">
                <img src="logo.png" alt="">
            </div><br><br><br>
            <div class="form-group" style="text-align: center;">
                <div class="col-xs-12">
                    <input type="text" name="email" id="email" class="form-control" style="width: 90%;"
                        placeholder="Email address or phone number">
                </div>
                <div class="col-xs-12">
                    <input type="password" name="password" id="password" class="form-control" style="width: 90%;"
                        placeholder="password">
                </div>
            </div>
            <div class="col-xs-12" style="text-align: center;">
                <button style="background-color: #3b5998; margin-top: 10px; width: 90%;"
                    class="btn btn-success">Login</button><br><br><br>
            </div>
            <div class="col" style="text-align: center;">
                <button style="background-color: #0d9dd6; width: 50%;" class="btn btn-success ">Create New
                    Account</button>
            </div><br>
            <div class="col-xs-6" style="text-align: center;">
                <a href="">forgot password?</a>
                <a href="">Help Center</a>
            </div>
        </div>
    </div>
</body>

</html>