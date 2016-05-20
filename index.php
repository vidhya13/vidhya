<?php
include('config.php');
if(isset($_POST['submit']))
{
 $username = $_POST['uname'];
 $password = $_POST['pass'];
 $sql = mysql_query("select * from login where `username` ='".$username."' and `password` = '".$password."' and status = 1");

 if(mysql_num_rows($sql) > 0)
 {
   header('Location:ex1.html');
 }
 else {
	echo "Username & Password Mis Matched";
 }

}



?>
<html>
	<head>
		<style>
		h1
		
		{
			padding-top:60px;
			
		}
		table
		{
			padding:50px 50px;
		}
		body
		{
			background-color:lightblue;
		}
		.btn
		{
			cursor:pointer;
			display:inline-block;
			border:1px solid black;
			border-radius:10px;
			margin-left:15px;
			padding:10px 10px;
		}
		td
		{
			padding-top:20px;
		}
		.container
		{
		border:1px solid lightyellow;
		
		border-width:50px;
		border-height:1000px;
		}	
		p
		{
			color:red;
		}
		</style>
		<script>
		function nam()
		{
			var y=document.getElementById("t1");
			var p=document.getElementById("p1");
			var n=/^[0-9]+$/;
			if(y.value==null || y.value=="")
			{
				p.innerHTML="Required";
			}
			else if(y.value.match(n))
			{
				p.innerHTML="Alphabets only";
			}
			else
			{
				p.innerHTML="";
		}
	}
	function pa()
	{
		var y=document.getElementById("t2").value;
		var p=document.getElementById("p2");
		if(y==null || y=="")
			{
				p.innerHTML="Required";
			}
		else if(y.length<5)
		{
			p.innerHTML="lenght must be 7-12";
		}
		else
			{
				p.innerHTML="";
			}
	}
	function final()
	{
		pa();
		nam();
	}
		</script>
	</head>
	<body>
	<form method="post" action="index.php">
	<center>
		<marquee direction="right" style="font-size:50px;color:gray;padding-top:30px;">Welcome</marquee>
		<h1>Login Page</h1>
		<div class="container">
	<table>
	<tr>
	<td>Username:</td>
	<td><input type="text" id="t1" name="uname" onblur="nam()"></td>
	<td><p id="p1"></p></td>
	</tr>
	<tr>
	<td>Password:</td>
	
	<td><input type="password" id="t2" name="pass" onblur="pa()"></td>
	<td><p id="p2"></p></td>
	</tr>
	<tr>
	<td style="padding-left:100px;"><input type="submit" name="submit" class="btn" value="Submit" onclick="final()" /></td>
	<td><input type="reset" name="reset" class="btn" value="Reset"></td>
	</tr>
	</table>
	
	</div>
	</center>
	</form>
	</body>
	</html>
