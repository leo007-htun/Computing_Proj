<?php 
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="conveniencestore";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
			mysqli_select_db($conn,$dbname);

			$id = $_POST['id'];  
			$name=$_POST['name'];

			$sql="UPDATE productname SET name='$name' WHERE id=$id";
			mysqli_query($conn,$sql);

			header("location:update.php");

 ?>

