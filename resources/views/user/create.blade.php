<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>e-livraison</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!--<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->c
    <script src="sweetalert2.all.min.js"></script>

    
  

  </head>
  <body> 
 
 
   
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
                
            <header class="text-center">
	          <div class="square"></div>
	          <p style="color:black"><h1>APP-LIV</h1></p>
	        </header>
            <!--<center><h2>Cette page concerne les clients</h2></center>-->
            </nav> 
          </div>
        </div>
       
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">

<center><h2 class="margin-bottom-10">Sing Up</h2></center>
<hr>
@if (session()->has("success_message"))
  <div class="alert alert-success text-center">
    {{session()->get('success_message')}}
  </div>
@endif
<form action="{{route('registration')}}" method="post">
    @method("POST")
    @csrf
  <div class="row form-group">
    <div class=" col-md-6 form-group">                  
        <label for="inputLastName">First Name</label>
        <input type="text" name="first_name" class="form-control" id="inputLastName" value="{{ old('first_name') }}" placeholder="Enter your first name">                  
    </div> 
  
 
    <div class="col-lg-6 col-md-6 form-group">                  
        <label for="inputUsername">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="inputUsername" value="{{ old('last_name') }}" placeholder="Enter your last name">                  
    </div>
    <div class="col-lg-6 col-md-6 form-group">                  
      <label for="inputUsername">Type Of User</label>
      <select class="form-control" name="type_of_user">
        <option value="Client">Client</option>
        <option value="Deliveryman">Deliveryman</option>
      </select>

    </div>
    <div class="col-lg-6 col-md-6 form-group">                  
      <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="inputEmail" placeholder="Example@gmail.com" >                  
    </div> 

 
    <div class=" col-md-6 form-group">                  
        <label for="inputCurrentPassword">Password</label>
        <input type="password" name="password" class="form-control " id="inputCurrentPassword">                 
    </div>  
    
    <div class=" col-md-6 form-group">                  
        <label for="inputCurrentPassword"> Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control " id="inputCurrentPassword">                 
    </div>                

 
           
      <center>  <input type="submit" value="SignUp" name="envoi" class="btn btn-primary" style="padding: 7px 50px; border-radius:4px; margin-right:5px;"  />
      
       <a href="" class="btn btn-danger" style="padding-left: 50px; padding-right: 50px; margin-left:5px; " >Cancel</a>
      
      </center>
    </form>
</div>
<center>Have an account already? <a href="{{route('login')}}">Login</a> </center>
</div>
</div>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
<script>


</script>
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
</body>
</html>
