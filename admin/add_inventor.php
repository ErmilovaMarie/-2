<?php
	
	include "connection.php";
	//добавить в базу данных
	if ($_POST['name'] != '' && $_POST['date'] != '' && $_POST['area'] != '' &&
		$_POST['button'] && $_POST['button'] == 'Отправить')
	{
		$query = "INSERT INTO inventors (name,date,area) VALUES ('".htmlspecialchars($_POST['name'])."',
											'".htmlspecialchars($_POST['date'])."',
											'".htmlspecialchars($_POST['area'])."')";
		$sql_res = mysqli_query($mysqli, $query);
	}
	
	//удалить из базы данных
	if (isset($_GET['del_id']))
		$delete = mysqli_query($mysqli,'DELETE FROM inventors WHERE id=\''.$_GET['del_id'].'\';');

?>
<section id="inventor_form">
	<div class="container">
		<div class="row text-center">
			<form role="form" method="post" action="#">
				<h1><span class="label label-default">Добавить изобретателя</span></h1>
				<div class="form-group">
					<label for="exampleInputName" class="pull-left">Имя изобретателя</label>
					<input type="name" class="form-control" id="exampleInputNameInventor" name="name" placeholder="Введите полное имя изобретателя">
				</div>
				<div class="form-group">
					<label for="exampleInputDate" class="pull-left">Дата рождения</label>
					<input type="date" class="form-control" id="exampleInputDateInventor" name="date" placeholder="Дата рождения">
				</div>
				<div class="form-group">
					<label for="exampleInputName" class="pull-left">Область исследований</label>
					<input type="name" class="form-control" id="exampleInputNameArea" name="area" placeholder="Введите область исследований">
				</div>
				<input type="submit" name="button" class="btn btn-default" value="Отправить">
			</form>
		</div>
	</div>
</section>
<section id="old_news">
		<div class="container-fluid">
		<div class="row">
				<!--  ВЫВОД ИЗОБРЕТАТЕЛЕЙ ИЗ БАЗЫ ДАННЫХ -->	
				<?php
				$select = "SELECT * FROM inventors";
				$sql_res = mysqli_query($mysqli, $select);
				$ret = '<table class="table table-striped" style="width: 80%; margin: auto; margin-bottom: 100px;">';
				$ret .= '<tr><th>#</th><th>Полное имя</th><th>Дата рождения</th><th>Область исследований</th><th>Удалить</th></tr>';
				while ($row = mysqli_fetch_assoc($sql_res))
				{
					//выводим каждую запись как строку таблицы
					$ret.='<tr><td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['date'].'</td>
							<td>'.$row['area'].'</td>
							<td><a class="btn btn-danger btn-sm" href="?page=invention&del_id='.$row['id'].'">Удалить</a></td>
							</tr>';
				}
				$ret.='</table>';		//заканчиваем формировать таблицы с контентом
				echo $ret;	//возвращаем сформированный контент
				
				
			?>
		</div>
	</div>
</section>