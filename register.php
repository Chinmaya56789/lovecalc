<?php
  session_start();


  $new_con = mysqli_connect('localhost','root');
  mysqli_select_db( $new_con, 'login');     							//connecting to daatbase .

  $name = $_POST["fullname"];
  $mail = $_POST["mail"];
  echo "your entered data is <br> name: $name <br> mail : $mail  <br> -------------------------------------------------
  -------------------------------- <br>";

  $find ="select * from info where name = '$name' ";					//Checking For repetation 

  $res = mysqli_query($new_con,$find);

  $row_num = mysqli_num_rows($res);	
   if ($row_num == 1) 
   {	
   	echo "The Username alredy taken ( please choose another Username) ---use back button to reenter";   //Result for repeated username 

    
   }
   else
   {
   	$entry = "insert into info(name,email) values('$name' , '$mail' )";	//Data entry to Database
    mysqli_query($new_con,$entry);
    $alert = " registration sucessfull";
    echo "Registartion successfull ---";
   

   }


?>