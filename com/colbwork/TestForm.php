<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <title>HTML form for insert users</title>
</head>
<body>

<form action=<?php echo$_SERVER['PHP_SELF']?> method="post">
 Name: <input type="text" name="name" value="<?php if (isset ($_post['name'])) echo $_POST['name']; ?>"/><br />
 Password: <input type="text" name="pass" /><br />
 E-mail: <input type="text" name="email" /><br />
 <input type="submit" value="Send" />
</form>

</body>
</html>

<?php
?>