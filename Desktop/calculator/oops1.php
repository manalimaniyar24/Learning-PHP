<?php
class demo
{
    function add()
  { 
      global $a,$b,$c;
      $c=$a+ $b;
  }
    function sub()
  { 
      global $a,$b,$c;
      $c=$a-$b;
  }
    function mul()
  { 
      global $a,$b,$c;
      $c=$a*$b;
  }
    function div()
  { 
      global $a,$b,$c;
      $c=$a/$b;
  }
function  show()
{
   global $a,$b,$c;
   echo"a=".$a."<br>b=".$b."<br>result=".$c;
}
}
$a=$_POST['x'];
$b=$_POST['y'];
$c=$_POST['z'];
$ob1=new demo();
switch($c)
{
  case 1: $ob1->add();
              break;
  case 2: $ob1->sub();
              break;
  case 3: $ob1->mul();
              break;
  case 4: $ob1->div();
              break;
 }
$ob1->show();
?>
