@extends('admin')
@section('content')
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
        body {
            font-family: 'Open Sans', Arial, sans-serif;
        }

        #heading3 {
            width: 100%;
            height: 70px;
            background-color: white;
        }

        .widget-menu {

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            overflow: hidden;
        }

        ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 10px;
            margin-inline-end: 10px;
            padding-inline-start: 10px;
            padding-inline-end: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .widget-menu>li>a {
            background-color: #2d2b32;
            color: white;
        }

        .widget-menu a {
            color: #555;
            display: block;
            line-height: 20px;
            padding: 15px;
            text-decoration: none !important;
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <form class="form-horizontal row-fluid" method="post" action="{{url('insertproduct')}}" enctype="multipart/form-data" >
    {{csrf_field()}}
        <div class="control-group">
            <label class="control-label" name="category" for="basicinput">Category</label>
            <div class="controls">
                <select name="category" class="span8 tip" onChange="getSubcat(this.value);" >
                    <option value="">Select Category</option>
                    <option value="mobile">Banner</option>
                    <option value="laptop">Offers</option>
                    <option value="tv">TV banner</option>
                    <option value="accesories">Mobile Banner</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput">Product Image1</label>
            <div class="controls">
                <input type="file" name="upload1">
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="basicinput">Product Image2</label>
            <div class="controls">
                <input type="file" name="upload2" class="span8 tip" >
            </div>
        </div>



        <div class="control-group">
            <label class="control-label" for="basicinput">Product Image3</label>
            <div class="controls">
                <input type="file" name="upload3" class="span8 tip">
            </div>
        </div><br>

        <div class="control-group">
            <div class="controls">
                <input type="submit" value="submit" class="btn btn-primary">
                <p>{{session('success')}}</p>
            </div>
        </div>
        <br><br><br><br><br>
    </form>
</body>

</html>
@endsection