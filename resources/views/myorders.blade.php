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
    
</head>
<body>
    <div class="container-fluid">
        <div class="form-row">
            <div class="col-md-12">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                     <tr>
                        <th>Product Name</th>
                        <th>Company Name</th>
                        <th>Product Price</th>
                        <th>Delivery Date</th>
                        <th>Action</th>

                    </tr>
                    @foreach($data as $Data1)
                     <tr>
                        <td>{{$Data1->name}}</td>
                        <td>{{$Data1->name}}</td>
                        <td>{{$Data1->email}}</td>
                        <td>nil</td>                 
                        <td><a onclick="return confirm('are you sure')" href="{{url('deleteorder/'.$Data1->id)}}">delete</a></td>
                    </tr>
                           
                    @endforeach
                </table>
            </div>
        </div>                
    </div>
</body>
</html>
