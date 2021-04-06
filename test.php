<?php  

	$sname= "localhost";
	$unmae= "root";
	$password = "";

	$db_name = "test_db";

	$conn = mysqli_connect($sname, $unmae, $password, $db_name);

	if (!$conn) {
		echo "Connection failed!";
	}
     $query = "SELECT * FROM users as u,address as ad,bank as b,education as e,employee as emp,orga as o,workex as w WHERE u.user_name=ad.uname AND u.user_name=b.uname AND u.user_name=e.uname AND u.user_name=emp.first AND u.user_name=o.uname AND u.user_name=w.uname";  
     $result = mysqli_query($conn, $query); 
     $test=mysqli_fetch_array($result);
     foreach($test as $value){
    	echo $value . "<br>";
} 
 ?>