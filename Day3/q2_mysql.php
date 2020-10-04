<html>
<center>
<?php
include('dbConnection.php');

$name ='Rohan';
$sub1 =55;
$sub2 =66;
$sub3 =77;
$sub4 =88;
$sub5 =76;
$total=500;
$sum =$sub1+$sub2+$sub3+$sub4+$sub5 ;
$per=($sum*100)/500;

echo "<br><b>$name</b> <br>";
echo "<br>Subject1 :   ".$sub1."<br>";
echo "Subject2 :   ".$sub2."<br>" ;
echo "Subject3 :   ".$sub3."<br>" ;
echo "Subject4 :   ".$sub4."<br>" ;
echo "Subject5 :   ".$sub5."<br>" ;
echo "Total Obtained Score:".$sum."<br>";
echo "Total Score: 500"."<br>";
echo "Percentage :".$per."<br>";
echo "<hr></hr>";
$sql = "INSERT INTO class1 (ID,Name,sub1,sub2,sub3,sub4,sub5,TotalObtained,TotalMarks,Percent)
VALUES ('', '$name', '$sub1','$sub2','$sub3','$sub4','$sub5','$sum','$total','$per')";
if (mysqli_query($conn, $sql)) {
    echo "New record Inserted successfully<br>";
    $last_id = mysqli_insert_id($conn);
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


$sub5=99;
$sum =$sub1+$sub2+$sub3+$sub4+$sub5 ;
$per=($sum*100)/500;


$sql = "UPDATE class1 
SET  Name='$name',sub1='$sub1',sub5='$sub5',TotalObtained='$sum',Percent='$per'
WHERE ID=$last_id";


if (mysqli_query($conn, $sql)) {
   echo "Changes made Sucessfully<br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  echo "<hr></hr>";
  echo "<br><br>Subject1 :   ".$sub1."<br>";
echo "Subject2 :   ".$sub2."<br>" ;
echo "Subject3 :   ".$sub3."<br>" ;
echo "Subject4 :   ".$sub4."<br>" ;
echo "Subject5 :   ".$sub5."<br>" ;
echo "Total Obtained Score:".$sum."<br>";
echo "Total Score: 500"."<br>";
echo "Percentage :".$per."<br>";


mysqli_close($conn);



?>
</center>
</html>