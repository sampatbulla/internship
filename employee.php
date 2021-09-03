<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="employee.css">
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d49bdd984d.js" crossorigin="anonymous"></script>
   
   
</head>
<body>
  <?php
    $uname=$_GET['uname'];
    $url1="temp.php?uname=".$uname;
    $url2="address1.php?uname=".$uname;
    $url3="edu.php?uname=".$uname;
    $url8="workex.php?uname=".$uname;

    ?>

    <nav class="navbar navbar-light bgc">
  <div class="container">
    <a class="navbar-brand" target="_blank" href="https://www.tvsrtechnologies.com">
      <img src="https://www.tvsrtechnologies.com/images/logo.png" alt="" width="50" height="25">
    </a>
    <a href="logout.php" style="color:white;">logout</a>
  </div>
</nav>
  <div class="sidenav">
  <a href="#about">ORGANIZATION</a>
  <a href="#services">ID DETAILS</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

  <div class="marg">
	 <div class="container mt-4 fis ">
    <div>
      <h3>Welcome to Employee Porttal. </h3>
    </div>
		<div class="row">
       
        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url1'><img src='img1.png'  /></a>";
          ?>
        </div>

        
        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url2'><img src='img2.png'  /></a>";
          ?>
        </div>

        
        <div class="col-lg-2 col-md-12 cls1">
           <?php
             echo  "<a  href='$url3'><img src='img3.png'  /></a>";
          ?>
        </div>
        

        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url1'><img src='img4.png'  /></a>";
          ?>
        </div>
        
        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url1'><img src='img5.png'  /></a>";
          ?>
        </div>
	</div>
   <div class="mg">
	  <div class="row">
       
        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url1'><img src='img6.png'  /></a>";
          ?>
        </div>

        
        <div class="col-lg-2 col-md-12 cls1">
          <?php
             echo  "<a  href='$url1'><img src='img7.png'  /></a>";
          ?>
        </div>

        
        <div class="col-lg-2 col-md-12 cls1">
         <?php
             echo  "<a  href='$url8'><img src='img8.png'  /></a>";
          ?>
        </div>
        

        <div class="col-lg-2 col-md-12 cls1">
           <?php
             echo  "<a  href='$url1'><img src='img1.png'  /></a>";
          ?>
        </div>
        
        <div class="col-lg-2 col-md-12 cls1">
           <?php
             echo  "<a  href='$url1'><img src='img10.png'  /></a>";
          ?>
        </div>
  </div>
  </div>
	</div>
</div>
</body>
</html>