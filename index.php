<?php
// Šis fails ir, lai izvadītu datus no datubāzes uz
// lapu 
require "functions.php";
require "Database.php";
require "views/index.view.php";


$config = require("config.php");

$query = "SELECT * FROM posts";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
  $id = $_GET["id"];
  $query .= " WHERE id=:id";
  $params[":id"] = $id;
}

if (isset($_GET["category"]) && $_GET["category"] != "") {
  $category = $_GET["category"];
  $query .= " JOIN categories
              ON posts.category_id = categories.id
              WHERE categories.name = :category
            ";
  $params[":category"] = $category;
}

$db = new Database($config);
$posts = $db
          ->execute($query, $params)
          ->fetchAll();

