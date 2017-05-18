<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="insert" method="post">
	<table>
		<tr>
		{{ csrf_field()}}
			<td>
				enrollment
			</td>
			<td>
				<input type="test" name="enroll">
			</td>
		</tr>
		<tr>
			<td>
				name
			</td>
			<td>
				<input type="test" name="name">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="add">
			</td>
		</tr>
	</table>
</form>
</body>
</html>