<?php
	date_default_timezone_set('Europe/Stockholm');
	include 'comments.inc.php';
	include 'dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<!--.-->
		<title>Meal Calendar</title>
		<link 	rel = "stylesheet"
				type = "text/css"
				href = "style.css"/>
		<meta charset = "utf-8" />
	</head>
	<body>
		<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="calendar.php">Calendar</a></li>
		<li><a href="meatballs.php">Meatballs</a></li>
		<li><a href="pancakes.php">Pancakes</a></li>
		<li class="log"><?php
			if (isset($_SESSION['id'])) {
				echo "You are logged in!";
				echo "<form method='POST' action='userLogout.php'>
					<button type='submit' name='logoutSubmit'>Logout</button>
				</form>";
			} else {
				echo "<form method='POST' action='getLogin.php'>
					<input type='text' name='uid'>
					<input type='password' name='pwd'>
					<button type='submit' name='loginSubmit'>Login</button>
				</form>";
			}
		?></li>
	</ul>
	<div class="month"> 
  <ul>
    <li>
      Month<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2<a href="pancakes.php"><img  class="thumbnail" src = "pancakespic.jpg"
			alt = "Picture of pancakes"/></a></li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17<a href="meatballs.php"><img  class="thumbnail" src = "meatballspic.jpg"
			alt = "Picture of meatballs"/></a></li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</body>
	
</html>