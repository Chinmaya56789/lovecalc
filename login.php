<?php
  session_start();


  $new_con = mysqli_connect('localhost','root');
  mysqli_select_db( $new_con, 'login');     							//connecting to daatbase .

  $name = $_POST["fullname"];
  $mail = $_POST["mail"];
  echo "your entered data is <br> name: $name <br> mail : $mail  <br> -------------------------------------------------
  -------------------------------- <br>";

  $c_name ="select * from info where name = '$name'and email = '$mail' ";//Checking From database
  $res = mysqli_query($new_con,$c_name);

  $row_num = mysqli_num_rows($res);	
   if ($row_num == 1) 
   {
   	echo "successfully logged in";  //successfull login

    
   }
   else
   {
   
    echo "you have entered wrong name or mail"; // for wrong entry 

   }


?>