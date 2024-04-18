<?php 
require "views/components/head.php";
?>
    <h1> Log-in </h1>
    <form method="POST">

        <label>Email
            <input type="email" name="email" value="<?= $_POST["email"] ?? "" ?>"/>
        </label>
        </br>
        <label>Password
            <input type="password" name="password" value="<?= $_POST["password"] ?? "" ?>"/>
        </label>
        </br>
        <button>Submit</button>


        <?php if (isset($errors["email"])) { ?>
                <p class="invalid-data"> <?= $errors["email"] ?> </p>
        <?php } ?>
        <?php if (isset($errors["password"])) { ?>
                <p class="invalid-data"> <?= $errors["password"] ?> </p>
        <?php } ?>
    </form>
    <a href="/register"> Register </a>

    <?php if(isset($_SESSION["flash"])) { ?>
        <p class="flash"> <?=$_SESSION["flash"]?></p>
    <?php } ?>

<?php
require "views/components/footer.php";  
?>