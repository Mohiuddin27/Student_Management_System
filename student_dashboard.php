<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
      Name: <?php echo $_SESSION['Last_name'];?>&nbsp;&nbsp;&nbsp;
      <a href="logout.php">Logout</a>
      </center>

  </div>
  <span id="top_span"><marquee>Welcome to Student Dashboard.</marquee></span>
  <div id="left_side"><br><br><br><br>
        <form action="" method="post">
          <table>
              <tr>
                 <td>
                    <input type="submit" name="show_detail" class="btn-4" value="Show Details">
                  </td>
              </tr>
              <tr>
                 <td>
                    <input type="submit" name="edit_detail"  class="btn-4" value="Edit Details">
                  </td>
              </tr>
            
          </table>
       </form>

  </div>
  <div id="right_side" ><br><br>
     <div id="demo">
      <?php
      if(isset($_POST['show_detail'])){
          $query="select * from student where email='$_SESSION[email]'";
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
      if(isset($_POST['edit_detail'])){
          $query="select * from student where email ='$_SESSION[email]'";
          $query_run=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($query_run)){
              ?>
              <form action="edit_student.php" method="post">
              <table>
                 <tr>
                   <td><b>Roll No:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="roll_no" value="<?php echo $row['Roll_no'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>First Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="first_name" value="<?php echo $row['First_name'];?>"> 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Last Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="last_name" value="<?php echo $row['Last_name'];?>" > 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Father Name:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="father_name" value="<?php echo $row['father_name'];?>" > 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Class:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text"  name="class" value="<?php echo $row['class'];?>" > 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Mobile:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" > 
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
                     <input type="text" name="password" value="<?php echo $row['password'];?>" 
                    </td>
                 </tr>
                 <tr>
                   <td><b>Remark:&nbsp;&nbsp;&nbsp;</b></td>
            
                   <td>
                     <textarea rows="3" cols="40" name="remark" > <?php echo $row['remark'];?></textarea>
                    </td>
                 </tr>
                 <tr>
                   <td></td>
                   <td><input type="submit" name="save" value="Save"></td>



                 </tr>
              </table>
            </form>
            <?php
          }
      }
      

      ?>
      

     </div>


  </div>

    
</body>
</html>