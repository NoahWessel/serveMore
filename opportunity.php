<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Apply</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

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
        		<a href="index.html" class="navbar-brand ">ServeMore</a>

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
               		<li class="active"><a href="apply.html">APPLY</a></li>
               		<li><a href="promote.html">PROMOTE</a></li>
               		<li><a href="profile.php">MY PROFILE</a></li>
               		<li><a href="report.html">REPORT</a></li>
           		</ul>
         	</div>
		</div>
    </div>

		<!-- Search -->
		<div class="container pageBody text-center ">
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

			<p class="pageHeader pageBody" id="selectionTitle">APPLY</p>

			<hr width="50%">

			<!--Row 1-->
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="content">
							<img class="img-responsive" src="css/images/apply.jpg" style="margin-bottom:3em;"/>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc urna, vulputate vitae nulla et, sollicitudin ultrices justo. Sed sit amet rutrum tellus. Aenean pretium dignissim neque non porttitor. Pellentesque massa tellus, tempus nec consequat nec, porta at elit. Mauris sagittis elit arcu, sed condimentum ex elementum vehicula. Donec dui elit, egestas at nibh quis, luctus porta mi. Sed vitae felis nibh. Aenean at orci sed augue maximus rutrum et sed lorem. Cras eu vulputate augue, vitae blandit enim. Nam felis dui, cursus non orci non, blandit varius neque.
							</p>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>

			<!-- Apply Button -->
			<div class="container text-center bottomBtns">
				<div class="row" style="padding-top:80px">
					<div class="col-md-12">
						<p><a href="internships.html" class="btn btn-warning btn-outline btn-lg" role="button">Apply Now</a></p>

					</div>
				</div>
			</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
