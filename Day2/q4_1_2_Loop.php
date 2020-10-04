<?php
echo "Loop Question 1:- <br>";
echo "This Required pattern is <br>";
$y=5;
for($z=0;$z<=5;$z++)
{
$y--;
echo "<br>";

for($x=0;$x<=$y;$x++)
{
    echo "*&nbsp";
}
}


//Program to echo the contents of an Array using For Loop
echo "Loop Question 2:- <br>";
$n= array("One","Two","Three");
$arrayLength=count($n);
for ($m=0;$m<=$arrayLength-1;$m++)
{
    echo "$n[$m] <br>";
}



?>