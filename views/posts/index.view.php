<?php
require "views/components/header.php";
require "views/components/navbar.php";

// Handle the search query
$searchQuery = $_GET['search_query'] ?? '';
if (!empty($searchQuery)) {
    $filteredPosts = array_filter($posts, function ($post) use ($searchQuery) {
        return stripos($post['content'], $searchQuery) !== false;
    });
} else {
    $filteredPosts = $posts; // No filtering if search query is empty
}
?>

<h1>Blogs</h1>

<form method="GET">
  <input type="text" name="search_query" placeholder="Search..." 
         value="<?= htmlspecialchars($searchQuery) ?>" class="search-input" />
  <button type="submit" class="search-button">Search</button>
</form>

<?php if (!empty($searchQuery)): ?>
  <h2>Search Results for "<?= htmlspecialchars($searchQuery) ?>"</h2>
<?php endif; ?>

<ul>
  <?php if (empty($filteredPosts)) { ?>
    <p>No results found.</p>
  <?php } else { ?>
    <?php foreach ($filteredPosts as $post) { ?>
      <li>
        <a href="show?id=<?= $post['id'] ?>">
          <?= htmlspecialchars($post['content']) ?>
        </a>
      </li>
    <?php } ?>
  <?php } ?>
</ul>

<?php require "views/components/footer.php"; ?>

