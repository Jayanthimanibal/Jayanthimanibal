<html>
<body>
<center>
<form action="" method="GET">
<fieldset>
<legend> Sign Up</legend>
First Name:-
<input type="text" name="fname"><br><br>
Last Name:-
<input type="text" name="lname"><br><br>
Email :-
<input type="email" name="email"><br><br>
Contact:-
<input type="Number" name="number"><br><br>
Password
<input type="password" name="password"><br><br>
<input type="submit" value="Sign Up" name="submit"><br><br>
</fieldset >
</form>
</center>
</body>
</html>

<?php
include("config.php");
if(isset($_GET['submit']))
{
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$email = $_GET['email'];
	$number = $_GET['number'];
	$password = $_GET['password'];
	$result = mysqli_query($conn,"insert into user values('$fname','$lname','$email','$number','$password')");
	if($result)
	{
		echo "Registered Successfully";
	}
	else{
		
    echo "Error: " . mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>


