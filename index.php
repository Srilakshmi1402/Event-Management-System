
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/images.png">

    <title>Home | Tech Fest 2022</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

    
    <link href="css/animate.css" rel="stylesheet">

    
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    	
		    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
	    	<a class="navbar-brand"><span><img src="images/images.png" height="30" width="33"></span>&nbsp; <strong>Tech Fest 2022 </strong></a>

		    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		      	<ul class="navbar-nav mr-auto">
              
              <?php 

                if (isset($_SESSION['id'])) {
                  $user_id = $_SESSION['id'];
                  echo
                      "<li class=\"nav-item active\">
                        <a class=\"nav-link active\" href=''> HOME</a>
                       </li>
                       <li class=\"nav-item active\">
                        <a class=\"nav-link active\" href=\"evntreg.php\"> EVENT REGISTRATION</a>
                       </li>
                       <li class=\"nav-item active\">
                        <a class=\"nav-link active\" href='user.php?u_id=$user_id'> USER PROFILE</a>
                       </li>";
                }

              ?>

		        </ul>

            <?php

              navbar_login();
              logout();

            ?>

		    </div>
		
    </nav>

  
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 animated fadeInDown">#Tech Fest 2022</h1>
        <h1 class="display-5 animated fadeInDown"></h1>
        <h1 class="display-5 animated fadeInDown">SRM University AP</h1>
       
        <p>Tech Fest 2022 dives into the hot new trends in technology with a lineup of programs like coderace, roborace, 3D printing, IoT workshops,AI and ML workshops, design bootcamps, gaming development, circuit debugging and deep learning.</p>
       
      </div>
    </div>

    <div class="container">
      <hr>
      
      <div class="row">
		<div class="col-sm-12">
			<h2 align="center" class="animated fadeIn">Oh Yeah! You heard it right!!</h2><br>
		</div>      	
      </div>
      <center>
      <div class="row">
        	<div class="col-lg-4 col-xs-6">
                <div class="thumbnail">
                    <img src="images/code.png" height="105" width="170" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong>CODERACE</strong></h3>
                    <p style="font-size: 18px;" class="animated fadeIn">Try your hand at one of the problems, and submit your solution in the given time Successfully.</p>
                    <span>Date and Time :21-11-2022 2-3PM</span>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <img src="images/server.png" height="105" width="105" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong>IOT WORKSHOP</strong></h3>
                    <p style="font-size: 18px;" class="animated fadeIn">Internet of Things (IoT) finds its application in industries that prefers automation, energy efficient systems, smart devices etc.</p>
                    <span>Date and Time :21-11-2020 2-3PM</span>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="images/chip.png" height="105" width="105" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong>CIRCUIT DEBUGGING</strong></h3>
                    <p style="font-size: 18px;" class="animated fadeIn">Pretty much the same thing as software debugging: Attempting to determine why the circuit fails to operate in the desired manner. </p>
                    <span>Date and Time :21-11-2020 2-3PM</span>
                </div>
            </div>                 
        </div>
        </center>
      <hr>
      <br>
    </div> 

    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
