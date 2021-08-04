<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="style2.css">
   
</head>
<body>
     <div class="login">
        <h1>Admin Login Page</h1><br>
        <form action="" method="post">
         <div class="txt-field">
           <input type="text" name="email" required>
           <span></span>
           <label>Email</label>
         </div>
         <div class="txt-field">
           <input type="password" name="password" required>
           <span></span>
           <label>Password</label>
        </div>
           <input type="submit" name="submit">
        
        </form><br>
        </div>
        <?php
               session_start();
               $email="";
               $name="";
               if(isset($_POST['submit'])){
               $connection=mysqli_connect("localhost","root","");
               $db=mysqli_select_db($connection,"sms");
               $query="select * from login where email='$_POST[email]'";
               $query_run=mysqli_query($connection,$query);
               while($row=mysqli_fetch_assoc($query_run)){
                   if($row['email']==$_POST['email']){
                       if($row['password']==$_POST['password']){
                           $_SESSION['email']=$row['email'];
                           $_SESSION['Name']=$row['Name'];
                           header("Location:admin_dashboard.php");
                       }
                        else{ 
                             echo "Wrong Password";
                           }
                       }
                       else{
                        echo "Wrong Email";
                    }
                    
                   }
               }
           

        ?>
        




</body>
</html>