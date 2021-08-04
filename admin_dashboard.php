<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <?php
        session_start();
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"sms");
               
         
    ?>
</head>
<body>
  <div id="header">
      <center><br> <strong>Studnet Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br> </strong>Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;
      Name: <?php echo $_SESSION['Name'];?>&nbsp;&nbsp;&nbsp;
      <a href="logout.php">Logout</a>
      </center>

  </div><br>
  <span id="top_span"><marquee>Welcome to Admin Dashboard.</marquee></span>
  <div id="left_side"><br><br><br><br>
        <form action="" method="post">
          <table>
              <tr>
                 <td>
                    <input type="submit" name="search_student"  value="Search Student" class="btn-4">
                  </td>
              </tr>
              <tr>
                 <td>
                    <input type="submit" name="edit_student"  value="Edit Student" class="btn-4">
                  </td>
              </tr>
              <tr>
                 <td>
                    <input type="submit" name="add_new_student"  value="Add New Student" class="btn-4">
                  </td>
              </tr>
              <tr>
                 <td>
                    <input type="submit" name="delete_student"  value="Delete Student" class="btn-4">

                  </td>
              </tr>
              <tr>
                 <td>
                    <input type="submit" name="show_teachers"  value="Show Teachers" class="btn-4">

                  </td>
              </tr>
          </table>
       </form>

  </div>
  <div id="right_side" ><br><br>
     <div id="demo">
       <?php
         if(isset($_POST['search_student']))
         {
           ?>
           <center>
              <form action="" method="post">
                   Enter Roll No:
                   <input type="text" name="roll_no">
                   <input type="submit" name="search_by_roll_no_for_search" value="Search">


              </form>
            </center>
            <?php
         }
         if(isset($_POST['search_by_roll_no_for_search']))
         {
          $query="select * from student where roll_no='$_POST[roll_no]'";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($query_run)){
              ?>
              <table>
                 <tr>
                   <td><b>Roll No:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['Roll_no'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>First Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['First_name'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Last Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['Last_name'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Father Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['father_name'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Class:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['class'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Mobile:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['mobile'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Email:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['email'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Password:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" value="<?php echo $row['password'];?>" disabled> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Remark:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <textarea rows="3" cols="40" disabled> <?php echo $row['remark'];?></textarea>
                    </td>
                 </tr>
              </table>
              <?php
          }
        }

      ?>
      <?php
         if(isset($_POST['edit_student']))
         {
           ?>
           <center>
              <form action="" method="post">
                   Enter Roll No:
                   <input type="text" name="roll_no">
                   <input type="submit" name="search_by_roll_no_for_edit" value="Search ">


              </form>
            </center>
            <?php
         }
         if(isset($_POST['search_by_roll_no_for_edit']))
         {
          $query="select * from student where roll_no='$_POST[roll_no]'";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($query_run)){
              ?>
              <form action="admin_edit_student.php" method="post">
              <table>
              <table>
						<tr >
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['Roll_no']?>">
							</td>
						</tr>
                 
                 <tr>
                   <td><b>First Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text"name="first_name" value="<?php echo $row['First_name'];?>">
                 </tr>
                 <tr>
                   <td><b>Last Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="last_name" value="<?php echo $row['Last_name'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Father Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="father_name" value="<?php echo $row['father_name'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Class:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="class" value="<?php echo $row['class'];?>" > 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Mobile:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Email:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="email" value="<?php echo $row['email'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Password:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="password" value="<?php echo $row['password'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Remark:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <textarea rows="3" cols="40" name="remark"> <?php echo $row['remark'];?></textarea>
                    </td>
                 </tr><br>
                 <tr>
                   <td></td>
                   <td><input type="submit" name="edit" value="Save"></td>
                 </tr> 
              </table>
            </form>
              <?php
          }
        }

      ?>
      <?php
         if(isset($_POST['add_new_student'])){
           ?>
           <center><h4>Fill the given details:</h4></center>
           <form action="add_student.php"  method="post">
               <table>
                 <tr >
                    <td class="des">Roll No:</td>
                    <td>
                      <input type="text" name="roll_no" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">First name:</td>
                    <td>
                      <input type="text" name="first_name" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Last name:</td>
                    <td>
                      <input type="text" name="last_name" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Father name:</td>
                    <td>
                      <input type="text" name="father_name" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Class:</td>
                    <td>
                      <input type="text" name="class" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Mobile:</td>
                    <td>
                      <input type="text" name="mobile" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Email:</td>
                    <td>
                      <input type="text" name="email" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Password:</td>
                    <td>
                      <input type="text" name="password" requird>
                    </td>
                  </tr>
                  <tr>
                    <td class="des">Remark:</td>
                    <td>
                      <textarea rows="3" cols="40" name="remark"></textarea>
                
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td ><input type="submit" name="add" value="Add Student">
                    </td>
                  </tr>
                </table>


           </form>
           <?php
         }



     ?>
     <?php
     if(isset($_POST['delete_student'])){
       ?>
       <center>
         <h4>Enter Roll No to Delete Student</h4>
         <form action="delete.php" method="post">
         Roll No:
           <input type="text" name="roll_no">
           <input type="submit" name="search_by_roll_no_for_delect" value="Delete Student">
         </form>

       </center>
       <?php
     }
     


     ?>
     <?php
        if(isset($_POST['show_teachers'])){
          ?>
          <center>
             <h4>Teacher's Details</h4>
             <table style="border-collapse: collapse;border: 1px solid black;">
                <tr>
                   <td id="id" ><b>ID &nbsp;&nbsp;&nbsp;</b></td>
                   <td id="id" style="padding-right:60px;"><b>Name &nbsp;</b></td>
                   <td id="id"><b>Mobile</b></td>
                   <td id="id"><b>Courses</b></td>
                   <td id="id"><b>view Detail</b></td>
                </tf>
              </table>

          </center>
          <?php
          $connection=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,"sms"); 
          $query="select * from teacher";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($query_run)){
            ?>
            <center>
                 <table style="border-collapse: collapse;border: 1px solid black;">
                    <tr>
                      <td id="td"><?php echo $row['t_id'];?></td>
                      <td id="td"><?php echo $row['name'];?></td>
                      <td id="td"><?php echo $row['mobile'];?></td>
                      <td id="td"><?php echo $row['courses'];?></td>
                      <td id="td"><a href="#">View Details</a></td>
                    </tr>

                 </table>
            </center>
            <?php
          }
        }



     ?>

     </div>


  </div>

    
</body>
</html>