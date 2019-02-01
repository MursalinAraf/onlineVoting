<?php 
//include "admin_auth.php";
session_start();
include "header_student.php";?>
<div id="cover">
<div id="content">
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
<br/><h3>Make a vote.</h3>
  <div id="login">
<table width="100%">
<form action="student_vote.php" name="vote" method="post" id="myform">
<tr>
<td align="left"><img src="candidates/dd1.jpg" width="200px" height="100%"></td>
<td align="left">
<input type="radio" name="cand1" value="1" size="10"/>MD HASAN ABED-President<br/><br/>
<input type="radio" name="vice1" value="3" size="10"/>SAYEM HASAN-Vice<br/>
</td>
<td align="left"><img src="candidates/dd2.jpg" width="200px" height="100%"></td>
</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="left"><?php global $msg; echo $msg;?>
                <?php global $error; echo $error;?>
</td>
</tr>
<tr>
<td align="left"><img src="candidates/dd3.jpg" width="200px" height="100%"></td>
<td align="left">
<input type="radio" name="cand1" value="2" size="10"/>FARIN ZARA - President<br/><br/>
<input type="radio" name="vice1" value="4" size="10"/>NAZIHA KABIR-Vice<br/>
</td>
<td align="left"><img src="candidates/dd4.jpg" width="200px" height="100%"></td>
</tr>
<tr>
<td align="center"><input type="submit" value="MAKE A VOTE" name="submit"/></td>
</tr>
</form>
<script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select president candidate to vote for.");
 frmvalidator.addValidation("vice1","req","Please select vice candidate to vote for.");  
</script>
</table>
        </div>

</div>
</div>
<?php include "footer.php";?>
