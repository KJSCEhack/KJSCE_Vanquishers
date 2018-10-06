<?php  
$hostname="localhost"; 
$dbname="kjsce_hackathon"; 
$Username="root"; 
$Password="qweasdzxc"; 

$conn = mysqli_connect($hostname,$Username,$Password,$dbname); 
 
if(!$conn) 
{ 
    die("connection failed:" .mysqli_connect_error()); 
 
}  
mysqli_close($conn); 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
        <strong>Vanquishers</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/getting-started/" target="_blank">Free Demo</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="login_page.html" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-sign-in mr-2">           Login</i>
            </a>
          </li>
        </ul>

      </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">
            <!-- Material form register -->
            <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign up</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;">

                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                <label for="materialRegisterFormFirstName">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormMiddleName" class="form-control">
                                <label for="materialRegisterFormMiddleName">Middle name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormLastName" class="form-control">
                                <label for="materialRegisterFormLastName">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="md-form mt-0">
                        <input type="text" id="materialRegisterFormAddress" class="form-control">
                        <label for="materialRegisterFormAddress">Address</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            Enter Address according to the document for address proof
                        </small>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                        </small>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="md-form">
                                <select id="materialRegisterFormGender" class="form-control mdb-select md-form colorful-select dropdown-primary">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-control">
                                <div class="md-form">
                                    <input type="date">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                        <label for="materialRegisterFormPhone">Phone number</label>
                        <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            Optional - for two step authentication
                        </small>
                    </div>

                    <!-- Newsletter -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                </form>
                <!-- Form -->

            </div>

            </div>
            <!-- Material form register -->
        </div>
    </main>
    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download MDB
                <i class="fa fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start free tutorial
                <i class="fa fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
</body>

</html>