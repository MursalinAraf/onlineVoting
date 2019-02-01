<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="voting.css" type="text/css" rel="stylesheet" />
<title>Home</title>
<script src="jscript/gen_validatorv4.js" type="text/javascript"></script>
</head>
<body>
<div id="head">
<table border="0" bgcolor="#FFFFFF"width="100%"><tr>
        <td><img src="images/logo3.jpg" height="100" width="590" alt="logo"/></td>
        <td><marquee>Speak it out through voting-2016</marquee></td>
      </td>
</tr></table>
</div>
<div id="leftnavigation">
<a href="nn.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="student_reg.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="login.php">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.php">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">Contact Us</a>
</div>
<div id="cover">
<div id="content">
<?php global $msg; echo $msg;?>
<br/><h3>Welcome,</h3><br/>
<p>This system allows all registered student to vote for their candidates student. Remember to keep hidding your information like
student ID card number since the default username in the system is your registration number and password is your course.</p>
<p>In order to make a vote you have to be registered on the student information system.<br/>
    -Candidates may still vote for themselves since they are students<br/>
    -Most recently information will updates in this site to make follow up on election</p>
    <p>&nbsp;&nbsp;</p>
</div>
</div>
<div id="cover">
<div id="content">
<br/><h3>System Login</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Login Form</h3></legend>
  <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="login_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="login" value="Login" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
</script>
        </fieldset>
        </div>

</div>
</div>
<div id="footer" align="center"><br/><b>&copy;Copyright 2016</b></div>
</body>
</html>

