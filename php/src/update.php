
<?php		
	require 'connection.php';
?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>DOMINIC DAGOC * TODO LIST *</h2>
	</div>

	<?php 
		if(isset($_POST['update'])){
			$id = $_POST['update_id'];
			$query = "SELECT * FROM tasks WHERE id = '$id' LIMIT 1 ";
			$query_run = mysqli_query($connection, $query);
	
			if (mysqli_num_rows($query_run) > 0){
				while ($row = mysqli_fetch_assoc($query_run)) { 
	?>

		<form method="POST" action="code.php">
			<input type="text" id="task" name="task" class="" value="<?php echo $row['task'] ?>">

			<input type="hidden" name="updt_id" value="<?php echo $row['id'] ?>">
			<button type="submit" name="update_btn" class="add_btn">Update Task</button>	
		</form>

	<?php
				}
			}
		}
	?>


</body>
</html>