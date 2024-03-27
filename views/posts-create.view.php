<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Create a Post </h1>
    <form method="POST">
        <label>Title
            <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
            <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"> <?= $errors["title"] ?> </p>
            <?php } ?>
        </label>
        <label>Category_ID
            <select name="cat_id">
                <option value="1">sport</option>
                <option value="2">music</option>
                <option value="3">food</option>
            </select> 
    <?php if (isset($errors["cat_id"])) { ?>
        <p class="invalid-data"> <?= $errors["cat_id"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "components/footer.php";  
?>