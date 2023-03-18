<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
 


<script>






function functionToExecute() {

  
  alert("Order confirmed");
  header("location:index.php");
  
  
}</script>





<body class="hold-transition register-page">
 
<div class="register-box">

  	
  	<div class="register-box-body">
    	<p class="login-box-msg">Cash on Dilivery</p>

    	<!--<form action="register.php" method="POST">-->
        <form>

          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="address_l1" class="form-control" name="address_l1" placeholder="Address Line 1" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="address_l2" class="form-control" name="address_l2" placeholder="Address Line 2" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="address_l3" class="form-control" name="address_l3" placeholder="Address Line 3" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="phone" class="form-control" name="phone" placeholder="Phone Number" required>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>
          
          <hr>
            
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" onclick="functionToExecute()">Confirm</button>
                </div>
                
      		</div>
            
    
    	</form>
      <br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>