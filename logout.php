<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<div class="logout">
	<h1>Log out</h1>
<p>
	You have logged out.  <a href="loginV.php">Click hear</a> to login again.
</p>
	
</div>

<?php require("footer.php");?>