<?php  
$numbers =array("11","23","72","44");
$y=count($numbers);
echo "The Input value are <br>";
for($z=0;$z<=$y-1;$z++)
{
echo "$numbers[$z]\n";
}
echo "<br>";
foreach($numbers as $x)
{
if($x%2 ==0)
echo "$x is Even Number  <br>";
else 
echo "$x is ODD Number  <br>";

}
