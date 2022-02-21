<?php
// include mysql database configuration file
include_once 'db.php';
// include valiation file
include_once 'validation.php';

if(isset($_POST['submit'])){

    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
    $empCode = $_POST['emp_code'];
    $empName= $_POST['emp_name'];
    $empDepartment = $_POST['emp_department'];
    $empAge= $_POST['emp_age'];
    $empExperiance= $_POST['emp_experiance'];
    $empDob= $_POST['emp_dob'];
    $empDoj= $_POST['emp_doj'];
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {     
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            $i = 0;
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
                {
                    if ($i>0)
                    { 
                                
                    // Get row data
                    $code = $getData[$empCode];
                    $name= $getData[$empName];
                    $department = $getData[$empDepartment];
                    $age = $getData[$empAge];
                    $experiance = $getData[$empExperiance];
                    $dob = $getData[$empDob];
                    $doj = $getData[$empDoj];
                    $valid = validateEmployeeData($code,$name,$department, $age,$experiance,$dob,$doj);
                        if ($valid == true){
                            mysqli_query($conn, "INSERT INTO employees (emp_code,emp_name,emp_department,emp_age,emp_experiance,joining_date,emp_dob) VALUES ('$code' ,'$name', '$department','$age', '$experiance','$doj','$dob')");

                        }
                    }
                $i++; 
           }                

        fclose($csvFile);
        header("Location: index.php");
    } else{
        echo "Please select valid file or column correctly";
    }
}