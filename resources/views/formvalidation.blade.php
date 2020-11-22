<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="C:\Users\DELL\Desktop\Assignment\bootstrap-4.5.2-dist\css\bootstrap.min.css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <style>
        .form {
            margin-left: 400px;
            border: 2px solid black;
            width: 500px;
            height: 600px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: rgb(212, 208, 208);

        }

        .box {
            width: 100%;
        }
    </style>
    <script type="text/javascript">

        function regform() {
            var name_elt = document.getElementById("name");
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var address = document.getElementById("address");
            var contact_elt = document.getElementById("contact").value;
            var gender = document.getElementsByName("gender");
            var language = document.getElementsByClassName("language");
            var username_msg = document.getElementById("name_msg");
            var email_msg = document.getElementById("email_msg");
            var password_msg = document.getElementById("password_msg");
            var address_msg = document.getElementById("address_msg");
            var contact_msg = document.getElementById("contact_msg");
            var gender_msg = document.getElementById("gender_msg");
            var language_label = document.getElementsByClassName("lan");
            form_status = true;

            if (name_elt.value == '') {
                username_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                username_msg.style.visibility = 'hidden';
            }
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
            {
                email_msg.style.visibility = 'hidden';
            }
            else {
                email_msg.style.visibility = 'visible';
                form_status = false;
            }
            if (password.length < 5) {
                password_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                password_msg.style.visibility = 'hidden';
            }
            if (contact_elt.length < 10) {
                contact_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                contact_msg.style.visibility = 'hidden';
            }
            if (gender[0].checked == false && gender[1].checked == false) {
                gender_msg.style.visibility = 'visible';
                form_status = false;
            }
            else {
                gender_msg.style.visibility = 'hidden';
            }

            if (language[0].checked == true || language[1].checked == true || language[2].checked == true) {
                language_label[0].style.color = 'black';
                language_label[1].style.color = 'black';
                language_label[2].style.color = 'black';
            }
            else {
                language_label[0].style.color = 'red';
                language_label[1].style.color = 'red';
                language_label[2].style.color = 'red';
                form_status = false;
            }

            if (form_status == false) 
            {
                return false;
            }

        }


    </script>
</head>

<body>
    <div class="form">
        <form action="" method="POST">
            <center>
                <h1>registration form</h1>
            </center>
            <label>Name</label><br>
            <input type="text" id="name" class="box" placeholder="Enter username">
            <br>
            <span id="name_msg" style="color: red; visibility: hidden;">Please enter username</span>
            <br>
            <label>Email</label><br>
            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                title="invalid email" class="box" placeholder="Enter email">
            <br>
            <span id="email_msg" style="color: red; visibility: hidden;">input email in correct pattern</span>
            <br>
            <label>Password</label><br>
            <input type="password" name="" id="password" class="box" placeholder="Enter password">
            <br>
            <span id="password_msg" style="color: red; visibility: hidden;">Min 5 charachter required</span>
            <br>
            <label>Address</label><br>
            <input type="text" name="" id="address_msg" class="box">
            <br>
            <label>Contact number</label><br>
            <input type="text" id="contact" class="box" placeholder="Enter phone number">
            <br>
            <span id="contact_msg" style="color: red; visibility: hidden;">Atleast 10 digit</span>
            <br>
            <label>Gender</label>
            <input type="radio" name="gender" value="male"><label>Male</label>
            <input type="radio" name="gender" value="female"><label>Female</label>
            <span id="gender_msg" style="color: red; visibility: hidden; font-size: 12px;">choose gender</span>
            <br>
            <label>Language Known</label>
            <input type="checkbox" class="language"><label class="lan">English</label>
            <input type="checkbox" class="language"><label class="lan">Hindi</label>
            <input type="checkbox" class="language"><label class="lan">Malayalam</label>
            <br>
            <center><input type="submit" class="btn btn-primary " value="submit" onclick="return regform()"></center>
        </form>
    </div>
</body>

</html>