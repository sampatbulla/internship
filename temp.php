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
            echo "<h1 <span style='color:#e60000;margin-left:350px';><i class='fas fa-user-tie'></i>
 Employee's Personal Information </span></h1>" ;
             echo"<table border='2' cellpadding='10' <span style='margin-left:450px; padding-left:200px; font-style: oblique; padding: 2px 10px';> >
                  <tr><th><h2>Employee Id:</th><td><h2>".$row['id']."</td></tr></h2>";
             echo "<tr><th><h2> First Name:</th><td><h2> ".$row['first']."</h2></td></tr>";
             echo "<tr><th><h2> Last name:</th><td> <h2> ".$row['last']."</td></tr></h2>";
             echo "<tr><th><h2> Material Status:</th><td><h2>  ".$row['material']."</td></tr></h2>";
             echo "<tr><th><h2> Date of Birth:</th><td><h2>  ".$row['dob']."</td></tr></h2>";
             echo "><tr><th><h2> Nationality:</th><td><h2>  ".$row['nationality']."</td></tr></h2>";
             echo "<tr><th><h2> Gender:</th><td><h2>  ".$row['gender']."</td></tr></h2></table>";
    
        }
    }
    ?>         
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#address').val(data.address);  
                     $('#gender').val(data.gender);  
                     $('#designation').val(data.designation);  
                     $('#age').val(data.age);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>    
?>
</body>
</html>
