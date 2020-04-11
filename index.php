<?php 
  session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>test</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/mobile.css">
	<link rel="stylesheet" href="./css/tablet.css">
	<link rel="stylesheet" href="./css/desktop.css">
</head>

<body>

	<div class="main-container">
		<div class="form-container">
			<form action="processInfo.php" method="POST">
	<?php
	if(isset($_SESSION['message'])){
		echo "<span style='color:green'> ".$_SESSION['message']."</span>";
		session_destroy();
	}elseif (isset($_SESSION['error'])) {
		echo "<span style='color:red'> ".$_SESSION['error']."</span>";
		session_destroy();
	} 
	 ?>
				<header>
					<h1>Contact Form</h1>
					<p>Welcome please fill the form correctly</p>
				</header>
				<div class="field-container">
					<div>
						<label>First name</label>
					</div>
					<input class="field" type="text" placeholder="First name" name="fname" required="">
				</div>
				<div class="field-container">
					<div>
						<label>Last name</label>
					</div>
					<input class="field" type="text" placeholder="Last name" name="lname" required="">
				</div>
				<div class="field-container">
					<div>
						<label>Email Address</label>
					</div>
					<input class="field" type="email" placeholder="Email Address" name="email" required="">
				</div>
				<div class="field-container">
					<div>
						<label>Phone Number</label>
					</div>
					<input class="field" type='text' placeholder="Phone Number" name="phone" required>
				</div>
				<div class="field-container select-container">
					<div>
						<label>Gender:</label>
					</div>
					<select class="field " name="gender" required="">
						<div class="option-container">
							<option selected>Click to Select</option>
							<option>Male</option>
							<option>Female</option>
						</div>
					</select>
				</div>
				<div>
					<button class="register-btn value="submit">Submit</button>
				</div>
			</form>

</body>

</html>