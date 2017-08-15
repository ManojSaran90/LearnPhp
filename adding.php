<!DOCTYPE html>
<html>

<head>

<title> sum </title>
</head>
<body>
   
   <form>
          <div>number 1:</div>
          <input type="number" name="num1">
          <div>number 2:</div>
          <input type="number" name="num2">
          <div><br><input type="submit" value="check the sum"></div>
   </form> 
   <?<?php  ?>
   if (isset($_GET['num1']) && isset($_GET['num2'])) {
       $num1=$_GET['num1'];
       $num2=$_GET['num2'];
       $sum=$num1 + $num2;
       echo $num1 . "+". $num2 . "=" .$sum;

           # code...
    } 
   ?>   
</body>

</html>