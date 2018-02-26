<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register Form</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body>
<p align="center" class="style1">WELCOME TO BINALBAGAN CATHOLIC COLLEGE ALUMNI REGISTRATION</p>
<div class="center_box_content">
	<table width="600" align="center">
		<tbody>
			<tr>
				<td align="left"><h4 class="center_box_sub_heading"><span>Creating new account</span></h4></td>
				<td align="right">Are you the admin ? <a href="login.php">Login here</a></td>
			</tr>
		</tbody>
	</table>
    <p>&nbsp;</p>
	<table width="600" align="center">
	<form id="form1" name="form1" method="post" action="save.php">
	<tbody>
			<tr>
				<td colspan="3"><b>Personal Details</b>
					<hr size="1" noshade="noshade"></td>
			</tr>
			<tr>
				<td align="right">FIRST NAME </td>
				<td>*</td>
				<td nowrap="nowrap">
				  <input type="text" name="fname" />
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
					  <input type="submit" name="Submit" value="Submit" />
								</td>
			</tr>
			</form>
			</table>
</body>
</html>
