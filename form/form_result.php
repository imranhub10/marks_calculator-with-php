<?php
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $language = $_POST['language'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="perfect_form.css">
    </head>
    <body>
    
        <div class="main">
            <div class="register">
                <h2>Register Here</h2>
                    <label>Name : </label><br>
                    <?php if(isset($name)){echo $name;} ?><br><br>
                    <label>Phone : </label><br>
                    <?php if(isset($phone)){echo $phone;} ?><br><br>
                    <label>Email : </label><br>
                    <?php if(isset($email)){echo $email;} ?><br><br>
                    <label>Gender : </label><br>
                    <?php if(isset($gender)){echo $gender;} ?><br><br>
                    <label>Known Language : </label><br>
                    <?php if(isset($language)){echo $language;} ?><br><br>
            </div>
        </div>
    </body>
</html>