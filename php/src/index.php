
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

	<!-- Input form -->
	<form method="POST" action="code.php">
		<input type="text" id="task" name="task" class="" required>

		<button type="submit" name="submit_btn" class="add_btn">Add Task</button>	
	</form>


	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>TASK</th>
				<th>UPDATE</th>
				<th>DELETE</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				// reading/viewing tasks
				$query = "SELECT * FROM tasks";
				$query_run = mysqli_query($connection, $query);

				if (mysqli_num_rows($query_run) > 0){
					while ($row = mysqli_fetch_assoc($query_run)) { 
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['task']; ?></td>
					<td>
						<form method="POST" action="update.php">
							<input type="hidden" name="update_id" value="<?php echo $row['id'] ?>">
							<button style="background: green;" name="update">?</button>
						</form>
					</td>
					<td>
						<form method="POST" action="code.php">
							<input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
							<button style="background: red;" name="delete_btn">x</button>
						</form>
					</td>
				</tr>
			<?php 
					} 
				}
			?>


			
		</tbody>
	</table>

</body>
</html>