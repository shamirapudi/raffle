<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
       
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
        
        <div class="card mx-auto" style="width: 100px;height=100px">
            <img src="img/logo/telkom.png" class="card-img-top" alt="...">
          
            

          </div>
         
        <br>
        <br>
        

      </div>
        <!-- heading-->
        <figure class="text-center">
            <blockquote class="blockquote">
                <h1 class="display-6 ">Telkom</h1>
            </blockquote>
            <h6 class="lead" >Choose campaign</h6>
          </figure>
          <div class="card mx-auto" style="width: 18rem;">
            <img src="img/campgn/fibre.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h6 >Unlimited Fibre</h6>
              <p class="card-text">120 tickets</p>
            </div>
            <a href="#" class="btn btn-primary" data-target="#exampleModal"  data-toggle="modal" >Participate</a>
          </div>
          <br><br>


          <div class="card mx-auto" style="width: 18rem;">
            <img src="img/campgn/monate.png" class="card-img-top" alt="...">
            <div class="card-body">
              
            <h6 >Monate</h6>
              <p class="card-text">54 tickets</p>
            </div>
            <a href="#" class="btn btn-primary"  >Participate</a>
          </div>
          <br><br>
       
          <div class="card mx-auto" style="width: 18rem;">
            <img src="img/campgn/pay.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h6 >Telkom Pay</h6>
              <p class="card-text">95 tickets</p>
            </div>
            <a href="#" class="btn btn-primary"  >Participate</a>
          </div>
          <br><br>

           <!-- heading  end-->
      <!-- logos end-->
     
  
      
        <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">2021-All rights reserved</span>
          </div>
        </footer>
     
 
    </div> 




    <div class="container">

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <div id="smartwizard">
                            <ul>
                                <li><a href="#step-1"><i class="bi bi-camera-reels"></i><br /><small></small></a></li>
                                <li><a href="#step-2"><i class="bi bi-emoji-smile"></i> <br /><small></small></a></li>
                                <li><a href="#step-3"><i class="bi bi-emoji-frown"></i><br /><small></small></a></li>
                                <li><a href="#step-4"><i class="bi bi-ticket"></i><br /><small></small></a></li>
                                <li><a href="#step-5"><i class="bi bi-hand-thumbs-up"></i><br /><small></small></a></li>
                            </ul>
                            <div class="mt-4">
                                <div id="step-1">
                                    <div class="row">

                                     
                                            <video controls="controls" src="vid/fibre.mp4">
                                                Your browser does not support the HTML5 Video element.
                                            </video>
                                          </div>

                                      
                                  <!--  <div class="row mt-3">
                                      <a href="#" class="btn btn-primary" data-target="#exampleModal"  data-toggle="modal" >View</a>
                               
                                    </div>-->
                                </div>



                                <div id="step-2">
                                    <div class="row">
                                        <h6 class="lead" >What i liked about the AD: </h6>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                              The product 
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                            The features
                                            </label>
                                          </div>

                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                            The pricing
                                            </label>


                                          </div>
                                    </div>
                                </div>


                                <div id="step-3" class="">
                                    <div class="row">
                                        <h6 class="lead" >What i disliked about the AD: </h6>
                                    </div>
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                              The product
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                            The features
                                            </label>
                                          </div>

                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked" checked>
                                            The pricing
                                            </label>

                                            
                                          </div>
                                    </div>
                                </div>


                                <div id="step-4" class="">
                                    <div class="row">
                                        <h6 class="lead text-center" >Congratulations! </h6>
                                    </div>
                                    <br>
                                      
        <div class="card mx-auto">
        <div class="text-center">
           <img src="img/campgn/fibrebanner.png" class="card-img-top" alt="..." style="width: 450px;height=450px">
       </div>   
            

          </div>
                                    <div class="row">
                                      <p class="text-center">
                                           %30 OFF VOUCHER OFF!<BR>
                                            You can use it on this products at your nearest store upon checkout!<br>
                                         
                                      </p>
                                    </div>
                                </div>

                                <div id="step-5" class="">
                                <p class="text-center">
                                    <i class="bi bi-ticket-perferated"></i>
</p> 
  
                                    <div class="row">
                                        <h6 class="lead text-center" > +120 raffles earned! </h6>
                                    </div>
                          
                                    <div class="row">
                                      <p class="text-center">
                                          You now have a total of <strong>834 raffles tickets!</strong><BR>
                                            You can now use them to enter raffles to win amazing prizes!<BR>
                                                <a href="raffles.php">   view prizes</a>
                                      </p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'>$(document).ready(function(){

$('#smartwizard').smartWizard({
selected: 0,
theme: 'arrows',
autoAdjustHeight:true,
transitionEffect:'fade',
showStepURLhash: false,

});

});</script> 
  </body>
</html>