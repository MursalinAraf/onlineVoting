<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '') || (($_SESSION['SESS_RANK'])!='administrator') ) {
		header("location: login.php");
		exit();
	}
?>

<?php 
session_start();?>

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
<a href="candidate.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="candidate.php">Questions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="votes.php">Votes</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a>
</div>

<div id="cover">
<div id="content">
<h4>Hellow,&nbsp;<?php echo $_SESSION['SESS_NAME'] ;?><br /></h4>
  <div id="login">

<h3>Candidates and Votes</h3>
<?php
include'connection.php';
	$member=mysql_query("select * from candidate");
	if(mysql_num_rows($member)==0)
	{
		echo '<font color="red">No results found</font>';
	}
	else
	{
		echo '<table><tr bgcolor="#FF6600">
<td width="100px">ID</td>		
<td width="100px">FULLNAME</td>
<td width="100px">POSITION</td>
<td width="100px">ABOUT</td>
<td width="100px">VOTE</td>
</tr>';
 while($mb=mysql_fetch_object($member))
		{	
			$id=$mb->cand_id;
			$name=$mb->fullname;
			$pos=$mb->position;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table>';
	}
?>

        </div>
        

</div>
</div>
<div id="footer" align="center"><br/><b>&copy;Copyright 2016</b></div>
</body>
</html>
