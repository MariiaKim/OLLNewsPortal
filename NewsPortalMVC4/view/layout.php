<nav class="one">
  <ul class='topmenu'>
	<li><a href="#">Kategoriad<i class="fa fa-angle-down"></i></a>
	  <ul class="submenu"> 
	  <?php
			Controller::AllCategory();
		?> 
	  </ul> 
	</li>
	<li><a href="iwww">Info</a></li> 
	<li><a href="./">Stardileht<a></li>
	<li><a href="registerForm">Register </a></li> 
	<div class="pull-right">
		<li>
			<form action="search">
				<input type="text" name="otsi"> 
				<input type="submit" value="Otsi"> 
			</form> 
		</li> 
	  </div> 
	</ul> 
</nav>