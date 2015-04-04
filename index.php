<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PlayFantasy365 || Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
	<!-- script for countdown --> 
	<script src="js/countdown.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">PlayFantasy365 Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			
			<!---
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
			-->
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
		
			

            <!-- Blog Entries Column -->
			<div class="col-md-6">							
			
                <h1 class="page-header">
                    PlayFantasy365 Blog
					<br>
                    <small> Where the game is born </small>
                </h1>
				
				
				
	<?php
		include("connect.php");
		$row_count = $rs->num_rows;
		$i = 0;
		while($row[$i] = $rs->fetch_assoc()){
			$i= $i+1;
		}
		
		for($i = $row_count-1; $i>=0; $i--){ 
		$post_title = $row[$i]['title'];
		$post_details = $row[$i]['post'];
		$aid = $row[$i]['author_id'];
		$post_id = $row[$i]['id'];
		$post_date = $row[$i]['date_posted'];
		
		?>
					

                <!-- First Blog Post -->

				
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                     <a href= <?php echo $row[$i]['url'] ?> > <?php echo $row[$i]['first_name'] ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date?></p>
                <hr>               
                <p> <pre><?php echo $post_details ?></pre> </p>


                <hr>
				<?php
				}
				//mysql_close();
				?>
				
                <!-- Pager -->
				
				<!--
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
				
				-->

            </div>
			
			<!--- mid section-->
			
			<div class="col-md-2">
				<div class="row">
					<div class="well">
					
					
					
					<div id="poll-container">
						<h3>Poll</h3>
						<form id='poll' action="poll.php" method="post" accept-charset="utf-8">
							<p>Pick your captain of the month:</p>
							<p>
							<input type="radio" name="poll" value="opt1" id="opt1" />
								<label for='opt1'>&nbsp;Aguero</label><br />
							<input type="radio" name="poll" value="opt2" id="opt2" />
								<label for='opt2'>&nbsp;Rooney</label><br />
							<input type="radio" name="poll" value="opt3" id="opt3" />
								<label for='opt3'>&nbsp;Di Maria</label><br />
							<input type="radio" name="poll" value="opt4" id="opt4" />
								<label for='opt4'>&nbsp;Benteke</label><br />
							<input type="radio" name="poll" value="opt5" id="opt5" />
								<label for='opt5'>&nbsp;Sterling</label><br />
							<input type="radio" name="poll" value="opt6" id="opt6" />
								<label for='opt6'>&nbsp;Satej</label><br /><br />
							<input type="submit" value="Vote &rarr;" /></p>
						</form>
					</div>
					</div>
					<div class="well">
						<h4>Countdown </h4> 
						<h5> Gameweek 32 </h5>
						<script type="application/javascript">

							var myCountdownTest = new Countdown({
								 	year	: 2015,
									month	: 4, 
									day		: 11,
									width	: 170, 
									height	: 50,
									rangeHi : "day"
									
									});	
						</script>

					</div>
				</div>		
			</div
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">			
			    <!-- Side Widget Well -->
					<div class="well">
						<h4>Dream Team </h4>
						<h6> powered by  &copyTotalFPL</h6>
						<iframe src="http://totalFPL.com/DreamTeam/DreamTeam/?Small=True" width="310" height ="550"></iframe>
					</div>

					
                <div class="well">
                    <h4>Physio Room</h4>
					<div  style="width:290px; text-align:center; font-family:Verdana; font-size:11px;">
					<iframe src="http://www.physioroom.com/affiliate/common/syndicate_table2_mini.php?w=270" width="290" height="400" frameborder="0"></iframe>
					<p>Visit <a href="http://www.physioroom.com" rel="nofollow" target="_blank">PhysioRoom.com</a> for more injury information</p></div>

					</div>


                </div>
				</div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PlayFantasy365</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
