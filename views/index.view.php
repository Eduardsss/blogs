<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<nav>
<a href="about">About Us</a>
<a href="story.php">Story</a>
</nav>
</header>
<?php
echo "<form>";
echo "<input name='id' value='" . ($GET["id"] ?? "") . "'/>";
echo "<button>Filter by ID</button>";
echo "</form>";

echo "<form>";
echo "<input name='category'value='" . ($GET["category"] ?? "") . "'/>";
echo "<button>Filter by category</button>";
echo "</form>";

echo "<h1>Posts</h1>";
echo "<ul>";
foreach($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
echo "</ul>";
?>
</body>
</html>




