<?php
  include("include/header.php");
?>
<body>
  <h2>HTML table</h2>
  <table>
    <tr>
      <th>Course Name</th>
      <th>Course Description</th>
      <th>Status</th>
    </tr>
<?php
  $query="select c_name,c_desc,status from course";
  $result=mysqli_query($con,$query);
  while($fetch=mysqli_fetch_object($result)){
    echo
      "<tr>
        <td>{$fetch->c_name}</td>
        <td>{$fetch->c_desc}</td>
        <td>{$fetch->status}</td>
      </tr>";

  }
?>
  </table>
</body>
  <?php
  include("include/footer.php");
?>
