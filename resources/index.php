<!doctype html>
<html lang="en">
<head>
    <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

<ul>
    <?php foreach ($filterProducts AS $product): ?>
        <li><?= $product['name'];?></li>
        <li><?= $product['price'];?></li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . '/includes/footer.php' ?>

</body>
</html>