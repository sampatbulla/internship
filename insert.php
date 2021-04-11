<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      /*
name
native
wloc
nationality
aw
gender
designation
pos
dob
accno
ifsc
ten
sec
clg
stream
cgpa
material
exp
doj
      */
      $id=mysqli_real_escape_string($connect,$_POST["id"]);
      $name = mysqli_real_escape_string($connect, $_POST["name"]);
      $last=mysqli_real_escape_string($connect,$_POST["last"]);  
      $native = mysqli_real_escape_string($connect, $_POST["native"]);  
      $wloc = mysqli_real_escape_string($connect, $_POST["wloc"]);  
      $nationality = mysqli_real_escape_string($connect, $_POST["nationality"]);  
      $aw = mysqli_real_escape_string($connect, $_POST["aw"]);
      $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
      $designation = mysqli_real_escape_string($connect, $_POST["designation"]);  
      $pos = mysqli_real_escape_string($connect, $_POST["pos"]);
      $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
      $accno = mysqli_real_escape_string($connect, $_POST["accno"]);
      $ifsc = mysqli_real_escape_string($connect, $_POST["ifsc"]);
      $ten = mysqli_real_escape_string($connect, $_POST["ten"]);
      $sec = mysqli_real_escape_string($connect, $_POST["sec"]);
      $clg = mysqli_real_escape_string($connect, $_POST["clg
"]);
      $stream = mysqli_real_escape_string($connect, $_POST["stream"]);
      $cgpa = mysqli_real_escape_string($connect, $_POST["cgpa"]);
      $material = mysqli_real_escape_string($connect, $_POST["material"]);
      $exp = mysqli_real_escape_string($connect, $_POST["exp"]);
      $doj = mysqli_real_escape_string($connect, $_POST["doj"]);
      if($_POST["employee_id"] != '')  
      {  
            $query = "  
            UPDATE employee   
            SET first='$name',   
            last='$last',   
            material='$material',   
            dob = '$dob',   
            nationality = '$nationality',
            gender='$gender'   
            WHERE id='".$_POST["employee_id"]."'"; 
            mysqli_query($connect, $query);
            if ($query==1) {
            $query1="UPDATE workex SET doj='$doj',exp=$exp WHERE uname='$name'";  
            mysqli_query($connect, $query1)
            }
            if ($query1==1) {
              $query2="UPDATE orga SET pos='$pos', aw='$aw' WHERE uname='$name'";
              mysqli_query($connect, $query2)
            }
            if ($query2==1) {
              $query3="UPDATE education SET ten=$ten,sec=$sec,clg='$clg',cgpa=$cgpa,stream='$stream' WHERE uname='$name'";
              mysqli_query($connect, $query3)
            }
            if ($query3==1) {
              $query4="UPDATE bank SET bname='$bname',accno=$accno,ifsc='$ifsc' WHERE uname='$name'";
              mysqli_query($connect, $query4)
            }
            if ($query4==1) {
              $query5="UPDATE address SET wloc='$wloc',native='$native' WHERE uname='$name'";
              mysqli_query($connect, $query5)
            }
            $message = 'Data Updated';  
      }  
      else  
      {   
           $query = "  
           INSERT INTO employee(id,first,last,dob,nationality,gender)  
           VALUES($id, '$name', '$last', '$nationality', '$gender');  
           "; 
            mysqli_query($connect, $query);
            if ($query==1) {
            $query1="INSERT INTO workex(uname,doj,exp)  
           VALUES('$name','$doj',$exp);";  
            mysqli_query($connect, $query1)
            }
            if ($query1==1) {
              $query2="UPDATE orga SET pos='$pos', aw='$aw' WHERE uname='$name'";
              mysqli_query($connect, $query2)
            }
            if ($query2==1) {
              $query3="UPDATE education SET ten=$ten,sec=$sec,clg='$clg',cgpa=$cgpa,stream='$stream' WHERE uname='$name'";
              mysqli_query($connect, $query3)
            }
            if ($query3==1) {
              $query4="UPDATE bank SET bname='$bname',accno=$accno,ifsc='$ifsc' WHERE uname='$name'";
              mysqli_query($connect, $query4)
            }
            if ($query4==1) {
              $query5="UPDATE address SET wloc='$wloc',native='$native' WHERE uname='$name'";
              mysqli_query($connect, $query5)
            } 
            $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query5))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM tbl_employee ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Employee Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>