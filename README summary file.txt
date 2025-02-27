In the file login.php

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

// The code above is the html code that creates the sign-up sheet to register your details in the database.


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


//The code above creates the sign in sheet that logs in an existing user registered in the database.

<script src="script.js"></script>

//This code links this page to the javascript page

 <form method="post" action="register.php">

//In the forms, this line of code links the form to the php page where the session start is located.

<?php 

$host="localhost";
$user="root";
$pass= "";
$db="oop_login";
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
   echo"Failed to connect to DB".$conn->connect_error;
}
?>

//This code located in the connect.php file connects the php pages to the database. It specifies the host, specific database, and password for the database if any and in case the connection does not work it gives an error message.

if(isset($_POST['signup'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

      $checkEmail="SELECT * from users where email='$email'";
      $result=$conn->query($checkEmail);
      if($result->num_rows > 0){
        echo "Email Address Already Exists !";
      }   
      else{
        $insertQuery="INSERT INTO users(firstname,lastname,email,password) 
                      VALUES('$firstname','$lastname','$email','$password')";
                    if ($conn->query($insertQuery)==TRUE) {
                        header("location: login.php");
                    }
                    else{
                        echo "Error:";
                    }
      }
//This code specifies which user input goes into which database space. This one specifically deals with the input coming from the signup form. If the input is successful, it directs the user to the sign in form to now log in to the system. It also displays an error message just in case the input connection doesn't work.

if (isset($_POST['signin'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
       session_start();
       $row=$result->fetch_assoc();
       $_SESSION['email']=$row['email'];
       header("Location: homepage.php");
       exit();
    }
    else{
        echo "Not found, Incorrect Email or Password";
    }
    
}

This code specifies where the input from the sign-in form goes in the database. Also, in both PHP codes above, the password is hashed so that even the database operator cannot know what the user's password is. If input is successful, it leads the user to the homepage, and if unsuccessful, it displays an error message confirming that the email and passwords are incorrect.

<?php 
session_start();
include("connect.php");
?>

//This code in the homepage.php file starts a session connecting to the connect.php file.

<?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users. * FROM users WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstname'].' '.$row['lastname'];
                }
            }
            ?>

//This code in the homepage displays the first and last name of the user from the database.

const signupbutton=document.getElementById('signupbutton');
const signinbutton=document.getElementById('signinbutton');
const signinform=document.getElementById('signin');
const signupform=document.getElementById('signup');

signupbutton.addEventListener('click', function(){
    signinform.style.display="none";
    signupform.style.display="block";
})
signinbutton.addEventListener('click', function(){
    signinform.style.display="block";
    signupform.style.display="none";
})

//This code from JavaScript switches the visible form in the login.php form from the signup form the the signin form since both codes are in the same page.

 

