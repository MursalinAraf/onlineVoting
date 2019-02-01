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
<br/><h3>Registration</h3>
  <div id="login">
        <fieldset>
            <legend><h3>Student Registration Form</h3></legend>
  <h4 style="color:#e60808;">
  <?php global $nam; echo $nam;?> </h4> 
  <?php global $error; echo $error;?>                  
			<!-- the login form-->
<form action="reg1_action.php" method="post" id="myform">
                <div class="login">
				<table width="400px">
<tr><td><label>Firstname</label></td>
    <td><input type="text" name="firstname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Lastname</label></td>
    <td><input type="text" name="lastname" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Username</label></td>
    <td><input type="text" name="username" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr><td><label>Password</label></td>
    <td><input type="password" name="password" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Course</label></td>
    <td><select name="course" id="course" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Choose course</option>
    <option value="CSE">Computer Science And Engineering</option>
    <option value="EEE">Electronics And Electrical Engineering</option>
    <option value="ME">Mechanical Engineering</option>
    <option value="CE">Civil Engineering</option></select></td>
</tr>
<tr><td><label>Registration Number</label></td>
    <td><input type="text" name="stud_id" value="" style="width:250px; height:34px; border:1px solid #336666;"/></td>
</tr>
<tr>
    <td><label>Year Of study</label></td>
    <td><select name="yos" id="yos" style="width:250px; height:34px; border:1px solid #336666;">
    <option value="000">Choose year Of Study</option>
    <option value="First Year">First Year</option>
    <option value="Second Year">Second Year</option>
    <option value="Third Year">Third Year</option>
    <option value="Fourth Year">Fourth Year</option></select></td>
</tr>
<tr><td colspan="2" align="left"><input type="submit" name="submit" value="Next" style="width:100px; height:34px; border:1px solid #336666; border-radius:4px;"></td></tr>
				 </table>
			    </div>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
 frmvalidator.addValidation("course","req","Please enter student course"); 
 frmvalidator.addValidation("course","dontselect=000","You don't select course");
 frmvalidator.addValidation("stud_id","req","Please enter your registration number"); 
 frmvalidator.addValidation("stud_id","maxlen=50");
 frmvalidator.addValidation("yos","req","Please enter year of study"); 
 frmvalidator.addValidation("yos","dontselect=000","You don't select Year Of study");
</script>
        </fieldset>
        </div>
</div>
</div>
<div id="footer" align="center"><br/><b>&copy;Copyright 2016</b></div>
</body>
</html>
