<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Blogs</h1>

<form>
  <input value='<?= htmlspecialchars($_GET["content"] ?? "") ?>' name='content' />
  <button>Meklēt</button>
</form>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?> </a> </li>  <!-- htmlspecialchars applied here -->
  <?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
