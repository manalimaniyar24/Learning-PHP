<html>
<head>
	<title>Untitled</title>
	<script type="text/javascript">
		function showmsg(n)
		{
			if (n=="")
			{
				document.getElementById("msg").innerHTML="";
				  return;
			}
                                                          if (window.XMLHttpRequest)
                                                          {
                                                             xmlhttp=new XMLHttpRequest();
                                                          }
                                                          else
                                                          {
                                                              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                                          }
			xmlhttp.onreadystatechange=function()
			{
		                       document.getElementById("msg").innerHTML=xmlhttp.responseText;
				
			}
			xmlhttp.open("GET","message(AJAX3).php?q="+n,true);
			xmlhttp.send();
		}
		
	</script>
</head>

<body>
<form action="">
	Enter Name<input type="text"  onkeyup="showmsg(this.value)" />
</form>
<div id="msg"></div>
</body>
</html>
