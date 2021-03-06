<?php 

session_start();

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="hr_reporting/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="hr_reporting/bootstrap4/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-group" method="POST">

      <h1 class="h5 mb-3 font-weight-normal">Group HRD Reporting</h1>
      <input name="key" class="form-control" type="password" placeholder="Your Access Key" required autofocus><br>
      <button class="btn btn-primary" name="submit" type="submit">Login to Reports</button>
      <?php
      ob_start();
		if(isset($_POST['submit']))
			{ 
				$key = $_POST['key']; 
        $_SESSION['log'] = $key;

			if ($key == "burgan2018") 
				{					
					echo'<script> window.location="/hr_reporting/index.php"; </script> ';
				}
        elseif ($key == "burgan2018edit") 
        {         
          echo'<script> window.location="/hr_reporting/indexedit.php"; </script> ';
        }

         elseif ($key == "burgan2018train") 
        {         
          echo'<script> window.location="/hr_reporting/td.php"; </script> ';
        }

			else
				{
					?>

					<div class="alert alert-warning alert-dismissable">
				    <button type="button" class="close" data-dismiss="alert">&times;</button>
				    <strong>Oh snap!</strong> Invalid Key.
				  </div>


					<?php
				}
			}



	?>
    </form>

    

  </body>
</html>

