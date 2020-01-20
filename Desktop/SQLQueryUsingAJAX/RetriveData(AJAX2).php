<html>
<head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="BLANK";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
	xmlhttp.open("GET","getemployee(AJAX2).php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<form action="">
	<table width="400px">
		<tr>
			<td>Select Name</td>
			<td>
		                  <select onchange="showUser(this.value)">
			               <option value="Manali Maniyar">Manali</option>
			               <option value="Khushi Shah">Khushi</option>
			               <option value="Namrata Sarda">Namrata</option>
		                 <option value="Neha Doshi">Neha</option>
				</select>
		</tr>
	</table>
</form>
<br />
<div id="txtHint"><b>Person info will be listed here.</b></div>
</body>
</html>	
