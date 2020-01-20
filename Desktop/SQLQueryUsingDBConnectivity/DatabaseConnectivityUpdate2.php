<html>
<head>
	<title>Untitled</title>
</head>
<body>
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
	$n=$_POST["t1"];  //$n stores ID entered by user
	$rs=mysql_query("select * from employee where ID='$n'");
	$row = mysql_fetch_array($rs)
	?>
	<table width="400" border="5" bordercolor="#ff0000">
	<tr>
		<td>ID</td>
		<td>
			<input type="text" value="<?php echo $row['ID']; ?>" name="t2" />
		</td>
	</tr>
	<tr>
		<td>Name</td>
		<td>
			<input type="text" value="<?php echo $row['Name']; ?>" name="t3" />
		</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>
			<input type="text" value="<?php echo $row['Address']; ?>" name="t4" />
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Update" name="btnUpdate" /> 
NOTE: here button is given name to that isset() can  check if this button is clicked or not when user wants to update the data.
		</td>
	</tr>
	<?php
	if(isset($_POST["btnUpdate"]))
	{	$id=$_POST["t2"];
		$name=$_POST["t3"];
		$addr=$_POST["t4"];
		$res=mysql_query("update employee set Name='$name', Address='$addr' where  ID='$id'");
NOTE: above underlined words are exactly the field name.
		echo "Record Updated.";
	}
                   else
                                      echo "Record Not Updated.";
	mysql_close($host);
	}
?>
	</table>
</form>
</body>
</html>
