<?php
$a[]="Anuj";
$a[]="Kamal";
$a[]="Komal";
$a[]="Anurag";
$a[]="Anshuman";
$a[]="Badri";
$a[]="Beenu";
$a[]="Krishna";
$a[]="Anu";
$a[]="Chand";
$a[]="Chandra";
$a[]="Ansh";
$a[]="Prashant";
$a[]="Prashun";
$a[]="Pranchi";
$q=$_GET["t"];

if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++) 
    {

    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="") 
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." <br>".$a[$i];  
        }
      }
    }
  }
if ($hint == "") 
  {
   echo "no suggestion";
  }
else
  {
  echo $hint;
  }
?>
