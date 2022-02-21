<?php
   function validateEmployeeData($code,$name,$department, $age,$experiance,$dob,$doj){
    if (empty($code) || empty($name) || empty($department) || empty($age) || empty($experiance) ||empty($dob) ||empty($doj))
                {
                  echo "Empty Field please check";exit;

   }
  //  $format = 'd-m-Y';
  //  $dt = DateTime::createFromFormat($format, $dob); 
  //  $dt1 = DateTime::createFromFormat($format, $doj);
  // if ($dt->format($format) === $dob && $dt1->format($format) === $doj) {
  //  return true;
  //  }
  //  else{
  //   echo "Date Format is not correct";exit;
  //  }
  }


?>