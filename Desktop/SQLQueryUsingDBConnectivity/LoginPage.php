<html>
<head>
	<title>Untitled</title>
</head>
<body>
<form method="post" action="">
	<table width="600px" style="font-family:arial; font-size:13px;">
	<tr>
		<td colspan="2" style="background-color:maroon; color:white;">
			Login Window
		</td>
	</tr>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="t1" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="t2" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Login" /></td>
	</tr>
	</table>
</form>
	<?php
		if(isset($_POST["t1"]) && isset($_POST["t2"]))
		{
			session_start(); 
			require("dbconnect.php");                   
			$un=$_POST["t1"];   //variable that stores username
			$pw=$_POST["t2"];   //variable that stores password
			$sql=mysql_query("select * from users where username='$un' and password='$pw'");
			$count = mysql_num_rows($sql);
			if($count==1)
			{
				$_SESSION["UserName"]=$un;  
				header("location:DatabaseConnectivitySearch.php"); 
			}
			else
				echo "Invalid User Name or password...";
		}
	?>

</body>
</html>
