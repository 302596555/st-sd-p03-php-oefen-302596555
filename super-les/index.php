<?php

require 'db.php';
global $db;
$query = $db->prepare('SELECT * FROM category');
$query->execute();


$categories = $query->fetchAll(PDO::FETCH_ASSOC);

?>

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



<table>

    <thead>
    <tr>
        <th scope="col">Category</th>
        <th scope="col">Producten</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
    <tr>
        <td><?= $category['name']?></td>
        <td>
            <a href="products.php?id=<?= $category['id']?>">Producten</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>


</table>

<a href="insert.php">Input</a>

</body>
</html>


