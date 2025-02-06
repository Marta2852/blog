<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>

<a href="edit?id=<?= $post["id"] ?>">
    <button style="background-color: #f48fb1; color: white; border: none; padding: 5px 10px; font-size: 12px; border-radius: 6px; cursor: pointer;">
        Edit
    </button>
</a>


<?php require "views/components/footer.php" ?>