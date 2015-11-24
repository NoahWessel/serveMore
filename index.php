<?php session_start();
require_once 'tools.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style></style>
    </head>

    <body class="home">
        <!--NAV BAR-->
	<div class="navbar-center navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand ">ServeMore</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
        	</div>

         	<div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about.html">ABOUT</a></li>
               		<li><a href="apply.html">APPLY</a></li>
               		<li><a href="promote.html">PROMOTE</a></li>
                        <?php
                            if (isset($_SESSION['userID']))
                            {
                                $uName = strtoupper($_SESSION['userName']);
                                echo "<li><a href='profile.php'>$uName</a></li>";
                                echo "<li><a href='?logout'>LOGOUT</a></li>";

                                if (isset($_GET['logout'])) logout();
                            }
                            else echo "<li><a href='#' data-toggle='modal' data-target='#login-modal'>LOGIN</a></li>";
                        ?>
               		<li><a href="report.html">REPORT</a></li>
                    </ul>
                </div>
            </div>
        </div>

	<!-- Search -->
        <div class="container pageBody text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group" id="adv-search">
                        <input type="text" class="form-control" placeholder="Search for Opportunities" />
                	<div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <div class="dropdown dropdown-lg">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="filter">Filter by</label>
                                                <select class="form-control">
                                                    <option value="0" selected>All Snippets</option>
                                                    <option value="1">Featured</option>
                                                    <option value="2">Most popular</option>
                                                    <option value="3">Top rated</option>
                                                    <option value="4">Most commented</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="contain">Author</label>
                                                <input class="form-control" type="text" />
                                            </div>

                                            <div class="form-group">
                                                <label for="contain">Contains the words</label>
                                                <input class="form-control" type="text" />
                                            </div>

                                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                	</form>
                                    </div>
                                </div>
                        	<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<!--CONTENT-->
        <!-- Text & Button -->
        <div class="container text-center" id="homeContent">
            <div class="row">
                <div class="col-md-12">
                    <p id="homeHeader">WELCOME</p>
                    <p id="homeText">
                        Are you a Morehead State University student seeking to find experience in the community? How about a local Morehead business or resident seeking assistance? ServeMore aims to connect both sides in a meaningful way that makes Morehead a better place to live and grow. Take a few minutes to browse the site and see what it's all about!
                    </p>

                    <!-- Get Started Button -->
                    <p class="text-center"><a href="#" class="btn btn-warning btn-outline btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Get Started</a></p>
                </div>
            </div>
        </div>

        <!-- MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <!-- Begin # Login Form -->
                    	<form id="login-form">
                            <div class="modal-body">
                                <div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Type your email and password.</span>
                            	</div>

                                <input id="login_username" class="form-control" type="text" placeholder="Email" required>
                                <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            </div>

                            <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            	</div>

                                <div>
                                    <button id="login_register_btn" type="button" class="btn btn-link">Register Now</button>
                            	</div>
                            </div>
                    	</form>
                    	<!-- End # Login Form -->

                    	<!-- Begin | Register Form -->
                    	<form id="register-form" style="display:none;">
                            <div class="modal-body">
                                <div id="div-register-msg">
                                    <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-register-msg">Register an account.</span>
                            	</div>

                            	<input id="register_email" class="form-control" type="text" placeholder="Email" required>
                                <input id="register_firstName" class="form-control" type="text" placeholder="First Name" required>
                                <input id="register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            	<input id="register_password" class="form-control" type="password" placeholder="Password" required>
                                <input id="register_password2" class="form-control" type="password" placeholder="Retype Password" required>
                            </div>

                            <div class="modal-footer">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            	</div>

                            	<div>
                                    <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            	</div>
                            </div>
                    	</form>
                    	<!-- End | Register Form -->
                    </div>
                    <!-- End # DIV Form -->
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
