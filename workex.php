<!DOCTYPE html>
<html>
<head>
    <title></title>
     <style type="text/css">
      body{
        
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="temp.css">
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d49bdd984d.js" crossorigin="anonymous"></script>
</head>
<body style="background-image:url('bg2.jpg')";>
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

    
    $sql = "SELECT * FROM workex WHERE uname='$uname'";
    $result=mysqli_query($conn,$sql);///$con is your MySQL connection                  
   
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
    }else{
        while($row = mysqli_fetch_array($result)){
           echo "<h1 <span style='color:#e60000;margin-left:350px';><i class='fas fa-briefcase'></i>
 Employee's Work Experience</span></h1>" ;
             echo"<table border='2' cellpadding='17' <span style='margin-left:450px; padding-left:200px; font-style: oblique; padding: 2px 10px';> >
                  <tr><th><h2>Employee Id:</th><td><h2>".$row['uname']."</td></tr></h2>";
             echo "<tr><th><h2> Date Of Joining:</th><td><h2> ".$row['doj']."</h2></td></tr>";
             echo "<tr><th><h2> Work Experience:</th><td> <h2> ".$row['exp']." Years</td></tr></h2></table>";
        }
    }
             

   
            
          
        
        
    
?>
</body>
</html>