<?php 
require "views/components/head.php";
require "views/components/navbar.php";

?>

<h1>Edit a post</h1>
<form method="POST">
<input name="id" value="<?= $post["id"] ?>" type="hidden">
        <label>Title
            <input name="title" value="<?= $_POST["title"] ?? $post["title"] ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <label>Category_ID
            <select name="cat_id">
                <option value="1" <?= ($_POST["cat_id"] ?? $post["category_id"]) == 1 ? "selected" : "" ?> >sport </option>
                <option value="2" <?= ($_POST["cat_id"] ?? $post["category_id"]) == 2 ? "selected" : "" ?> >music </option>
                <option value="3" <?= ($_POST["cat_id"] ?? $post["category_id"]) == 3 ? "selected" : "" ?> >food </option>
            </select> 
    <?php if (isset($errors["cat_id"])) { ?>
        <p class="invalid-data"> <?= $errors["cat_id"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "views/components/footer.php";  
?>