<?php
	
	include "connection.php";
	//добавить в базу данных
	if ($_POST['name'] != '' && $_POST['date'] != '' && $_POST['text'] != '' && $_POST['answer'] != '' &&
		$_POST['button'] && $_POST['button'] == 'Отправить')
	{
		$query = "INSERT INTO tasks (name,date,text,answer) VALUES ('".htmlspecialchars($_POST['name'])."',
											'".htmlspecialchars($_POST['date'])."',
											'".htmlspecialchars($_POST['text'])."',
											'".htmlspecialchars($_POST['answer'])."')";
		$sql_res = mysqli_query($mysqli, $query);
	}
	
	//удалить из базы данных
	if (isset($_GET['del_id']))
		$delete = mysqli_query($mysqli,'DELETE FROM tasks WHERE id=\''.$_GET['del_id'].'\';');

?>
<section id="tasks_form">
	<div class="container">
		<div class="row text-center">
			<form role="form" method="post" action="#">
				<h1><span class="label label-default">Добавить задачи</span></h1>
				<div class="form-group">
					<label for="exampleInputName" class="pull-left">Название задачи</label>
					<input type="name" name="name" class="form-control" id="exampleInputNameTasks" placeholder="Введите название задачи">
				</div>
				<div class="form-group">
					<label for="exampleInputDate" class="pull-left">Дата</label>
					<input type="date" name="date" class="form-control" id="exampleInputDateTasks" placeholder="Выберите дату">
				</div>
				<div class="form-group">
					<label for="exampleInputeText" class="pull-left">Текст задачи</label>
					<textarea class="form-control" name="text" rows="3" id="exampleInputText" placeholder="Введите текст задачи"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputeText" class="pull-left">Ответ</label>
					<textarea class="form-control" name="answer" rows="3" id="exampleInputText" placeholder="Введите ответ"></textarea>
				</div>
				<input type="submit" name="button" class="btn btn-default" value="Отправить">
			</form>
		</div>
	</div>
</section>
<section id="old_news">
	<div class="container-fluid">
		<div class="row">
				<!--  ВЫВОД ЗАДАЧ ИЗ БАЗЫ ДАННЫХ -->	
				<?php
				$select = "SELECT * FROM tasks";
				$sql_res = mysqli_query($mysqli, $select);
				$ret = '<table class="table table-striped" style="width: 80%; margin: auto; margin-bottom: 100px;">';
				$ret .= '<tr><th>#</th><th>Название</th><th>Дата</th><th>Текст задачи</th><th>Ответ</th><th>Удалить</th></tr>';
				while ($row = mysqli_fetch_assoc($sql_res))
				{
					//выводим каждую запись как строку таблицы
					$ret.='<tr><td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['date'].'</td>
							<td>'.$row['text'].'</td>
							<td>'.$row['answer'].'</td>
							<td><a class="btn btn-danger btn-sm" href="?page=tasks&del_id='.$row['id'].'">Удалить</a></td>
							</tr>';
				}
				$ret.='</table>';		//заканчиваем формировать таблицы с контентом
				echo $ret;	//возвращаем сформированный контент
				
				
			?>
		</div>	
</section>