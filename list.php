<?php

function getEmployeeData(){
    include_once 'db.php';
    $Sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $Sql); 
    if ($result->num_rows > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>EMP CODE</th>
                          <th>EMP NAME</th>
                          <th>EMP DEPARTMENT</th>
                          <th>EMP AGE</th>
                          <th>Emp Experiance</th>
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>" . $row['emp_code']."</td>
                   <td>" . $row['emp_name']."</td>
                   <td>" . $row['emp_department']."</td>
                   <td>" . $row['emp_age']."</td>
                   <td>" . $row['emp_experiance']."</td></tr>";        
     }
     echo "</tbody></table></div>";
     
}else {
     echo "you have no records";
}
}