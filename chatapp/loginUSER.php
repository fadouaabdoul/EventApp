<?php include('dataLogin.php') ?>
<style>
  <?php include 'main.css'; ?>
  <?php include 'log-sign.css'; ?>
</style> 

<html>  
    <head>  
        <title>LOGIN</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
    <div id="wrapper">
    <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h2><a href="index.html">SDGsCHAT</a></h2>
      </div>
</div>
</div>
        <div class="container">
   <br />
   
   <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left" align="center">
  
      <h3>USER LOGIN</h3>
</div>
<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="user/home.php" method="post" class="login-form">
			                    	<div class="form-group">
     
      <p class="text-danger"><?php echo $message; ?></p>
      <label class="sr-only" for="form-username">Enter Username</label>
      <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
			                        	<label class="sr-only" for="form-password">Enter Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Login !</button>
			                    </form>
		                    </div>
                        </div>
</div>
<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login" align="center">
                        <a href="registerUser.php"><h5>DON'T HAVE AN ACCOUNT? REGISTER HERE..</h5></a>
       
     </form>
    </div>
   </div>
  </div>
    </body>  
</html>
