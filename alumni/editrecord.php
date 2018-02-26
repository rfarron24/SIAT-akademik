<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>editrecord form</title>
</head>
<body>
<?php
if($_GET['action']=="EDITING")
{
$showID=$_GET['editID'];
$_SESSION['sessID']=$showID; 
?>
<?php
include("connection.php");
$this_ID = $_SESSION['sessID'];
$query = mysql_query("Select * from personalinfo where alumniID = '" . $this_ID . "'");
while($row=mysql_fetch_array($query))
{
$fname=$row['fname'];
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$alumniID=$_REQUEST['alumniID'];
$contact=$_REQUEST['contact'];
?>
<table align="center" width="600" bgcolor="#666666">
<form id="form1" name="form1" method="post" action="save.php">
<tbody>
			<tr>
				<td colspan="3"><div align="center"><b>EDIT RECORD</b>
				  </div>
			  <hr size="1" noshade="noshade"></td>
			</tr>
			<tr>
				<td align="right">FIRST NAME </td>
				<td>*</td>
				<td nowrap="nowrap">
				  <input type="text" name="fname" value="<?php echo $fname;?>"/>
				  				</td>
			</tr>
			<tr>
				<td align="right">LAST NAME </td>
				<td>*</td>
				<td nowrap="nowrap">
				  <input type="text" name="lname" />				</td>
			</tr>
			<tr>
				<td align="right">ALUMNI ID </td>
				<td>*</td>
				<td nowrap="nowrap">
				  <input type="text" name="alumniID" />				</td>
			</tr>
			<tr>
				<td align="right">CONTACT NO. </td>
				<td>*</td>
				<td nowrap="nowrap">
				  <input type="text" name="contact" />				</td>
			</tr>
			<tbody>
			<tr>
			  <td colspan="3">
					<hr size="1" noshade="noshade">
					  <input type="submit" name="Submit" value="Update" />
								</td>
			</tr>
			</form>
</table>
</body>
</html>