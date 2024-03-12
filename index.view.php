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
