<?php
// エラー表示
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../models/Ingredient.php';
$ingredientModel = new Ingredient();

// POST処理：登録
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'add') {
  $ingredientModel->create($_POST);
  header('Location: ../index.php');
  exit;
}

// POST処理：更新
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'update') {
  $ingredientModel->update($_POST);
  header('Location: ../index.php');
  exit;
}

// GET処理：削除（一覧表示より上に）
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
  $ingredientModel->delete($_GET['id']);
  header('Location: ../index.php');
  exit;
}

// GET処理：一覧表示
$ingredients = $ingredientModel->getAll();
require __DIR__ . '/../views/ingredients/list.php';
