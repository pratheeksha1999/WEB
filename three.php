<?php   
$msg = '';
$reverse = '';
$num = '';
$sum = 0;
$var = 0;
$temp = '';
    if($_POST)  
    {  
        $num = $_POST['num']; 
        $temp = $num;
        $reverse = strrev($num);  
        if($num == $reverse){  
            $msg =  'The number <b>' . $num . '</b> is Palindrome';     
        }else{  
            $msg =  'The number <b>' . $num . '</b> is not a Palindrome';   
        }  
        while($num > 0)
        {
            $var = $num % 10;
            $sum  = $sum + $var;
            $num = $num / 10;  
        }
       
}     
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


</head>
<body>

    <form method="post" >   
    <h1> Enter a number   </h2> 
        <input  type="text" name="num" placeholder="Enter the number" /><br>  
        <button  type="submit">Submit</button>  
    </form>  

      <h1><?php echo $msg; ?></h1>
     <h1>Reverse of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $reverse . '</b>' ?></h1>
      <h1>Sum of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $sum . '</b>' ?></h1>

</body>
</html>
