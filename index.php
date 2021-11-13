<?php
// Include config file
require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // removes backslashes
$username = $_POST['username'];
  //escapes special characters in a string
 
 $password = $_POST['password'];


  $query = "INSERT into `users` (username, password)
VALUES ('$username', '$password')";
  $result = mysqli_query($link,$query);
  if($result){
    // Redirect to explore page
    header("location: explore.php");
  }
}
// Define variables and initialize with empty values

 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Validate username
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter a username.";
//     } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
//         $username_err = "Username can only contain letters, numbers, and underscores.";
//     } else{
//         // Prepare a select statement
//         $sql = "SELECT id FROM users WHERE username = ?";
        
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = trim($_POST["username"]);
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 /* store result */
//                 mysqli_stmt_store_result($stmt);
                
//                 if(mysqli_stmt_num_rows($stmt) == 1){
//                     $username_err = "This username is already taken.";
//                 } else{
//                     $username = trim($_POST["username"]);
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Validate password
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter a password.";     
//     } elseif(strlen(trim($_POST["password"])) < 6){
//         $password_err = "Password must have atleast 6 characters.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     // Validate confirm password
//     if(empty(trim($_POST["confirm_password"]))){
//         $confirm_password_err = "Please confirm password.";     
//     } else{
//         $confirm_password = trim($_POST["confirm_password"]);
//         if(empty($password_err) && ($password != $confirm_password)){
//             $confirm_password_err = "Password did not match.";
//         }
//     }
    
//     // Check input errors before inserting in database
//     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
//         // Prepare an insert statement
//         $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
//             // Set parameters
//             $param_username = $username;
//             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stemt)){
//                 // Redirect to login page
//                 header("location: app.php");
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }

//             // Close statement
//             mysqli_stmt_close($stmt);
//         }
//     }
    
//     // Close connection
//     mysqli_close($link);
// }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <!-- Content here -->
      <!-- Nav -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Raffle</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">amount</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">avater</a>
              </li>
           
            
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
       <!-- Nav  end-->
      
    
       <br>

       <!-- logos -->
       <div class="container">
         
        <br>
        <br>

<form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" >
       
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"  name="password" >Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class=",form-check-input" id="exampleCheck1">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">I am a...</label><BR>
            <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Gamer</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
    <label class="form-check-label" for="inlineCheckbox3">Student</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
    <label class="form-check-label" for="inlineCheckbox3">Vegetarian/Vegan</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
    <label class="form-check-label" for="inlineCheckbox3">Pet Owner</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">Cyclist</label>
  </div>


            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">I like...</label><BR>
              <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">Eating-out</label>
    </div>
  
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
      <label class="form-check-label" for="inlineCheckbox3">Shopping clothes/groceries</label>
    </div>
  
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
      <label class="form-check-label" for="inlineCheckbox3">Gyming</label>
    </div>
  
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
      <label class="form-check-label" for="inlineCheckbox3">Cosmetics</label>
    </div>
  
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">Saving</label>
    </div>

  
              </div>
  

          <button type="submit" class="btn btn-primary">Submit</button>
      
</form>

    <br>
        <br>
        
        <br>
        <br>
        
        <br>
        <br>
        <br>
        
        <br>
        <br>
        
        <br>
        <br>
    <footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom">
        <div class="container">
          <span class="text-muted">2021-All rights reserved</span>
        </div>
      </footer>
   
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>