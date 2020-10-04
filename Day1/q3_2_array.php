<html>
    <body>
        <?php
$a = array(  
            array(1, 0),  
            array(4, 5),  
            
          );  
   
//Initialize matrix b  
$b = array(  
              array(1, 1),  
             array(2, 3),  
              
           );  
   
//Calculates number of rows and columns present in given matrix  
$rows = count($a);  
$cols = count($a[0]);  

echo "Matrix A is :- <br>";

   for ($x=0;$x< $rows;$x++)
   {
       for ($y=0;$y<$cols;$y++)
       {
        echo $a[$x][$y] . " ";  
       }
       echo "<br>";  
   }
   echo "Matrix B is :- <br>";
   for ($m=0;$m< $rows;$m++)
   {
       for ($n=0;$n<$cols;$n++)
       {
        echo $b[$m][$n] . " ";  
       }
       echo "<br>";  
   }
//Array sum will hold the result and initialize it with 0  
$sum = array_fill(0, $cols, array_fill(0, $rows, 0));  
   
//Performs addition of matrices a and b. Store the result in matrix sum  
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];  
    }  
}  
   
print("Addition of two matrices: <br>");  
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($sum[$i][$j] . " ");  
    }  
    print("<br>");  
}    
?>  
</body>
</html>