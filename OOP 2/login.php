<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form in HTML and CSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input group">
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <label for="fname">First Name</label>
            </div>
            <div class="input group">
                <input type="text" name="lname" id="lname" placeholder="Last Name">
                <label for="lname">First Name</label>
            </div>
            <div class="input group">
                <input type="email" name="email" id="email" placeholder="Email">
                <label for="email">Email</label>
            </div>
            <div class="input group">
                <input type="password" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signinbutton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signin">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input group">
                <input type="email" name="email" id="email" placeholder="Email">
                <label for="email">Email</label>
            </div>
            <div class="input group">
                <input type="password" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signin">
        </form>
        <div class="links">
            <p>Dont Have Account yet?</p>
            <button id="signupbutton">Sign Up</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>