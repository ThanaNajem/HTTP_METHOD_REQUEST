<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data" id="name_change_form" method="POST" action="v1/employees.php">
	employee name:<br>
	<input type="text" name="employee_name">
	<br>
	employee salary:<br>
	<input type="number" name="employee_salary">
	<br>
	employee age:<br>
	<input type="number" name="employee_age">
	<br>
	<input type="submit" name="send" value="send">

</form>
</body>
</html>