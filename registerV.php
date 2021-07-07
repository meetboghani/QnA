<?php  require("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>signup-form</title>
    
    <script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.cpwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
	     		form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
				form1.dob.focus();

			}

			if (form1.cpwd.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Re-Enter Password.";
				form1.cpwd.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				form1.cpwd.focus();

			}
			 if (form1.cpwd.value != form1.pwd.value) {
                document.getElementById("f").innerHTML= "Confirm password not matched";
			 	form1.cpwd.focus();

			 }
			 else{
			 	document.getElementById("f").innerHTML = "";
				form1.cpwd.focus();
			 }
			 if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>


</head>
<body>
     

<div class= containerr>
        
        <div class="container-signup1">
        <div class="container-1">

                <h1 class="signup">Sign Up </h1> 
        </div>

        <form class="form-signup" action="register.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name ="form1">
            <div class="container-signup">
                    <p for="username"><b>User Name</b>
                    <input class="form-control" placeholder="Enter User Name" name="u_name" type="text" id="a"></p>

                <p for="Full Name"><b>Full Name</b>
               <input class="form-control" placeholder="Enter Full Name" name="f_name" type="text" id="b"></p>
                
                <p for="email"><b>Email</b>
                <input class="form-control" placeholder="Enter Your Email" name="e_mail" type="email" id="d"></p>
                
                <p for="password"><b>Password</b>
                <input class="form-control" placeholder="Enter Strong Password" name="pwd" type="password" id="c"></p>
                
                <p for="cpassword"><b>Comform Password</b>
                <input class="form-control" placeholder="Re-Enter Your Password" name="cpwd" type="password" id="f"></p>
                
                <p for="gender"><b>Gender</b>
                <input class="form-control" name="gender" type="radio" value="1" checked="checked">male<br></p>
                

                 <p for="gender">
                <input class="form-control"  name="gender" type="radio" value="2">female<span id="spuid"></span><br></p>

                <p for="dateofbirth"><b>Date Of Birth</b>
                <input class="form-control" placeholder="dd/mm/yyyy" name="dob" type="text" id="e"><br></p>

                <p for="Profile"><b>Profile Image</b>
                <input class="form-control" placeholder="Upload Image" name="ima" type="file"><br></p>

                <p for="State"><b>State</b>
                <input class="form-control" placeholder="State" name="sta" type="text" id="g"><br></p>

                <p for="Country"><b>Country</b>
                <input class="form-control" placeholder="Country" name="cou" type="text" id="h"><br></p>

                <button class="btn btn-lg btn-info " type="submit" value="signup" id="signup-button">Register</button>


                </div>



        </form>
    </div>
</div>
</body>
</html>

<?php require("footer.php"); ?>