
<style>
  <?php include 'main.css'; ?>
<?php include 'log-sign.css' ?>
</style> 

<html>  
    <head>  
        <title>REGISTER</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <!--for making a responsive page -->
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
<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left" align="center">
      <h3>ADMIN REGISTRATION</h3>
</div>
<div class="form-top-right">
<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
	 <form role="form" action="data.php" method="post" class="login-form">
			                    	<div class="form-group">

      <div class="form-group">
       <label for="form-username">Enter Username</label>
       <input type="text" name="username" class="form-control" autocomplete="off" placeholder=" Sam ">
</div> 
</div> 
<div class="form-group">
       <label for="form-password">Enter Email</label>
       <input type="email" name="email" class="form-control" autocomplete="off" placeholder=" exemple@exemple.com " />
      </div>
      <div class="form-group">
       <label for="form-password">Enter Password</label>
       <input type="password" name="password" class="form-control" autocomplete="off" placeholder=" ******** " />
      </div>
      <div class="form-group">
       <label  for="form-password">Re-enter Password</label>
       <input type="password" name="confirm_password" class="form-control" autocomplete="off" placeholder=" ******** "/>
      </div>
      <div class="form-group">
       <label >Birthday</label>
       <input type="date" name="birth" class="form-control" />
      </div>
      <div class="form-group">
       <label >Phone Number </label>
       <input type="tel" name="phone" class="form-control" autocomplete="off" placeholder="(XXX) 555-0123" />
      </div>
      <div class="form-group">
       <label >Country</label>
       <input type="text" name="country" class="form-control" autocomplete="off" placeholder=" Morocco " />
      </div> 

      <div align="center" class="form-group"><br>
      <button type="submit" class="btn">Register !</button>
      </div>
      <div align="center">
       <a href="login.php">Go back to login </a>
      </div>
      </div>
      
     </form>
    </div>
   </div>
  </div>
    </body>  
</html>
