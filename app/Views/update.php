<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Update Employee</h1>
<form method="post" action="index.php?action=update&id=<?= $old_employee['id'] ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $old_employee['name'] ?>" required><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="<?= $old_employee['age'] ?>" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $old_employee['email'] ?>" required><br>
    <button type="submit">update</button>
</form>
<a href="index.php">Back to List</a>
</body>
</html>