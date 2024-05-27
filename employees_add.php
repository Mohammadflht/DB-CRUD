<?php require_once 'employees_process.php'; ?>
<?php require_once 'navigation.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/assets/insurance.png" type="image/x-icon">
</head>

<body>

    <form method="post" action="employees_process.php">
        <div class="container">
            <div class="form-flex">
                <div>
                    <label for="code"><b>National Code</b></label>
                    <input type="text" id="code" name="code" placeholder="" required>

                    <label for="firstName"><b>First Name</b></label>
                    <input type="text" id="firstName" placeholder="" name="firstName" required>

                    <label for="lastName"><b>Last Name</b></label>
                    <input type="text   " id="lastName" placeholder="" name="lastName" required>

                    <label for="fatherName"><b>Father Name</b></label>
                    <input type="text" id="fatherName" name="fatherName" placeholder="" required>
                </div>
                <div>
                    <label for="address"><b>City</b></label>
                    <input type="text" id="address" name="address" placeholder="" required>

                    <label for="phoneNumber"><b>Phone</b></label>
                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="" required>

                    <label for="empDate"><b>emp Date</b></label>
                    <input type="text" id="empDate" name="empDate" placeholder="" required>
                </div>
            </div>

            <div class="clearfix">

                <input type="submit" name="save" class="btn" value="Submit">
            </div>
        </div>
    </form>










    <!-- <form method="post" action="process.php">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age"><br>

  <label for="salary">Salary:</label><br>
  <input type="text" id="salary" name="salary"><br>

  <input type="submit" name="save" value="Submit">
</form> -->

</body>

</html>