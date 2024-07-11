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
    <h1>Employee Detail</h1>
    <h3>Name: <?= $result['name'] ?></h3>
    <h3>Age: <?= $result['age'] ?></h3>
    <h3>Email: <?= $result['email'] ?></h3>
    <a href="index.php">Back to List</a>
</body>
</html>