<?php
session_start();
require 'db/db.php';

$query = $pdo->query('SELECT * FROM recipes ORDER BY created_at DESC');
$recipes = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cooking Project</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <h2>Ovqat mahsulotlari uchun rasm yuklang</h2>
        <input type='file'>
        <div>
        <iframe src="type.php" frameborder="1"></iframe>
        <iframe src="type1.php" frameborder="1"></iframe>
        <iframe src="type2.php" frameborder="1"></iframe>
        <iframe src="type3.php" frameborder="1"></iframe></div>
        <ul>
            <?php foreach ($recipes as $recipe): ?>
                <li>
                    <a href="recipes/view.php?id=<?= $recipe['id'] ?>">
                        <?= htmlspecialchars($recipe['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
