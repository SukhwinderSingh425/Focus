
		
<div class="header-w3layouts">
			<!-- Navigation -->
			<nav id="nav" class="navbar navbar-default">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="index.php">MAMS</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="nav navbar-nav navbar-left">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<!--	
						<li><a href="#services">Facilities</a></li>
						<li><a class="page-scroll scroll" href="#gallery">Laboratory</a></li>
						<li><a class="page-scroll scroll" href="#clients">Clients</a></li>
					-->
						<?php
						if(isset($_SESSION['name']))
							{
								$ut=$_SESSION['ut'];
								$name=$_SESSION['name'];
								$id=$_SESSION['id'];
								if($ut=='user')
								{
									echo"<li><a href='index.php'>Home</a></li>";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='about.php'>About</a></li>
										<li><a href='contact.php'>Contact</a></li>";
										echo "</ul>	</li>
										<li><a href='find.php'>Find Doctor</a></li>";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
										echo $name;
										echo'<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='profile.php?id=5'>View Profile</a></li>
										<li><a href='cp.php'>Change Password</a></li>
										<li><a href='logout.php'>Logout</a></li>";
										echo "</ul>	</li> ";
								}
								else if($ut=='admin')
								{
									echo"<li><a href='index.php'>Home</a></li>";
									
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='addadmin.php'>Add Admin</a></li>
										<li><a href='adddoc.php'>Add Doctor</a></li>
										<li><a href='addhosp.php'>Add Hospital</a></li>";
										echo "</ul>	</li> ";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='viewdoc.php'>View Doctor</a></li>
										<li><a href='viewhosp.php'>View Hospital</a></li>";
										echo "</ul>	</li> ";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
										echo $name;
										echo'<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='profile.php?id=2'>View Profile</a></li>
										<li><a href='cp.php'>Change Password</a></li>
										<li><a href='logout.php'>Logout</a></li>";
										echo "</ul>	</li> ";
										
								}
								else if($ut=='doctor')
								{
									echo"<li><a href='index.php'>Home</a></li>";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='about.php'>About</a></li>
										<li><a href='contact.php'>Contact</a></li>";
										echo "</ul>	</li> ";
										echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
										echo $name;
										echo'<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='profile.php?id=3'>View Profile</a></li>
										<li><a href='cp.php'>Change Password</a></li>
										<li><a href='logout.php'>Logout</a></li>";
										echo "</ul>	</li> ";
											
								}
									
							}
								else
								{
									echo"<li><a href='index.php'>Home</a></li>";
									echo '<li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>';
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='about.php'>About</a></li>
										<li><a href='contact.php'>Contact</a></li>";
										echo "</ul>	</li> 
										<li><a href='find.php'>Find Doctor</a></li>
										<li><a href='login.php'>Login</a></li>
										<li><a href='signup.php'>Signup</a></li>";
										
								}
								?>
						
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				<div class="w3-header-top-right">
					<div class="email-right">
						<p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:mail@example.com" class="info"> MAMSD1514@gmail.com</a></p>

					</div>
					<div class="w3-header-top-right-text">
						<div class="email-right">
						<p><span class="fa fa-phone" aria-hidden="true"></span> +919056411240</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</nav>
		</div>


		
	