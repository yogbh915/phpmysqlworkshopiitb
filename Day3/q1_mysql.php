
<html  >
    <center>
    <style>
    
    </style>
        <head><h1 style="color:blue;"> Marksheet </h1></head>
<form action='q1_mysql.php' method='POST'  >

<label for='Nos' >Name :-</label>
<input type='text' id='Nos' placeholder='Enter Student Name' text-align='center' name='Name'><br><br>

<label for='sub1' >Subject 1 :-</label>
<input type='number' id='sub1'  placeholder='Enter Marks' text-align='center' name='s1'><br><br>

<label for='sub2'>Subject 2:-</label>
<input type='number' id='sub2'  placeholder='Enter Marks'  name='s2'><br><br>

<label for='sub3'>Subject 3:-</label>
<input type='number'  id='sub3'  placeholder='Enter Marks' name='s3'><br><br>

<label for='sub3'>Subject 4:-</label>
<input type='number' id='sub3' placeholder='Enter Marks'  name='s4'><br><br>

<label for='sub3'>Subject 5:-</label>
<input type='number'  id='sub3' placeholder='Enter Marks' name='s5'><br><br>

<input type='submit'  value='Submit Scores'>
</form>
<?php
include('dbConnection.php');
$name = $_POST['Name'];
$sub1 =$_POST['s1'];
$sub2 =$_POST['s2'];
$sub3 =$_POST['s3'];
$sub4 =$_POST['s4'];
$sub5 =$_POST['s5'];
$total=500;
echo "$name <br>";
echo "Subject1 :   ".$sub1."<br>";
echo "Subject2 :   ".$sub2."<br>" ;
echo "Subject3 :   ".$sub3."<br>" ;
echo "Subject4 :   ".$sub4."<br>" ;
echo "Subject5 :   ".$sub5."<br>" ;
$sum =$sub1+$sub2+$sub3+$sub4+$sub5 ;
echo "Total Obtained Score:".$sum."<br>";
echo "Total Score: 500"."<br>";
$per=($sum*100)/500;
echo "Percentage :".$per."<br>";

$sql = "INSERT INTO class1 (ID,Name,sub1,sub2,sub3,sub4,sub5,TotalObtained,TotalMarks,Percent)
VALUES ('', '$name', '$sub1','$sub2','$sub3','$sub4','$sub5','$sum','$total','$per')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);



?>

</center>
</html>