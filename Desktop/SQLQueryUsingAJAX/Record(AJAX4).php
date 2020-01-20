<?php
    $id=$_GET["id"];
    $name=$_GET["n"];
    $address=$_GET["add"];
     $con=mysql_connect("localhost","root","");
    if (!$con)
    {
	die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("myfirstdatabase", $con);
    $res=mysql_query("insert into employee values('$id','$name','$address')");
    if($res)
        echo "Record Inserted";
    else
        echo "Record Not Inserted";
    mysql_close($con);
?>
