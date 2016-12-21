<?php
	include "connection.php";
	
	//добавление в базу данных
	
	if ($_POST['name'] != '' && $_POST['date'] != '' && $_POST['text'] != ''
		&& $_POST['button'] && $_POST['button'] == 'Отправить')
		{
			$query = "INSERT INTO my_tasks (name, date, text) VALUES ('".htmlspecialchars($_POST['name'])."',
																								'".htmlspecialchars($_POST['date'])."',
																								'".htmlspecialchars($_POST['text'])."')";
			$sql_res = mysqli_query ($mysqli, $query);
		}
		//удаление из базы данных
		if (isset ($_GET['del_id']))
			$delete = mysqli_query ($mysqli, 'DELETE FROM my_tasks WHERE id=\''.$_GET['del_id'].'\';');
?>
<h2 class="text-center" style="font-family: 'Poiret One', cursive; margin-bottom: 10vh;">Добавить задачу</h2>
<section id="invention-form">
	<div class="container-fluid">
		<div class="row">
			<form class="form-horizontal" role="form" method="post" action="#">
			    <div class="form-group">
					<label for="inputName" class="col-sm-2 control-label">Название задачки:</label>
					<div class="col-sm-8">
						<input name="name" type="text" class="form-control" id="inputName" placeholder="Введите название задачи">
					</div>
			    </div>
			    <div class="form-group">
					<label for="inputDate" class="col-sm-2 control-label">Дата:</label>
					<div class="col-sm-8">
						<input name="date" type="date" class="form-control" id="inputDate" placeholder="Введите дату">
					</div>
			    </div>
			    <div class="form-group">
					<label for="inputText" class="col-sm-2 control-label">Текст задачи:</label>
					<div class="col-sm-8">
						<input type="text" name="text" class="form-control" id="inputText" placeholder="Введите текст задачи">
				    </div>
			    </div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input name="button" type="submit" class="btn btn-success" value="Отправить">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<h2 class="text-center" style="font-family: 'Poiret One', cursive; margin-bottom: 10vh;">Мои задачи</h2>
<section ="table">
	<div class="container">
		<div class="row table-responsive">
			<?php
				$select = "SELECT * from my_tasks";
				$sql_res = mysqli_query($mysqli, $select);
				$ret = '<table class="table table-striped" style="width: 80%; margin: auto; margin-bottom: 100px;">';
				$ret .= '<tr><th>#</th><th>Название задачки</th><th>Дата</th><th>Текст задачки</th><th>Удалить</th></tr>';
				while ($row = mysqli_fetch_assoc($sql_res))
					//выводим каждую запись как строку таблицы
					{
						$ret.='<tr><td>'.$row['id'].'</td>
								<td>'.$row['name'].'</td>
								<td>'.$row['date'].'</td>
								<td>'.$row['text'].'</td>
								<td><a class="btn btn-danger" href="?page=tasks&del_id='.$row['id'].'">Удалить</a></td>
							</tr>';
					}
					$ret.='</table>'; //заканчиваем формировать таблицы с контентом
					echo $ret;//возвращаем сформированный контент
								
			?>
		</div>
	</div>
</div>