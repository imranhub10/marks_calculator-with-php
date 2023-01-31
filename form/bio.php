<?php
    if(isset($_POST['btn'])){
        $username = $_POST['$user_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
    }
?>
<h2>Username: <?php if(isset($username)){
    echo $username;
}?></h2>
<h2>Email: <?php if(isset($email)){
    echo $email;
}?></h2>
<h2>Phone: <?php if(isset($phone)){
    echo $phone;
}?><h2>
<h2>Date Of Birth: <?php if(isset($dob)){
    echo $dob;
}?></h2>
<h2>Age: <?php if(isset($age)){
    echo $age;
}?></br>