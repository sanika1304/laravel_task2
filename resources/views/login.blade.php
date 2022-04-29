<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>



<body>
  <div class="container">
<div class="card" style="background-color:#3090C7;  border-color: transparent;">
<h2 style="text-align:center; font-weight:bold; margin-top:20px; font-size:28px;">Login</h2>
<!-- form  -->
<form action="addlogin" method="POST">

@if(session('logmessage'))
<div class="alert alert-danger">{{session('logmessage')}}</div>
@endif





@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{($error)}}</div>
@endforeach
@endif





    @csrf





<input type="email" class="input-box" name="email" placeholder="Enter your Email Id" required>


<input type="password" class="input-box" name="password" placeholder="password" required>
<!-- <span class="text-danger">@error('password') {{$message}}@enderror</span> -->



<button type="submit" class="submit">Submit</button>


<p style="text-align: center; color: #343434; font-weight: 500; margin-top: 40px;">Don't have an acount <br>Register Here</p>
<a href="http://127.0.0.1:8000/register"><button type="button" class="btn">Don't have an account</button></a>
</div>



</form>

</div>
</div>

</div>







</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>