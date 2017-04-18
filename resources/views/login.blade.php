<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
.wrapper {    
	margin-top: 80px;
	margin-bottom: 20px;
   
}
.form-signin {
  max-width: 500px;
 padding: 25px 50px 75px;
  margin: 0 auto;
   background-color:#24b662;
  border: 5px solid rgba(0,0,0,0.1);  
  }
.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
  font-family:Georgia;
  font-size: 30px
}
.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}
input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

body{background:url("images/images7.jpg"); 
background-repeat: no-repeat;
background-size: cover;
 z-index: -1;



}
a{color:black}

    </style>
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}">
</head>
<body>
 <a href="/index">
  <img src="images/close.png" align="right" alt="close" style="width:42px;height:42px;border:0;">
</a>    
<div class = "container">
   
	<div class="wrapper">
		<form action="../../app/http/controllers/login.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Students!!<br/><br/> Please Login</h3>
			 
			  <div align="center">
			  <input type="text" class="form-control" name="email" placeholder="Email" required autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required/>   </br>  	</div>	  
			 
			<div align="center">  <button class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll"  name="Submit" value="Login" id="logB" type="Submit">Login</button>  	</div>	
            	 <a href="/signup"><p style="text-align: center" >Don't Have An Account? Then click here to sign up</p></a>

               <a href="/index"><p style="text-align: center" >Don't Want To Login? That's okay. Go Anonymous! <br> <b>Anonymous viewers cannot access project files</b></p></a>
		</form>			
	</div>
</div>


</body>
        </html>
