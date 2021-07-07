<!DOCTYPE html>
<html>
<head>
	<title>home</title>

	<meta charset="utf-8">
	<script type="text/javascript" src="res/script.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" type="text/css" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<?php session_start();
 require("header.php");
 
 if ($_SESSION["fn"] == null){
 	header("location:about2.php");
	exit();
 }
 
 require("checkUser.php");
 ?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>


 
 
 
 
 
<div class="home1">

	<h3><a  class="ho1" href="que.php">My Question</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a  class="ho2" href="ans.php">My Answered </a></h3>

</div>
<div class="qview">
	
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysqli_fetch_array($result))
	{
		   
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>";
			
			
			echo "</table></span><div class='h10'></div>";
		}
	
?>
</div>


             
</body>
</html>
<?php require("footer.php");?>