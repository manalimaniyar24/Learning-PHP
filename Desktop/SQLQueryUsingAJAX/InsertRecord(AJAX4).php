<html>
<head>
	<title>Untitled</title>
	<script language="javascript">
		function insertAjax()
		{
                                          var n,ag,adr;
			id=f1.t1.value;
			n=f1.t2.value;
			adr=f1.t3.value;
			if (id=="" || n=="" || adr=="")
			{
				document.getElementById("msg").innerHTML="";
				  return;
			}
			else 
                                                          {
                                                                         xmlhttp=new XMLHttpRequest();
                                                          }
			xmlhttp.onreadystatechange=function()
			{
				document.getElementById("msg").innerHTML=xmlhttp.responseText;	
			}
			xmlhttp.open("GET","Record(AJAX4).php?id="+id+"&n="+n+"&add="+adr,true);
			xmlhttp.send();
		}
	</script>
</head>

<body>
<form  action="" name="f1">
	<table width="500px" style="font-family:arial; font-size:13px;">
		<tr style="background-color:purple ; color:lavender;">
			<td colspan="2">Insert Window</td>
		</tr>
		<tr>
			<td>ID</td>
			<td><input type="text" name="t1" /></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="t2" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="t3" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="button" value="Insert" onclick="insertAjax()" /></td>
		</tr>
	</table>
</form>
<div id="msg"></div>
</body>
</html>
