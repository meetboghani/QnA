<?php 
	if(!isset($_SESSION["fn"]))
		header("location:index.php");
?>
<div class="welcome1">
	<div class="welcome2">
	<lb>welcome</lb> <a class="wc1" href="uedit.php"><?php echo $_SESSION["fn"];
	?></a>  <a  class="wc2" href="logout.php">log-out</a> 
</div>
</div>
