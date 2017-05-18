<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Enroll</th>
		<th>Name</th>
		<th>Edit</th>
	</tr>
	<?php foreach ($t as $k) {
	
	 ?>
	 <tr>
	 	<td> <?php  $id = $k->id; echo $id; ?> </td>
	 	<td> <?php echo $k->enroll; ?> </td>
	 	<td> <?php echo $k->name; ?> </td>
	 	<td><a href="edit?id='.$id.'">Edit</a></td>
	 </tr>
	 <?php } ?>
</table>
</body>
</html>