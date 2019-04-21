<?php
if(isset($_POST['signup']))
{
	mysqli_connect("localhost","user","");
	mysqli_select_db("simi");
	
	$Email=$_POST['email'];

	$que1=mysqli_query("select * from users where Email='$Email'");
	$count1=mysqli_num_rows($que1);

	if($count1>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
	}
	else
	{
		$Name=$_POST['your_name'];
		$Password=$_POST['password'];
		$Gender=$_POST['sex'];
		$Birthday_Date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$Join_Date=$_POST['join_time'];
		
		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		if(checkdate($month,$day,$year))
		{
			$que2=mysqli_query("insert into users(Name,Email,Password,Gender,Birthday_Date,Join_Date) values('$Name','$Email','$Password','$Gender','$Birthday_Date','$Join_Date')");

			session_start();
			$_SESSION['tempsmuser']=$Email;
		}
		else
		{
			echo "<script>
				alert('The selected date is not valid.');
			</script>";
		}
	}
}
?>
