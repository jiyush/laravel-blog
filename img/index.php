<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post"  enctype="multipart/form-data" >
	<input type="file" name="image"><br/><br/>
	<input type="submit" name="submit" value="upload">
	
</form>


	<?php
	 
		
	if (isset($_POST['submit'])) {
		
		if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
			
			echo "please select images...!!";
		}
		else{

			$image = addslashes($_FILES['image']['tmp_name']);
			$name = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image  = base64_encode($image);
			saveimage($name,$image);
		}
	}
	displayimage();

	function saveimage($name,$image){

		$con = mysql_connect("localhost","root","");
		mysql_select_db("mydb",$con);

		$query = "insert into image(name,images) values('$name','$image')";
		$result = mysql_query($query,$con);

		
	}
	function displayimage(){

		$con = mysql_connect("localhost","root","");
		mysql_select_db("mydb",$con);

		$query = " select * from image ";
		$result = mysql_query($query,$con);
		while ($r = mysql_fetch_array($result)) {
			
			echo '<img width="300px" height="300px;" src="data:image;base64,'.$r['2'].' ">';
		}
	}
	 ?>
</body>
</html>