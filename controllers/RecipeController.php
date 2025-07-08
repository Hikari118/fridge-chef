<?php
// エラー表示
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// モデルやレシピ提案用ロジックを読み込み
require_once __DIR__ . '/../models/Ingredient.php';

$ingredientModel = new Ingredient();
$ingredients = $ingredientModel->getAll();

// 食材リストをもとに、簡単なレシピ候補を生成
$recipes = [];

foreach ($ingredients as $item) {
  $name = $item['name'];
  switch ($name) {
    case 'たまご':
      $recipes[] = 'たまご焼き';
      break;
    case 'ツナ缶':
      $recipes[] = 'ツナマヨ丼';
      break;
    case 'にんじん':
      $recipes[] = 'にんじんのきんぴら';
      break;
    case 'ブロッコリー':
      $recipes[] = 'ブロッコリーのサラダ';
      break;
  }
}

// ビューに渡す
require_once __DIR__ . '/../views/recipes/list.php';
