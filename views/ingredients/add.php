<?php
// エラー表示（必要なら）
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>食材を追加</title>
  <style>
    body {
      font-family: 'Helvetica Neue', sans-serif;
      background-color: #f7f7f7;
      padding: 40px;
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }

    .back-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>食材を追加</h1>

    <form action="../../controllers/IngredientController.php" method="post">
      <input type="hidden" name="action" value="add">

      <label for="name">食材名</label>
      <input type="text" id="name" name="name" required>

      <label for="category">カテゴリー</label>
      <input type="text" id="category" name="category" required>


      <label for="quantity">数量</label>
      <input type="number" id="quantity" name="quantity" min="1" required>

      <button type="submit">追加する</button>
    </form>

    <a class="back-link" href="../../index.php">← 一覧に戻る</a>
  </div>
</body>
</html>
