<?php
include('connection.php');
 ?>
<?php
//serve.php
session_start();


if(isset($_POST["adminname"]))
{
		$sql = "
		select admin_name,password from admin
		where admin_name = '".$_POST['adminname']."'
		AND password = '".$_POST["password"]."'
		";
		$query = mysqli_query($con, $sql);
		if(mysqli_num_rows($query) > 0)
		{
			$_SESSION["adminname"] = $_POST["adminname"];
		//	echo "yes";
 header('location: admin/index.php');
	}
		else
		{
			echo "name or passwerd Error";
		}
}
 ?>
