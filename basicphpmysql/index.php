<?php
include_once('config.php');
$result = mysqli_query($mysqli, "select * from users");
?>

<html>
<head>
<title>Php Mysql</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<table class = "table table-striped mt-5" width = "80%" border = 1>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Update</th>
</tr>
<?php while ($user_data = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$user_data['name']."</td>";
    echo "<td>".$user_data['mobile']."</td>";
    echo "<td>".$user_data['email']."</td>";
    echo "<td><a class = 'btn btn-secondary btn-sm' href='edit.php?id=$user_data[id]'>Edit</a> <a class = 'btn btn-secondary btn-sm' href='delete.php?id=$user_data[id]'>Delete</a></td>";
    echo "</tr>";};
?>
</table>

<a href="add.php" class="float-right btn btn-secondary btn-sm">Tambah data</a>
</div>      
</body>
</html>