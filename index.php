<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
            <form class="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Employee Management</legend>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                            <div class="col-md-4">
                            <label class="">Please select csv column</label>
                                <div class="row">
                                        <div><label for="c1">emp_code : </label></div>     
                                        <select name="emp_code" id="emp_code">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                                </div> 
                                <div class="row">
                                       <div> <label for="c1">emp_name :</label>   </div>             
                                        <select name="emp_name" id="emp_name">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                                </div> 
                                <div class="row">
                                        <div><label for="c1">emp_department</label></div>
                                        <select name="emp_department" id="emp_department">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                       </select>
                                </div>
                                <div class="row">
                                        <div><label for="c1">emp_age</label></div>
                                        <select name="emp_age" id="emp_age">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                                </div>
                                <div class="row">
                                        <div><label for="c1">emp_experiance</label></div>
                                        <select name="emp_experiance" id="emp_experiance">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                                </div>
                                <div class="row">
                                        <div><label for="c1">date of birth</label></div>
                                        <select name="emp_dob" id="emp_dob">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                                </div>
                                <div class="row">
                                        <div><label for="c1">date of joining</label></div>
                                        <select name="emp_doj" id="emp_doj">
                                        <option value="0">column 1</option>
                                        <option value="1">column 2</option>
                                        <option value="2">column 3</option>
                                        <option value="3">column 4</option>
                                        <option value="4">column 5</option>
                                        <option value="5">column 6</option>
                                        <option value="6">column 7</option>
                                        <option value="7">column 8</option>
                                        <option value="8">column 9</option>
                                        <option value="9">column 10</option>
                                        </select>
                               </div> 
                        </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                            <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                            </div>
                        </div>
                        
                    </fieldset>
                </form>
            </div>
            <?php          
            include_once 'list.php';
               getEmployeeData();
            ?>
        </div>
    </div>
</body>
</html>