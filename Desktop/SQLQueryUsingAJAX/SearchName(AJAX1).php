<html>
<head>
<script type="text/javascript">
function showHint(str)
{
	var xmlhttp;

	if (str.length==0)
	{ 
		document.getElementById("txtHint").innerHTML="blank";
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
xmlhttp.open("GET","gethint(AJAX1).php?t="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>

<h3>Start typing a name in the input field below:</h3>
<form action=""> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)" />

</form>
<p>Suggestions:<br> <span id="txtHint"></span></p> 

</body>
</html>

