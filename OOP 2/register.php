<?php 

include 'connect.php';

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


}

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
?>