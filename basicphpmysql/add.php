<?php 
include_once('config.php');

if (isset($_POST['add'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
    header("Location: index.php");
};
?>

<html>
<head>
<title>Form tambah data</title>
</head>

<body>
<div class="container">
<form class="form-group" name="add_user" method="post" action="add.php">
<table class="table table-striped mt-5" border="1">
<tr>
<td>Name</td>
<td><input type="text" class="form-control" name="name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="form-control" name="email"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="text" class="form-control" name="mobile"></td>
</tr>
</table>
<td><input class="btn btn-secondary float-right" type="submit" value="submit" name="add"></td>

</form>
</div>
</body>
</html>