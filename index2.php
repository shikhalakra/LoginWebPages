<!DOCTYPE html>
<html>
<head>
<script language="javascript" src="s1.js"></script>
</head>
<body>
<h1>New User Registration</h1>
          
<form name="myform" action="registration.php" method="post" onSubmit="return validate()">
<table >
<tr>
<td colspan=2>
<center><font size=4><b>Registration Form</b></font></center>
</td>
</tr>
<tr>
<td>fullName</td>
<td><input type="text" name="fullname" id="fullname" size="30"/></td>
</tr>
<tr>
  <tr>

  <td>email-Id</td>

  <td><input type="text" name="emailid" id="emailid" size="30"/></td>

  </tr>


<tr>

  <td>DOB</td>

  <td><input type="text" name="dob" id="dob" size="30"/></td>

  </tr>


<tr>

  <td>MobileNo</td>

  <td><input type="text" name="mobileno" id="mobileno" size="30"/></td>

  </tr>
  <tr>

  <td>password</td>
  
  <td colspan="2"><input type="password" name="password" id="password" required/>
	</tr>

  <tr>

  <td><input type="reset"></td>

  <td colspan="2"><input type="submit" value="Submit Form" /></td>

  </tr>
  
  </table>

  </form>

  </body>

  </html>