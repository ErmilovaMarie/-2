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
					<li><a href="invention.php">Изобретения</a></li>
					<li><a href="inventors.php">Изобретатели</a></li>
					<li><a href="competition.php">Конкурсы</a></li>
					<?php
                    if(user_is_auth()){
						echo "<li><a href=\"personal_page/index.php\">".login_get()."</a></li>";
						echo "<li><a href='exit.php'>Выйти</a></li>";
                    }
					else{
					?>
					<li><a href="#" data-toggle="modal" data-target="#auth">Войти</a></li>
					
					<?php
						}
					?>
					
					</ul>
				</div>
			</nav>
		</div>
		<div class="container-fluid" id="header">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<h1 id="header_logo" class="text-center">Кулибин 2.0<h1>
					<div class="intro-text">
						<p class="text-center text-muted header_quote">"Найди то, что нужно миру и только потом начинай изобретать."</p>
						<p class="text-center text-muted  header_quote">Томас Алва Эдисон</p>
					</div>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 buttons_menu">
                    <?php
                    if(user_is_auth()){
                        echo "<p class='btn  header_buttons'>".login_get()."</p>";
                        echo "<a href='exit.php' class='btn  header_buttons'>Выйти</a>";
                    }
                    else{
                    ?>
                        <a href="#" class=" btn  header_buttons" id="selected" data-toggle="modal" data-target="#auth">Войти</a>
                        <div class="modal fade bs-example-modal-sm" id="auth" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
                        <!-- Кнопка, для открытия модального окна -->
                        <a href="#" class="btn header_buttons" data-toggle="modal" data-target="#feedbackForm">Регистрация</a>

                        <!-- Форма обратной связи в модальном окне -->
                        <div class="modal fade" id="feedbackForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Сообщение, отображаемое в случае успешной отправки данных -->
                                        <div class="alert alert-success hidden" role="alert" id="msgSubmit" style="margin-bottom: 0px;">
                                            Вы успешно зарегистрировались!
                                        </div>
                                        <!-- Форма заявки -->
                                        <form id="" action="registration.php" method="post">
                                            <div class="row">
                                                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;">
                                                </div>
                                                <!-- Имя и email пользователя -->
                                                <div class="col-sm-6">
                                                    <!-- Имя пользователя -->
                                                    <div class="form-group has-feedback">
                                                        <label for="name" class="control-label">Введите ваше имя:</label>
                                                        <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Имя пользователя -->
                                                    <div class="form-group has-feedback">
                                                        <label for="login" class="control-label">Введите логин:</label>
                                                        <input type="text" id="login" name="login" class="form-control" required="required" minlength="2" placeholder="Придумайте логин" maxlength="30">
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Email пользователя -->
                                                    <div class="form-group has-feedback">
                                                        <label for="email" class="control-label">Введите адрес email:</label>
                                                        <input type="email" id="email" name="email" class="form-control" required="required"  placeholder="Например, ivan@mail.ru" maxlength="30">
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Пароль пользователя -->
                                                    <div class="form-group has-feedback">
                                                        <label for="password" class="control-label">Придумайте пароль:</label>
                                                        <input type="password" id="password" name="password" class="form-control" required="required" placeholder="Введите пароль" maxlength="30">
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Дата рождения пользователя -->
                                                    <div class="form-group has-feedback">
                                                        <label for="date" class="control-label">Дата рождения:</label>
                                                        <input type="date" id="date" name="birthday" class="form-control" required="required" maxlength="30" style="padding-right: 0;">
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Пол пользователя -->
                                                    <div class="form-group has-feedback radio" style="padding-top: 20px;">
                                                        <label style="padding-left: 0px;">Выберите ваш пол:</label>
                                                        <div class="radio-inline">
                                                            <label for="male" class="control-label">
                                                                <input type="radio" id="check" name="optionsRadios" required="required"> М
                                                            </label>
                                                        </div>
                                                        <div class="radio-inline">
                                                            <label for="male" class="control-label" style="padding-left: 0px;">
                                                                <input type="radio" id="check" name="optionsRadios" required="required"> Ж
                                                            </label>
                                                        </div>
                                                        <span class="glyphicon form-control-feedback"></span>
                                                    </div>
												</div>
												</div>
												<div class="col-sm-6">
													  <!--  Город пользователя -->
														<div class="form-group has-feedback">
															<label for="name" class="control-label">Введите город:</label>
															<input type="text" id="city" name="city" class="form-control" rows="3" required="required" value="" minlength="2" placeholder="Введите город" maxlength="50">
															<span class="glyphicon form-control-feedback"></span>
														</div>
												</div>
												<div class="col-sm-6">
													<!--  Интересы пользователя -->
													<div class="form-group has-feedback">
														<label for="name" class="control-label">Опишите свои интересы:</label>
														<input type="text" id="hobbies" name="hobbies" class="form-control" required="required" value="" minlength="2" placeholder="Опишите свои интересы" maxlength="30">
														<span class="glyphicon form-control-feedback"></span>
													</div>
												</div>
                                            </div>

                                            <!-- Кнопка, отправляющая форму по технологии AJAX -->
                                            <button name="send-message" type="submit" class="btn btn-primary pull-right">Регистрация</button>
                                        </form><!-- Конец формы -->
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
				</div>
			</div>
			
		</div>
	</header>	
	<section id="picture">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead" style="font-size: 1.6em;">Наука - это не скучно!</p>
					<p class="lead" style="font-size: 1.6em;">Наука - это одновременно и система знаний и их духовное производство, и практическая деятельность на их основе.</p>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead text-center" style="font-size: 1.6em;">Если вы видите Кулибин 2.0, то вы пришли по адресу и можете смело считать себя изобретателями.</p>
					<p class="lead text-center" style="font-size: 1.6em;">Как известно, изобретатели - люди, чьи открытия находят свое применение через много лет.
												Вы спросите почему? Потому что величайшие рукописи пылились в дальних ящиках никому не известных людей.</p>
					<p class="lead text-center" style="font-size: 1.6em;">Кулибин 2.0 - платформа, где каждый может не только решать логичские задачки, но и 
																			изучать изобретения других людей, добавлять свои открытия и участвовать в конкурсах.</p></br>							
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 picture_table table-responsive">
				<img src="image/hand.png" class="img-responsive">
			</div>
			</div>
		</div>
	</section>
	<section id="news">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-right: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/newspaper.svg">
					 <?php
						include "admin/connection.php";

						$select = "SELECT * FROM news ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#" data-toggle="modal" data-target="#moreNews"><h4>'.$row['name'].'</h4></a></br>';
							echo '<p class="label label-default">'.$row['date'].'</p></br>';
							echo '<p>'.$row['description'].'</p></br>';
						}
						
					?> 
					<!-- Вывод новости в модальном окне -->
					<div class="modal fade" id="moreNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>	
								</div>
								<div class="modal-body">
								<!-- Вывод полной новости-->
									<?php
									include "admin/connection.php";

									$select = "SELECT * FROM news ORDER BY ID DESC limit 1";
									$sql_res = mysqli_query($mysqli, $select);
									while ($row = mysqli_fetch_assoc($sql_res))
									{
										echo '<a href="#"><h4>'.$row['name'].'</h4></a>';
										echo '<p class="label label-default">'.$row['date'].'</p>';
										echo '<p>'.$row['text'].'</p>';
									}
								?>
								<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div">
					<img class="img-responsive news_img" src="image/warning.svg" style="width: 75.8px; height: auto;">
					<?php
						include "admin/connection.php";

						$select = "SELECT * FROM competition ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#" data-toggle="modal" data-target="#moreCompetition"><h4>'.$row['name'].'</h4></a>';
							echo '<p class="label label-default">'.$row['date'].'</p>';
							echo '<p>'.$row['description'].'</p>';
						}
						
					?>  
					<!-- Вывод конкурса в модальном окне -->
					<div class="modal fade" id="moreCompetition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>	
								</div>
								<div class="modal-body">
								<!-- Вывод полного конкурса-->
									<?php
										include "admin/connection.php";

										$select = "SELECT * FROM competition ORDER BY ID DESC limit 1";
										$sql_res = mysqli_query($mysqli, $select);
										while ($row = mysqli_fetch_assoc($sql_res))
										{
											echo '<a href="#""><h4>'.$row['name'].'</h4></a></br>';
											echo '<p class="label label-default">'.$row['date'].'</p></br>';
											echo '<p>'.$row['text'].'</p></br>';
										}
										echo '<a href="competition.php">Перейти на страницу с конкурсами</a></br>';
									?> 
								<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-right: 5px solid #F5F5F5; border-top: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/light-bulb.svg">
					<?php
						include "admin/connection.php";

						$select = "SELECT * FROM invention ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#" data-toggle="modal" data-target="#moreInvention"><h4>'.$row['name'].'</h4></a>';
							echo '<p class="label label-default">'.$row['date'].'</p>';
							echo '<p>'.$row['smalldescription'].'</p>';
						}
						
					?> 
					<!-- Вывод изобретения в модальном окне -->
					<div class="modal fade" id="moreInvention" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>	
								</div>
								<div class="modal-body">
								<!-- Вывод полного описания изобретения-->
									<?php
										include "admin/connection.php";

										$select = "SELECT * FROM invention ORDER BY ID DESC limit 1";
										$sql_res = mysqli_query($mysqli, $select);
										while ($row = mysqli_fetch_assoc($sql_res))
										{
											echo '<a href="#"><h4>'.$row['name'].'</h4></a>';
											echo '<p class="label label-default">'.$row['date'].'</p>';
											echo '<p>'.$row['description'].'</p>';
										}
										echo '<a href="invention.php">Перейти на страницу с изобретениями</a></br>';
									?> 
								<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-top: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/projection.svg" style="width: 75.8px; height: auto;">
					<?php
						include "admin/connection.php";

						$select = "SELECT * FROM interesting ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#" data-toggle="modal" data-target="#moreInteresting"><h4>'.$row['name'].'</h4></a>';
							echo '<p class="label label-default">'.$row['date'].'</p>';
							echo '<p>'.$row['smalldescription'].'</p>';
						}
						
					?> 
					<!-- Вывод события в модальном окне -->
					<div class="modal fade" id="moreInteresting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>	
								</div>
								<div class="modal-body">
								<!-- Вывод полного описания события-->
									<?php
										include "admin/connection.php";

										$select = "SELECT * FROM interesting ORDER BY ID DESC limit 1";
										$sql_res = mysqli_query($mysqli, $select);
										while ($row = mysqli_fetch_assoc($sql_res))
										{	
											echo '<a href="'.$row['link'].'"><h4>'.$row['name'].'</h4></a>';
											echo '<p class="label label-default">'.$row['date'].'</p>';
											echo '<p>'.$row['description'].'</p>';
										}
										
									?> 
								<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					</div>
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
