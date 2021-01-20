<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shopping for Mobiles and Laptops</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        body
        {
            background-image: url('C:/Users/DELL/Desktop/Laravel/project/public/images/background.jpg');
        }
        
    </style>

    <script type="text/javascript">
        function regval() {
            var name_elt = document.getElementById("name");
            var lname_elt = document.getElementById("lname");
            var mobile = document.getElementById("mobile").value;
            var username = document.getElementById("username");
            var password = document.getElementById("password");
            var cpassword = document.getElementById("cpassword");
            var name_msg = document.getElementById("name_msg");
            var m_msg = document.getElementById("mobile_msg");
            var username_msg = document.getElementById("username_msg");
            var p_msg = document.getElementById("password_msg");
            var cp_msg = document.getElementById("cpassword_msg");
            form_status = true;

            if (name_elt.value == '' || lname_elt.value == '') {
                name_msg.style.visibility = 'visible';
                name_elt.style.borderColor = 'red';
                lname_elt.style.borderColor = 'red';
                form_status = false;
            }
            else {
                name_elt.style.borderColor = 'black';
                lname_elt.style.borderColor = 'black';
                name_msg.style.visibility = 'hidden';
            }
            if (mobile.length < 10) {
                m_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                m_msg.style.visibility = 'hidden';

            }
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
                email_msg.style.visibility = 'hidden';
                email.style.borderColor = 'black';
            }
            else {
                email_msg.style.visibility = 'visible';
                email.style.borderColor = 'red';
                form_status = false;
            }

            if (password.length < 5) {
                password.style.borderColor = 'black';
                p_msg.style.visibility = 'hidden';
            }
            else {
                p_msg.style.visibility = 'visible';
                password.style.borderColor = 'red';
                form_status = false;
            }
            if (cpassword == '' || cpassword == password) {
                cp_msg.style.visibility = 'hidden';
                cpassword.style.borderColor = 'black';
            }
            else {
                cp_msg.style.visibility = 'visible';
                cpassword.style.borderColor = 'red';
                form_status = false;
            }
            if (form_status == false) {
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{url('login1/')}}">
                    {{csrf_field()}}<br>
                    <center><h3>LOGIN</h3></center><hr><br>
                    <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-7">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4 col-12">
                            <button type="submit" id="btn5" class="btn btn-success">Login</button>
                        </div>
                        <div class="col-md-3">
                            <a href="">Forgot password??</a>
                        </div>
                        
                    </div>
                </form>
                <br><br><br><br><br><br><br><br><br><br>
                <a href="index"><i style="padding:10px 15px" class="fa fa-home fa-2x"></i></a>
            </div>
            <div class="col-md-6">
                <form action="{{url('index')}}" method="post">
                    {{csrf_field()}}
                    <br>
                    <center>
                        <h3>REGISTRATION</h3>
                        <hr>
                    </center><br>
                    <div class="form-row">
                        <div class="col-md-2 "></div>
                        <div class="col-md-4 col-6">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                        <div class="col-md-4 col-6">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-6 col-12">
                            <span id="name_msg" class="msg" style="visibility: hidden;">Enter your full name</span>
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-12 ">
                            <input type="text" class="form-control" id="mobile" name="contact" placeholder="Mobile Number">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-6 col-12">
                            <span id="mobile_msg" class="msg" style="visibility: hidden;">Minimum 10 digits requirerd</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="username" name="username" placeholder=" User Name">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <span id="username_msg" class="msg" style="visibility: hidden;">User_name</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <span id="password_msg" class="msg" style="visibility: hidden;">Must have 5 letters</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="cpassword" name="confirmpassword" placeholder="Confirm Password">
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <span id="cpassword_msg" class="msg" style="visibility: hidden;">Password does not match</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary " style="width:100%;" value="Register"
                                onclick="return regval()">
                        </div><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>