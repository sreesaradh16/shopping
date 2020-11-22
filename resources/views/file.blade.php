<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
function myfunction(){
  maths=30;
  english=30;
  science=80;
  average=(english+maths+science)/3;
  console.log(average)
  if(average>50){
    alert("excelent")
  }
  else if(average>30 && average<50){
    alert("not bad")
  }
  else{
    alert("bad")
  }
}
</script>

<body>
<button onclick="myfunction()" ></button>

</body>
</html>
