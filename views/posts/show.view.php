<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>

<a href="edit?id=<?= $post["id"] ?>">
    <button style="background-color: #f48fb1; color: white; border: none; padding: 5px 10px; font-size: 12px; border-radius: 6px; cursor: pointer; margin: 5px">
        Edit
    </button>
</a>

<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?>"> <!-- The post ID to delete -->
    <button type="submit" style="background-color: #f48fb1; color: white; border: none; padding: 5px 10px; font-size: 12px; border-radius: 6px; cursor: pointer; margin: 5px">
        Delete
    </button>
</form>

<?php require "views/components/footer.php" ?>