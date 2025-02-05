<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1>Create Post!</h1>

<form method="POST"> 

    <label>
        <p>Content:</p>
        
        <textarea name="content" required><?= htmlspecialchars($_POST["content"] ?? "") ?></textarea>
        
    </label>

    <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
     <?php } ?>

    <br>
    <br>
    <button type="submit">Submit</button>
</form>

<?php require "views/components/footer.php"; ?>