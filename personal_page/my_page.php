<section id="personal_info">
	<div class="container">
		<div class="row " style="margin-top: 10px;">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<img src="image/photo.jpg" class="center-block img-responsive img-circle img-thumbnail pull-right" alt="photo"/>
			</div>
		
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="intro-text">
					<p class="name lead text-left" style="font-family: 'Poiret One', cursive;">Иванов Иван Иванович, 15</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="intro-text">
					<h4 class=" text-left" style="font-family: 'EB Garamond', serif;">Email:<small> ojsdcjsj@mail.ru</small></h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="intro-text">
					<h4 class=" text-left" style="font-family: 'EB Garamond', serif;">Город:<small>Москва</small></h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="intro-text">
					<h4 class=" text-left" style="font-family: 'EB Garamond', serif;">Интересы:<small>Люблю программировать</small></h4>
				</div>
			</div>
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-center">
				<!-- Кнопка, для открытия модального окна -->
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#updateData">Изменить данные</a>																					
				</div>
			</div>
		</div>
		<!-- Форма обратной связи в модальном окне -->
			<div class="modal fade" id="updateData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title" id="myModalLabel">Изменить данные</h4>
						</div>
					<div class="modal-body">
					<!-- Сообщение, отображаемое в случае успешной отправки данных -->
					<div class="alert alert-success hidden" role="alert" id="msgSubmit" style="margin-bottom: 0px;">
						  Данные успешно изменены!
					</div>
					<!-- Форма заявки -->
					<form id="messageForm" action="update.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;">
							</div>
								<!-- Имя и email пользователя -->
							<div class="col-sm-6">
								<!-- Имя пользователя -->
								<div class="form-group has-feedback">
									<label for="name" class="control-label">Изменить имя:</label>
									<input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Введите новое имя" minlength="2" maxlength="100">
									<span class="glyphicon form-control-feedback"></span>
								</div>
							</div>
							<div class="col-sm-6">
							  <!-- Email пользователя -->
								<div class="form-group has-feedback">
									<label for="email" class="control-label">Изменить адрес email:</label>
									<input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Введите новую почту" maxlength="100">
									<span class="glyphicon form-control-feedback"></span>
								</div>
							</div>
							<div class="col-sm-6 push-left">
							  <!--  Город пользователя -->
								<div class="form-group has-feedback">
									<label for="name" class="control-label">Изменить город:</label>
									<input type="text" id="city" name="city" class="form-control" rows="3" required="required" value="" minlength="2" placeholder="Введите город" maxlength="200">
									<span class="glyphicon form-control-feedback"></span>
								</div>
							</div>
							<div class="col-sm-12">
							  <!--  Интересы пользователя -->
								<div class="form-group has-feedback">
									<label for="name" class="control-label">Изменить интересы:</label>
									<input type="text" id="hobbies" name="hobbies" class="form-control" required="required" value="" minlength="2" placeholder="Добавьте интересы" maxlength="1000">
									<span class="glyphicon form-control-feedback"></span>
								</div>
							</div>
						</div>
						 
						  <!-- Кнопка, отправляющая форму по технологии AJAX -->  
						<button name="send-message" type="submit" class="btn btn-primary pull-right">Изменить</button>
					</form><!-- Конец формы -->
					<div class="clearfix"></div>
			 
					</div>
				  </div>
				</div>
			 </div>
	</div>
	
</section>