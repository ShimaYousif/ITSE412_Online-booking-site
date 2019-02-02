<?php
include('connection.php');
 ?>
<?php
//serve.php
session_start();


if(isset($_POST["username"]))
{
		$sql = "
		select user_name,password from users
		where user_name = '".$_POST['username']."'
		AND password = '".$_POST["password"]."'
		";
		$query = mysqli_query($con, $sql);
		if(mysqli_num_rows($query) > 0)
		{
			$_SESSION["username"] = $_POST["username"];
		//	echo "yes";
 header('location: admin/index.php');
	}
		else
		{
			echo "No";
		}
}
 ?>
