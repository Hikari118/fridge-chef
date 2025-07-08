# 🧊 FridgeChef - 冷蔵庫の食材管理＆レシピ提案アプリ

## 🟠 概要
FridgeChef は、冷蔵庫の中にある食材を登録・管理し、それに基づいて作れるレシピを提案してくれる Web アプリケーションです。  
食材の賞味期限管理、在庫管理、レシピ提案の機能を備えており、PHP（オブジェクト指向）とMySQLで構成されています。

---

## 🎋 主な機能

- 食材の登録・編集・削除（CRUD対応）
- 食材一覧の表示（賞味期限順）
- レシピ提案機能（所持食材とマッチするレシピを静的データから提案）

---

## 🗂️ ファイル構成（MVCベース）
fridge-chef/
├── index.php
├── controllers/
│ ├── IngredientController.php
│ └── RecipeController.php
├── models/
│ ├── Database.php
│ ├── Ingredient.php
│ └── Recipe.php
├── views/
│ ├── ingredients/
│ │ ├── list.php
│ │ ├── add.php
│ │ └── edit.php
│ └── recipes/
│ └── list.php


## 🛠️ 使用技術

- 言語：PHP 8.x（オブジェクト指向）
- データベース：MySQL（XAMPP）
- フロントエンド：HTML / CSS 
- アーキテクチャ：MVC構成

##  ✨ 今後のアップデート（予定）
レシピデータをDB管理化

賞味期限アラート表示

ユーザー認証（ログイン）機能

モバイル対応UI


## 👩‍💻 制作
作者：Hikari

制作時期：2025年7月

授業課題「Webプログラミング開発」にて制作
