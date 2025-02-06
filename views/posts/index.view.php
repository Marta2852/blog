<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Blogs</h1>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li style="display: flex; align-items: center; gap: 5px; margin-bottom: 5px;">
      <a href="show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["content"]) ?></a>
    </li>
  <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
