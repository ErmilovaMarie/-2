<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Добавить новость</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		#news_form, #copmetiton_form,#invention_form, #interesting_form, #tasks_form, #inventor_form {
			width: 80%;
			margin: auto;
			margin-bottom: 10vh;
			padding-top: 10vh;
		}
	</style>
  </head>
  <body>
		<nav role="navigation" class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;"">
			<!-- Логотип и мобильное меню -->
				<div class="navbar-header">
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>	
				</div>
			  <!-- Навигационное меню -->
				<div id="navbarCollapse" class="collapse navbar-collapse menu">
					<ul class="nav nav-pills">
						<li><a href="../index.php">Выйти</a></li>
						<li class=<?php if ($_GET['page'] == '' || $_GET['page'] == 'news') {echo "active";} ?>><a href="?page=news">Новости</a></li>
						<li class="<?php if($_GET['page']=='competition') { echo 'active'; } ?>"><a  href="?page=competition">Конкурсы</a></li>
						<li class="<?php if($_GET['page']=='invention') { echo 'active'; } ?>"><a  href="?page=invention">Изобретения</a></li>
						<li class="<?php if($_GET['page']=='inventor') { echo 'active'; } ?>"><a  href="?page=inventor">Изобретатели</a></li>
						<li class="<?php if($_GET['page']=='interesting') { echo 'active'; } ?>"><a href="?page=interesting">Интересное</a></li>
						<li class="<?php if($_GET['page']=='tasks') { echo 'active'; } ?>"><a href="?page=tasks">Задачи</a></li>
						<li><a href="?page="></a></li>
				</ul>
			</div>
		</nav>	
		<?php
			$page = $_GET['page'];
			switch ($page)
			{
				
				case "competition": include "add_competition.php"; break;
				case "invention": include "add_invention.php"; break;
				case "inventor": include "add_inventor.php"; break;
				case "interesting": include "add_interesting.php"; break;
				case "tasks": include "add_tasks.php"; break;
				default: include"add_news.php";
			}	
		?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>