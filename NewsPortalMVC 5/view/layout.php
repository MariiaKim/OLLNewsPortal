<!DOCTYPE html>
<html>
<head>
	<title>NEWSPORTAL</title>
	<link rel="stylesheet"

	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
	crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	

	<!--
		        <link rel="stylesheet" href="
              https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              intergity="
              sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapps.com/css&family=Noto+Serif" rel="stylesheet">
	-->
	<meta charset="utf-8">

</head>
<body>
	<nav class="one">
		<ul class="topmenu"> <!--was mistake-->
		<li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
		<ul class="submenu">
		<?php
			Controller::AllCategory();
		?>
	</ul>
	</li>
	<li><a href="testError">Info</a></li>
	<li><a href="./">Stardileht</a></li>

<!-----start MVC3------>
<li><a href="registerForm">Register </a></li> 
	<div class="pull-right">
		<li>
			<form action="search">
				<input type="text" name="otsi"> 
				<input type="submit" value="Otsi"> 
			</form> 
		</li> 
	  </div> 

<!-----end MVC3------>
	

	</ul>
	</nav>

	<section>
		<div class = 'divBox'>
		<?php
		if(isset($content)){
			echo $content;
		}
		else{
			echo  '<h1>Content is gone!</h1>';
		}
		?>
	</div>
	</section>
	<hr>
	<p style="display:block; text-align:center;">JKTVR19 mart 2020 a. &copy</p>

</body>
</html>