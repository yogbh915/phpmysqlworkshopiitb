<html>
    <center>
        <head><h1 style="color:blue;"> Know the Type of Triangle </h1></head>
<form action='q6_1_SpecialVariables_GET.php' method='GET'  >
<label for='side1' >Enter the side 1:-</label><br>
<input type='text' id='side1' name='s1'><br><br>

<label for='side2'>Enter the side 2:-</label><br>
<input type='text' id='side2' name='s2'><br><br>

<label for='side3'>Enter the side 3:-</label><br>
<input type='text' text-align='center' id='side3' name='s3'><br><br>

<input type='submit' value='Click Here'>
</form>
<?php 
$side1=0;

$side1 = $_GET['s1'];
$side3 = $_GET['s3'];
$side2 = $_GET['s2'];
echo "Entered values are<br>" ;
echo $side1." ".$side2." ".$side3." <br>" ;
if($side1 == $side2 && $side2 == $side3)
{
    echo "Equilateral Triangle <br>";
}
else
if($side1 == $side2 || $side1 == $side3 || $side2 == $side3)
{
    echo "Isosceles Triangle";
}
else
{
    echo "Scalene Triangle";
}
?>




</center>


</html>
