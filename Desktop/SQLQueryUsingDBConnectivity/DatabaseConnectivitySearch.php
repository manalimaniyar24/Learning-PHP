<html>
<head>
	<title>Untitled</title>
</head>

<body>
<div style="font-family:arial;font-size:20px; color:rgb(255,0,0)">
	<hr style="color:maroon;" />
	<?php
	session_start();
	if($_SESSION["UserName"]==null) NOTE:means not Logged In.
	{
		header("location:LoginPage.php"); 
	}
	echo "Welcome ".$_SESSION["UserName"];
	?>
	<hr style="color:maroon;" />
</div>
<div style="font-family:arial;font-size:20px; color:rgb(255,0,0)">
	Students Details
</div>
<form method="post" action="">
	Enter ID <input type="text" name="t1" /><input type="submit" value="Search" />
<hr style="color:rgb(0,255,0)" />
<?php
	if(isset($_POST["t1"]))
	{
	require("dbconnect.php");
	$n=$_POST["t1"]; //this variable stored ID
	$rs=mysql_query("select * from employee where ID='$n'"); 
	?>
	<table width="500px" border="1">
		<tr style="background-color:maroon; color:white">
			<td>ID</td><td>Name</td><td>Address</td>
		</tr>
	<?php
	while($row = mysql_fetch_array($rs))
	{
		?>
		<tr>
			<td>
                <?php echo $row['ID']; ?>
			</td>
			<td>
				<?php echo $row['Name']; ?>
			</td>
			<td>
				<?php echo $row['Address']; ?>
			</td>
		</tr>
		<?php	
             }
mysql_close($host);
	}
?>
	</table>  
</form>
</body>
</html>
