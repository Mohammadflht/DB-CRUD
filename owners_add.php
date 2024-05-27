<?php require_once 'owners_process.php'; ?>
<?php require_once 'navigation.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/assets/insurance.png" type="image/x-icon">
</head>

<body>

    <form method="post" action="owners_process.php">
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

                    <label for="workAddress"><b>Work City</b></label>
                    <input type="text" id="workAddress" name="workAddress" placeholder="" required>

                    <label for="workTell"><b>Work Tell</b></label>
                    <input type="text" id="workTell" name="workTell" placeholder="" required>
                </div>
            </div>

            <div class="clearfix">

                <input type="submit" name="save" class="btn" value="Submit">
            </div>
        </div>
    </form>

</body>

</html>