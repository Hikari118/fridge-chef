<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おすすめレシピ提案</title>
  <style>
    body {
      font-family: 'Helvetica Neue', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 40px;
      text-align: center;
    }

    h1 {
      color: #2c3e50;
      font-size: 28px;
      margin-bottom: 30px;
    }

    .recipe-list {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
      margin-top: 20px;
    }

    .recipe-item {
      background-color: white;
      width: 300px;
      padding: 15px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      font-size: 16px;
      color: #333;
    }

    .back-link {
      display: inline-block;
      margin-top: 40px;
      text-decoration: none;
      color: #3498db;
      font-weight: bold;
    }

    .no-recipe {
      font-size: 16px;
      color: #777;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>冷蔵庫の食材から提案されたレシピ</h1>

  <?php if (!empty($recipes)): ?>
    <div class="recipe-list">
      <?php foreach ($recipes as $recipe): ?>
        <div class="recipe-item"><?= htmlspecialchars($recipe) ?></div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class="no-recipe">提案できるレシピがありませんでした。</p>
  <?php endif; ?>

  <a class="back-link" href="../index.php">← 食材一覧に戻る</a>
</body>
</html>
