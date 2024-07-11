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
    <h1>Employee list</h1>
    <a href="index.php?action=create">Add new employee</a>
    <table class="thead-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        <?php foreach ($result as $item) {?>
        <tr>
            <th scope="row"><?= $i++ ?></th>
            <td><?= $item['name'] ?></td>
            <td><?= $item['age'] ?></td>
            <td><?= $item['email'] ?></td>
            <td>
                <a href="index.php?action=detail&id=<?= $item['id'] ?>">Detail</a>
                <a href="index.php?action=delete&id=<?= $item['id'] ?>">Delete</a>
                <a href="index.php?action=update&id=<?= $item['id'] ?>">Update</a>
            </td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>