<?php
  include("include/header.php");
?>
<?php
if(isset($_POST["submit"])){
    $cname=$_POST['c_name'];
    $c_desc=$_POST['c_desc'];
    $query="insert course set c_name='$c_name',c_desc='$c_desc'";
    mysqli_query($con,$query);
}
?>
<h3>Senjuti Saha CSE 2D 57</h3>
  <a href="./">View Courses</a><br><br>
  <form method="post" action="">
