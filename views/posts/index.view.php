<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Blogs</h1>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li style="display: flex; align-items: center; gap: 5px; margin-bottom: 5px;">
      <a href="show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["content"]) ?></a>

      <a href="edit?id=<?= $post["id"] ?>">
        <button style="background-color: #f48fb1; color: white; border: none; padding: 5px 10px; font-size: 12px; border-radius: 6px; cursor: pointer; margin-left: 18px;">
          Edit
        </button>
      </a>
    </li>
  <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
