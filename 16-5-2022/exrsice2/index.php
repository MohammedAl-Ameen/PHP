<table border="1" cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>Name </th>
		<th>Description</th>
		<th>Time</th>
		<th>Location</th>
		<th>Teacher Name</th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare("SELECT * FROM courses ORDER BY id DESC");
		$result->execute();
		echo "<pre>";
		// for($i=0; $row = $result->fetch(); $i++){
		// print_r($row);}
		$row = $result->fetch(PDO::FETCH_ASSOC);
		print_r($row);
		$row = $result->fetch();
		print_r($row);
		echo "</pre>";
	?>
	<tr class="record">
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['description']; ?></td>
		<td><?php echo $row['time']; ?></td>
		<td><?php echo $row['location']; ?></td>
		<td><?php echo $row['teacher name']; ?></td>
		<td><a href="editform.php?id=<?php echo $row['id']; ?>"> edit </a></td>
	</tr>
	
	<?php

	?>
</tbody>
</table>