<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form In PHP</title>
</head>
<body>
    <form action="bio.php"method="POST">
        <label>Username</label><br>
        <input type="text" name="user_name"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Phone number</label><br>
        <input type="number" name="phone"><br>
        <label>Date Of Birth</label><br>
        <input type="text" name="dob"><br>
        <label>Age</label><br>
        <input type="number" name="age"><br>
        <br>
        <input type="submit" value="Submit" name="btn">
    </form>

</body>
</html>