<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");  
 $query = "SELECT u.id,name,last,native,wloc,accno,ifsc,ten,sec,stream,clg,cgpa,material,dob,nationality,gender,pos,aw,doj,exp FROM users as u,address as ad,bank as b,education as e,employee as emp,orga as o,workex as w WHERE u.user_name=ad.uname AND u.user_name=b.uname AND u.user_name=e.uname AND u.user_name=emp.first AND u.user_name=o.uname AND u.user_name=w.uname";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Input Form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Admin Input Form</h3>  
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                     </div>  
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">Employee Name</th>  
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["name"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Admin Input Form</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee First Name</label>  
                          <input type="text" name="name" id="name" class="form-control" readonly />  
                          <br />  
                          <label>Enter Employee Last Name</label>  
                          <input type="text" name="last" id="last" class="form-control" readonly />  
                          <br />
                          <label>Enter Employee Address</label>  
                          <textarea name="native" id="native" class="form-control"></textarea>  
                          <br />
                          <label>Enter Employee Work Location</label>  
                          <textarea name="wloc" id="wloc" class="form-control"></textarea>  
                          <br />
                          <label>Enter Nationality</label>  
                          <input type="text" name="nationality" id="nationality" class="form-control" />  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="aw" id="aw" class="form-control" />  
                          <br />
                          <label>Enter Position</label>  
                          <input type="text" name="pos" id="pos" class="form-control" />  
                          <br /> 
                          <label>Enter Date of Birth</label>  
                          <input type="text" name="dob" id="dob" class="form-control" />  
                          <br />
                          <label>Enter Bank Account clgNo</label>  
                          <input type="text" name="accno" id="accno" class="form-control" />  
                          <br />
                          <label>Enter Bank IFSC</label>  
                          <input type="text" name="ifsc" id="ifsc" class="form-control" />  
                          <br />
                          <label>Enter Tenth Percentage/CGPA</label>  
                          <input type="text" name="ten" id="ten" class="form-control" />  
                          <br />
                          <label>Enter 12th/PUC Percentage</label>  
                          <input type="text" name="sec" id="sec" class="form-control" />  
                          <br />
                          <label>Enter UG Collage</label>  
                          <input type="text" name="clg" id="clg" class="form-control" />  
                          <br />
                          <label>Enter Stream</label>  
                          <input type="text" name="stream" id="stream" class="form-control" />  
                          <br />
                          <label>Enter CGPA</label>  
                          <input type="text" name="cgpa" id="cgpa" class="form-control" />  
                          <br/>
                          <label>Enter Realationship Status</label>  
                          <input type="text" name="material" id="material" class="form-control" />  
                          <br />
                          <label>Enter Work Exp</label>  
                          <input type="text" name="doj" id="doj" class="form-control" />  
                          <br /> 
                          <label>Enter Experience</label>  
                          <input type="text" name="exp" id="exp" class="form-control" />  
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
           alert(employee_id);  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data) {  
                     $('#name').val(data.name);
                     $('#last').val(data.last);                 
                     $('#native').val(data.native);
                     $('#wloc').val(data.wloc);
                     $('#nationality').val(data.nationality); 
                     $('#aw').val(data.aw); 
                     $('#gender').val(data.gender);  
                     $('#designation').val(data.designation);
                     $('#pos').val(data.pos);  
                     $('#dob').val(data.dob);
                     $('#accno').val(data.accno);
                     $('#ifsc').val(data.ifsc);  
                     $('#ten').val(data.ten);
                     $('#sec').val(data.sec);
                     $('#clg').val(data.clg);
                     $('#stream').val(data.stream);
                     $('#cgpa').val(data.cgpa);
                     $('#material').val(data.material);
                     $('#exp').val(data.exp);5
                     $('#doj').val(data.doj);
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
 