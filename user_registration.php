<?php
	require_once("connect.php");
	if(isset($_POST['registration']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];	
		if(!empty($user_id) and !empty($user_password) and !empty($user_name) and !empty($user_email))
		{
			$sql = "Select * from user_info where user_id = '$user_id'";
			if($result = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($result) == 0)
				{
					$ins  = "Insert into user_info(`user_id`,`user_password`,`user_name`,`user_email`) values('$user_id','$user_password','$user_name','$user_email')";
					mysqli_query($conn,$ins);
					header("Location:index.html");
				}
				else
					echo "<script>	alert('Same Id already used....');		</script>";
			}
		}
		else
			echo "<script>	alert('You need to fill all information');		</script>";		
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
<style type="text/css">

<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #0000FF;
}
.style3 {font-size: 16px}
.style4 {color: #000000}
-->
</style>
</head>

<body>



<table width="100%" height="221" border="0" cellpadding="2" cellspacing="2">

  <tr>
    <td><div align="center">
	<form action="" method="post">
      <table width="40%" border="0" cellspacing="2" cellpadding="2" bgcolor="pink">
        <tr>
          <td width="89%"><div align="center" class="style2 style3 style4">Register to send message </div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="user_id" size="32" PlaceHolder="User ID" /></div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="password" name="user_password" size="32" PlaceHolder="User Password" /></div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="user_name" size="32" placeholder="User Name" /></div></td>
        </tr>
        <tr>
          <td><div align="center">
            <input type="text" name="user_email" size="32" placeholder="User Email" />
          </div></td>
        </tr>
        <tr>
          <td height="54">
            
                <div align="center">
                  <input type="submit" name="registration" value="Registration" />
                  <input type="submit" name="cancel" value="Cancel" />
                  <span class="style8"><a href="index.html" target="_self">Home</a></span></div></td></tr>
      </table></form>
    </div></td>
  </tr>
</table>
</body>
</html>