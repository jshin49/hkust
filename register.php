<link rel="stylesheet" href="./css/bootstrapp.css">
<link rel="stylesheet" href="./css/bootstrapp.min.css">
<?php include './head.php' ?>
<style>
  .container-fluid {
  height:500px;
  margin-left: 200px;
  margin-right: 200px;
  background: #EFEFEF;
  }
</style>
<?php include './header.php';
      include './db_info.php'; 

	// function newUser() { 
	// 	$userID = $_POST['uid']; 
	// 	$password = $_POST['password']; 
	// 	$SID = $_POST['sid']; 
	// 	$firstName = $_POST['first_name']; 
	// 	$lastName = $_POST['last_name']; 
	// 	$email = $_POST['email'];
	// 	$phone = $_POST['phone'];
	// 	$query = "INSERT INTO members (id, pw, sid, firstname, lastname, email, phone) 
	// 			  VALUES ('$userID', '$password', '$SID', '$firstName', '$lastName', '$email','$phone')"; 
	// 	$data = mysql_query ($query) or die(mysql_error()); 

	// 	if($data) { 
	// 		echo "YOUR REGISTRATION IS COMPLETED..."; 
	// 	} 
	// }

	// function signUp() {
	// 	if (!empty($_POST['uid'])) {
	// 		$query = mysql_query("SELECT * FROM members WHERE userID = '$_POST[uid]' AND password = '$_POST[password]'") or die(mysql_error());

	// 		if(!$row = mysql_fetch_array($query)) {
	// 			newUser();
	// 		}
	// 		else {
	// 			echo "SORRY.. You are already registered";
	// 		}
	// 	}
	// }

	// if(isset($_POST['submit'])) {
	// 	signUp();
	// }
?>
<form class="form-horizontal" action="signup.php" method="post" role="form">
<div class="container-fluid">
  <section class="container">
      <br/>      <br/>      <br/>      <br/>      <br/>
    <div class="container-page">				
      <div class="col-md-6">
	<h3 class="dark-grey">Registration</h3>
	
	<div class="form-group col-lg-6">
	  <label>Your Given Name</label>
	  <input type="" name="first_name" class="form-control" placeholder="Jimmy">
	</div>
	
	<div class="form-group col-lg-6">
	  <label>Your Last Name</label>
	  <input type="" name="last_name" class="form-control" placeholder="Kim">
	</div>

	<div class="form-group col-lg-6">
	  <label>Your Username</label>
	  <input type="" name="uid" class="form-control" placeholder="user123">
	</div>

	<div class="form-group col-lg-6">
	  <label>Student ID</label>
	  <input type="" name="sid" class="form-control" placeholder="20141234">
	</div>
	
	<div class="form-group col-lg-6">
	  <label>Password</label>
	  <input type="password" name="password" class="form-control">
	</div>
	
	<div class="form-group col-lg-6">
	  <label>Confirm Password</label>
	  <input type="password" name="" class="form-control">
	</div>
	
	<div class="form-group col-lg-6">
	  <label>Email Address</label>
	  <input type="" name="email" class="form-control" placeholder="example@ust.hk">
	</div>
	
	<div class="form-group col-lg-6">
	  <label>Contact Number</label>
	  <input type="" name="phone" class="form-control" placeholder="12345678">
	</div>			

      </div>
      
      <div class="col-md-6">
	<h3 class="dark-grey">Terms and Conditions</h3><br/>
	<p>
	  By clicking on "Register" you agree to Malcha's Terms and Conditions
	</p>
	<p>
	  While rare, prices are subject to change based on exchange rate fluctuations - 
	  should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
	</p>
	<p>
	  Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
	</p>
	<p>
	  Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
	</p>
	<br/>
	<input type="submit" class="btn btn-primary" value="Register">
      </div>
    </div>
  </section>
</div>
</form>
<?php include './footer.php' ?>
