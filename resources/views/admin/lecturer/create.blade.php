<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>
    
<div class="container">
    <h1 class=""mt-5>UNIVERSITAS SULAWESI BARAT</h1>
      <form action="{{route('store-lecturer')}}" method="POST">
        @csrf

  <div class="form-group">
    <label for="exampleInputnidn">Nidn</label>
    <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nidn">
   
</div>
   <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="text" name="n
    ame" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama">
      
      
</div>
   <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" placeholder="Enter Address">
      
</div>
  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" name="phone"  class="form-control" id="exampleInputPassword1" placeholder="Enter Phone">
  </div>
  <div class="form-check">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</body>
</html>