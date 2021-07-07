<?php require("header.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>login-form</title>
	

</head>
<body>

	<script type="text/javascript">
	function check(f)
	{
		if (f.uid.value == "")
		{
			//alert("Please, enter user id");
			document.getElementById("spuid").innerHTML = "Please, Enter user id.";
			
			f.uid.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
//			alert ("Please, enter password");
           document.getElementById("a").innerHTML = "Please,Enter the password";
			
			f.pwd.focus();
			return false;
		}
		else
			return true;
	}
</script>

<div class="containerr">
		<div class= container-login-1>
        <div class="container-1">
                <h1 class="login">Log In</h1>
        </div>
<form class="form-login" action="login.php" method="POST" onsubmit="return check(this)">
	<div class="container-from">
                    <p for="uid"><b>User Id</b>
                    <input class="form-control" placeholder="Enter Usename" name="uid" type="text" id="spuid"></p>
                
                <p for="password"><b>Password</b>
                <input class="form-control" placeholder="Enter Password" name="pwd" type="password" id="a"></p>   

                <button class="btn btn-lg  btn-primary" id="login-buttom" type="submit" value="login"> Log In</button> 
            </div>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>


</div>
</div>
</body>
</html>
<?php require("footer.php");?>


