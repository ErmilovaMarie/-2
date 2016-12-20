<?php
require_once 'lib.php';
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	<title>Кулибин 2.0 изобретательский портал</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Кулибин</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link href="css/media-queries.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
	<script src="https://use.fontawesome.com/4c200ea55b.js"></script>
	<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	
  </head>
  <body>

	<header>
		<div class="container-fluid">
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
				<div id="navbarCollapse" class="collapse navbar-collapse">
				  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Главная</a></li>
					<li><a href="#">Новичку</a></li>
					<li><a href="tasks.php">Задачки</a></li>
					<li><a href="#">Изобретения</a></li>
					<li><a href="#">Изобретатели</a></li>
					<li><a href="#">Конкурсы</a></li>
					<?php
                    if(user_is_auth()){
						echo "<li><a href=\"personal_page/index.php\">".login_get()."</a></li>";
						echo "<li><a href='exit.php'>Выйти</a></li>";
                    }
					else{
					?>
					<li><a href="#" data-toggle="modal" data-target="#authTasks">Войти</a></li>
					<?php
						}
					?>
					<div class="modal fade bs-example-modal-sm" id="authTasks" tabindex="1" role="dialog" aria-labelledby="mySmallModalLabel">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
									<div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
                                    </div>
									<div class="modal-body">
										<form action="auth.php" method="post"> 
											<div class="modal-body">
												<div class="form-group">
													<label for="login">Логин</label>
													<input type="text" required name="login" class="form-control" id="login" placeholder="Логин">
												</div>
												<div class="form-group">
													<label for="password">Пароль</label>
													<input type="password" required name="password" class="form-control" id="password" placeholder="Пароль">
												</div>
											</div>
											<div class="modal-footer">
												
												<button type="submit" class="btn btn-primary">Войти</button>
											</div>
										</form>
									</div>
                                </div>
                            </div>
                        </div>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container-fluid" id="header">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<h1 id="header_logo" class="text-center">Кулибин 2.0<h1>
					<div class="intro-text">
						<p class="text-center text-muted header_quote">"Найди то, что нужно миру и только потом начинай изобретать"</p>
						<p class="text-center text-muted  header_quote">Томас Алва Эдисон</p>
					</div>
					<br>
				</div>
			</div>
		</div>
	</header>	
	<section id="picture">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead">Наука - это не скучно!</p>
					<p class="lead">Наука - это одновременно и система знаний и их духовное производство, и практическая деятельность на их основе.</p>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead text-center">Кулибин 2.0 и далее текст типа "О НАС"</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 picture_table table-responsive">
				<img src="image/hand.png" class="img-responsive">
			</div>
			</div>
		</div>
	</section>
	
	<section id="signup">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center signup">
					<h2>Присоединяйтесь, чтобы сделашь шаг навстречу изобретениям</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="social">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center social">
					<a href="#"><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center social_text">
					<p>© Untitled. All rights reserved.</p>
					<a href="admin/admin.php">Administrator</a>
				</div>
			</div>
		</div>
	</section>
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/script.js"></script>
	
  </body>
</html>
