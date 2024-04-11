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
        Visual Admin Template
        https://templatemo.com/tm-455-visual-admin
        -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <a href="#" style="color:black"><h1>APP-LIV&nbsp</h1></a><div class="square"></div>

	        </header>
			@if (session()->has("success_message"))
				<div class="alert alert-danger text-center">
					{{session()->get('success_message')}}
				</div>
			@endif

	        <form action="{{route('connection')}}" class="templatemo-login-form" method="POST">
                @method("POST")
                @csrf
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="email" name="email" class="form-control" placeholder="Example@gmail.com">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
						  <input type="password" name="password" class="form-control" placeholder="***********">  
						 
		          	</div>	
				</div>
					          	
	          
				<div class="form-group">
					<button type="submit" name="connect" class="templatemo-blue-button width-100">Login</button>
					
				</div>

				<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p><strong><a href="" class="blue-text">Password forgotten?</a></strong></p>
			<p><strong><br><a href="{{route('register')}}" class="blue-text">Sign Up</a></strong></p>

		</div>

					
	        </form>
		
		</div>
		

		
	</body>
</html>