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
                <form action="form_result.php" id="register" method="post">
                    
                <!-- Name Section -->
                    <label>Name : </label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                    <br><br>
                
                    <!-- Phone Section --> 
                    <label>Phone : </label>
                    <br>
                    <input type="number" name="phone" id="phone" placeholder="Enter Your Phone NO.">
                    <br><br>

                    <!-- Email Section -->
                    <label>Email Account : </label>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                    <br><br>

                    <!-- Gender Section -->
                    <label id="gender">Gender : </label>
                    <br>
                    <input type="radio" name="gender" id="male">
                    <span id="male">Male</span>
                    
                    <input type="radio" name="gender" id="female">
                    <span id="female">Female</span>
                    <br><br>

                    <!-- Language Section -->
                    <label id="language">Known Language : </label>
                    <br>
                    <input type="checkbox" name="language" id="language">
                    <span id="english">Bangla</span>

                    <input type="checkbox" name="language" id="language">
                    <span id="english">English</span>
                    <br><br>
                    <input type="submit" name="submit_btn"id="submit">
                </form>
            </div>
        </div>
    </body>
</html>