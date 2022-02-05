<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="row">
    <div class="container">
      <!-- <div class="col-md-12"> -->
<!-- <div class="container mt-3"> -->
 <center> <h2>product  details...... </h2>

  <div class="card bg-danger col-md-12" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">id : {{$products[app('request')->input('id') -1][0]}}   </h4>
      <h4 class="card-title">name : {{$products[ app('request')->input('id') -1][1]}}</h4>
      <h4 class="card-title">price :{{$products[ app('request')->input('id') -1][2]}} </h4>

      <a href=" {{url ('/home') }}" class="btn btn-primary">Back to Home </a>
    </div>
  </div>
  <br>

  

 
 


  
  
</center>
</div>
</div>

</body>
</html>
