<?php  session_start();
 require("header.php"); 
	require("checkuser.php");
?>
<div class="B3">
	
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
			
	</script>

</div>
<div class="B4">
	<form action="questionH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" />
<table>
<tr><span class="q1">Heading:</span><br><textarea rows="1" cols="40" name="head"></textarea><span id='a' style="color: red;"></span></tr><br/>
<tr><tr><span class="q2">Enter your question:</span><br/><textarea rows="5" cols="70" name="ta" ></textarea><span id='b' style="color: red;"></span></tr><br/>
<tr><td><input type="submit" value="Post"></td><td><input type="reset" value="Clear"></td></tr>
</table>
</form>


</div>	

<?php require("footer.php"); ?>