<?php
  $connection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"sms"); 
  $query="update student set first_name='$_POST[first_name]',last_name='$_POST[last_name]',father_name='$_POST[father_name]',class='$_POST[class]',mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where roll_no = $_POST[roll_no]";
  $query_run=mysqli_query($connection,$query);

?>
<script type="text/javascript">
    alert("Details Edited successfully");
    window.location.href="admin_dashboard.php";

</script>