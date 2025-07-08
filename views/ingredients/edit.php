<?php
// views/ingredients/edit.php

require_once __DIR__ . '/../../models/Ingredient.php';

// IDが渡っていない場合は一覧に戻す
if (!isset($_GET['id'])) {
    header('Location: ../../index.php');
    exit;
}

$model = new Ingredient();
$ingredient = $model->getById($_GET['id']);

if (!$ingredient) {
    echo "指定された食材が見つかりません。";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>食材編集</title>
</head>
<body>
    <h1>食材の編集</h1>
    <form action="../../controllers/IngredientController.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($ingredient['id']) ?>">

        <label>食材名：</label>
        <input type="text" name="name" value="<?= htmlspecialchars($ingredient['name']) ?>" required><br>

        <label>カテゴリ：</label>
        <input type="text" name="category" value="<?= htmlspecialchars($ingredient['category']) ?>" required><br>

        <label>数量：</label>
        <input type="number" name="quantity" value="<?= htmlspecialchars($ingredient['quantity']) ?>" required><br>

        <label>賞味期限：</label>
        <input type="date" name="expiration_date" value="<?= htmlspecialchars($ingredient['expiration_date']) ?>" required><br>

        <input type="submit" name="action" value="update">
    </form>

    <p><a href="../../index.php">← 戻る</a></p>
</body>
</html>
