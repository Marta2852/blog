<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<!-- index.view.php -->

<h1>Blogs</h1>

<!-- Search Form -->
<form method="GET" action="index.php">
  <input type="text" name="search_query" placeholder="Search..." value="<?= htmlspecialchars($_GET['search_query'] ?? '') ?>" class="search-input"/>
  <button type="submit" class="search-button">Search</button>
</form>

<?php if (isset($_GET['search_query']) && !empty($_GET['search_query'])): ?>
  <h2>Search Results for "<?= htmlspecialchars($_GET['search_query']) ?>"</h2>
<?php endif; ?>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li>
      <a href="show?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['content']) ?></a>
    </li>
  <?php } ?>
</ul>


<?php require "views/components/footer.php" ?>
