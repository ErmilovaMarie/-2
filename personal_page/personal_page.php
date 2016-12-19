<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    	<nav role="navigation" class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px; margin-top: 0px; padding-top: 5px;"">
			<div class="container-fluid">
			<!-- Логотип и мобильное меню -->
				<div class="navbar-header">
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../index.php">Кулибин 2.0</a>
				</div>
			  <!-- Навигационное меню -->
				<div id="navbarCollapse" class="collapse navbar-collapse navbar-right menu">
					<ul class="nav nav-pills">
						<li class=<?php if ($_GET['page'] == '' || $_GET['page'] == 'me') {echo "active";} ?>><a href="?page=personalpage">Мой кабинет</a></li>
						<li class="<?php if($_GET['page']=='invention') { echo 'active'; } ?>"><a  href="?page=invention">Мои изобретения</a></li>
						<li class="<?php if($_GET['page']=='tasks') { echo 'active'; } ?>"><a href="?page=tasks">Мои задачки</a></li>
						<li><a href="../index.php">Выйти</a></li>
				</ul>
			</div>
			</div>
		</nav>	
		<?php
			$page = $_GET['page'];
			switch ($page)
			{
				case "personalpage": include "my_page.php"; break;
				case "invention": include "my_invention.php"; break;
				case "tasks": include "my_tasks.php"; break;
				default: include"my_page.php";
			}	
		?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>