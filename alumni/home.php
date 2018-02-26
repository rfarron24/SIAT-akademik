<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home form</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<p>&nbsp;</p>
<table width="1074" border="1" align="center">
  <tr>
    <td width="115"><div align="center"><span class="style1"><a href="home.php">HOME</a></span></div></td>
    <td width="232"><div align="center"><span class="style1"><a href="register.php">ALUMNI REGISTER</a></span></div></td>
    <td width="217"><div align="center"><span class="style1"><a href="alumnirecord.php">ALUMNI RECORD</a> </span></div></td>
    <td width="203"><div align="center"><span class="style1"><a href="record.php">ALUMNI VIEW </a></span></div></td>
    <td width="273"><div align="center"><span class="style1"><a href="login.php">ADMIN LOGIN</a> </span></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
echo "Current ADMIN: "."<u>".$_SESSION['user']."</u>";
?>
</body>
</html>
