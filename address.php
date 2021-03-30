<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="temp.css">
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d49bdd984d.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bgc">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
      Bootstrap
    </a>
  </div>
</nav>
  <div class="sidenav">
  <a href="#about">ORGANIZATION</a>
  <a href="#services">ID DETAILS</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
</body>
</html>



<?php

 $uname=$_GET['uname'];
 echo $uname;

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = new mysqli($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";

    }

    
    $sql = "SELECT * FROM employee WHERE first='$uname'";
    $result=mysqli_query($conn,$sql);///$con is your MySQL connection                  
   
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
    }else{
        while($row = mysqli_fetch_array($result)){
            echo "<h1 <span style='color:tomato;margin-left:250px';> Employee Personal Information </span></h1>" ;
             echo"<h1 <span style='margin-left:250px';>Employee Id: ".$row['id']."</span></h1>";
             echo "<h1 <span style='margin-left:250px'>First Name: ".$row['first']."</h1>";
             echo "<h1 <span style='margin-left:250px'>Last name: ".$row['last']."</h1>";
             echo "<h1 <span style='margin-left:250px'>Material Status: ".$row['material']."</h1>";
             echo "<h1 <span style='margin-left:250px'>Date of Birth: ".$row['dob']."</h1>";
             echo "<h1 <span style='margin-left:250px'>Nationality: ".$row['nationality']."</h1>";
             echo "<h1 <span style='margin-left:250px'>Gender: ".$row['gender']."</h1>";
    
        }
    }
             

   
            
          
        
        
    
?>