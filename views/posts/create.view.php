<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Create Post!</h1>

<form method="POST" style="max-width: 300px; margin: 20px 0; display: flex; gap: 10px; align-items: center;">

    <label style="font-weight: bold; color: #ffffff; display: block; flex: 1;">
        <textarea name="content" required style="border: 1px solid #f48fb1; border-radius: 5px; font-size: 14px; font-family: Arial, sans-serif; background-color: #ffffff; color: #333; width: 100%;"></textarea>
    </label>

    <?php if(isset($errors["content"])) { ?>
        <p style="color: #ff1744; font-size: 14px; margin-top: 5px;"><?= $errors["content"] ?></p>
    <?php } ?>

    <button type="submit" style="background-color: #f48fb1; color: white; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; transition: background-color 0.3s;">
        Submit
    </button>
</form>



<?php require "views/components/footer.php"; ?>
