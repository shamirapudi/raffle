<?php
  include  'db/init.php';

 if (isset($_POST['enter']) && !empty($_POST['enter'])){
   $email = $_POST['email'];
   $password = $_POST['password'];

   if 
 }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome bro is everything working</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
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
      
       <!-- heading-->
      <h1 class="display-6 text-center">Explore</h1>
       <!-- heading  end-->
       <br>
       <!-- logos -->
       <div class="container">
        <form method="post">
        <div class="card mx-auto" style="width: 18rem;" >
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <input type="submit" name="enter" value="Delete" class="btn btn-primary">
          </div>
        </div>
</form>
        
      </div>
     
      <!-- logos end-->
     

      
        <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">2021-All rights reserved</span>
          </div>
        </footer>
     
 
    </div> 
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>