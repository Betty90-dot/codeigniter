//exam form.php

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url();?>main/insertvalue" method="post">
		<input type="text" name="fname" placeholder="first name"><br><br>
		<input type="text" name="lname" placeholder="last name"><br><br>
		<input type="text" name="uname" placeholder="user name"><br><br>
		<input type="password" name="pass" placeholder="password"><br><br>
		<input type="text" name="mobile" placeholder="mobile no"><br><br>
		<input type="email" name="email" placeholder="email"><br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>