<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>My Profile</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
     <!--NAV BAR -->
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

         	<div class="collapse navbar-collapse">
           		<ul class="nav navbar-nav navbar-right">
               		<li><a href="about.html">ABOUT</a></li>
               		<li><a href="apply.html">APPLY</a></li>
               		<li><a href="promote.html">PROMOTE</a></li>
               		<li class="active"><a href="profile.php">MY PROFILE</a></li>
               		<li><a href="report.html">REPORT</a></li>
           		</ul>
         	</div>
		</div>
    </div>

		<!--CONTENT-->
	    <div class="container pageBody text-center ">

	    	<!-- Search -->
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

			<!-- PROFILE -->
			<div class="container vcenter">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 			<div class="well profile">
            			<div class="col-sm-12">
                                        <?php
                                            echo "<div class='col-xs-12 col-sm-8'>";
                                            $conn = new mysqli('localhost', 'root', '', 'servemoredata');
                                            if ($conn->connect_error) die($conn->connect_error);
                                            
                                            if (isset($_SESSION['userID']))
                                            {
                                                $user = $_SESSION['userID'];
                                                $query = "SELECT * FROM users WHERE id=$user";

                                                $result = $conn->query($query);
                                                if (!$result) die($conn->error);

                                                $u_row = $result->fetch_array(MYSQLI_ASSOC);
                                                if ($u_row)
                                                {
                                                    echo '<h2>' . $u_row['firstname'] . ' ' . $u_row['lastname'] . '</h2>';
                                                    echo '<p><strong>About: </strong> ' . $u_row['about'] . '</p>';
                                                }
                                                $result->close();

                                                $query = "SELECT skill FROM skills WHERE user=$user";
                                                $result = $conn->query($query);
                                                if (!$result) die($conn->error);

                                                echo '<p><strong>Skills: </strong>';
                                                for ($i = 0; $i < $result->num_rows; ++$i)
                                                {
                                                    $result->data_seek($i);
                                                    $s_row = $result->fetch_array(MYSQLI_ASSOC);
                                                    echo '<span class="tags">' . $s_row['skill'] . '</span>';
                                                }

                                                echo "</p></div><div class='col-xs-12 col-sm-4 text-center'>"; 
                                                echo "<img src='";
                                                
                                                if ($u_row['ext'])                      
                                                {
                                                    $ext = $u_row['ext'];                     
                                                    echo "profilePics/$user.$ext";
                                                }
                                                else
                                                    echo "css/images/GenericPerson.png";
                                                    
                                                echo "' class='img-circle img-responsive'></div>";

                                                $result->close();
                                            }
                                            else
                                                echo "NO USER LOGGED IN";
                                            
                                            $conn->close();
                                        ?>
            			</div>
            			<div class="col-xs-12 divider text-center">
                			<div class="col-xs-12 col-sm-4 emphasis">
                    			<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
								<button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
								<div class="btn-group dropup btn-block">
                      				<button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        				<span class="caret"></span>
                        				<span class="sr-only">Toggle Dropdown</span>
                      				</button>
                      				<ul class="dropdown-menu text-left" role="menu">
                        				<li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        				<li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        				<li class="divider"></li>
                        				<li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        				<li class="divider"></li>
                        				<li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      				</ul>
                    			</div>
                			</div>
            			</div>
    	 			</div>
				</div>
			</div>

		</div>

		</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
