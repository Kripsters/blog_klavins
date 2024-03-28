<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <form>
        <p>id:</p><input name='id' value='<?=($_GET["id"] ?? "") ?>'/>
        <p>category:</p><input name='cat_name' value='<?=($_GET["cat_name"] ?? "")?>'/>
        <br/> <br/>
        <button>Submit</button>
    </form>

    <h1> Posts </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?= htmlspecialchars($post["title"])?>
            <form class="deleteform" method="POST" action="/delete">
            <button class="test" name="id" value="<?= $post["id"] ?>">Delete</button>
            </form>
            </li>
        <?php } ?>

    </ul>
<?php 
require "views/components/footer.php";
?>