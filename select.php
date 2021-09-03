<?php  
error_reporting(E_ERROR | E_PARSE);
 if(isset($_POST["employee_id"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "test_db");  
      $query = "SELECT u.id,name,last,native,wloc,accno,ifsc,ten,sec,stream,clg,cgpa,material,dob,nationality,gender,pos,aw,doj,exp FROM users as u,address as ad,bank as b,education as e,employee as emp,orga as o,workex as w WHERE u.user_name=ad.uname AND u.user_name=b.uname AND u.user_name=e.uname AND u.user_name=emp.first AND u.user_name=o.uname AND u.user_name=w.uname AND u.id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query); 
      $test=mysqli_fetch_array($result);
      
    $arrlength = count($test);
    for($x = 0; $x < $arrlength; $x++) {
      echo $test[$x];
      echo "<br>";
    }
 }  
 ?>