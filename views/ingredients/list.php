<!-- views/ingredients/list.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>食材一覧</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #f2f2f2;
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .button-link {
      display: inline-block;
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      margin: 10px;
      text-decoration: none;
      border-radius: 4px;
    }

    table {
      width: 80%;
      margin: 30px auto;
      border-collapse: collapse;
      background-color: white;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #e0e0e0;
    }
  </style>
</head>
<body>
  <h1>冷蔵庫の食材一覧</h1>

  <div style="text-align: center;">
    <a href="views/ingredients/add.php" class="button-link">＋ 食材を追加する</a>
    <a href="controllers/RecipeController.php" class="button-link">▶ レシピを提案してもらう</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>食材名</th>
        <th>カテゴリー</th>
        <th>数量</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($ingredients as $ingredient): ?>
        <tr>
          <td><?= htmlspecialchars($ingredient['id']) ?></td>
          <td><?= htmlspecialchars($ingredient['name']) ?></td>
          <td><?= htmlspecialchars($ingredient['category']) ?></td>
          <td><?= htmlspecialchars($ingredient['quantity']) ?></td>
          <td>
            <a href="views/ingredients/edit.php?id=<?= $ingredient['id'] ?>">編集</a> |
            <a href="controllers/IngredientController.php?action=delete&id=<?= $ingredient['id'] ?>" onclick="return confirm('削除しますか？')">削除</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
