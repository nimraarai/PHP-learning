<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Introduction</h1>
<?php
echo"Nimra batool";
echo"<br>";
print"nimra batool";
$a=25;
$c="Hello world";
echo"value of a.$a";
echo"<br>";
print"value of c is.$c";
echo"<br>";
var_dump($a);
echo"<br>";
var_dump($c);
$a="";
$b=null;
if(isset($a)==true)
	echo"<br>not null";
else
	echo"null";
if(empty($a)==true)
	echo"<br>a is empty<br>";
$a=25;
$b=30;
$c=27;
if($a>$b)
	echo"$a";
else if($b>$c)
	echo"<br>$b<br>";
else
	echo"$c<br>";
echo"<h1>for loop</h1>";
for($a=1;$a<=10;$a++)
{
	echo "$a<br>";
}
echo"<h1>while loop</h1>";
$a=1;
while($a>2)
	echo"$a";
     $a++;
     
?>
</body>
</html>