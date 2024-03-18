<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Create a Post </h1>
    <form method="POST">
        <label>Title
            <input name="title"/>
        </label>
        <label>Category_ID
            <input name="category-id"/>
        </label>
        <button>Submit</button>
    </form>

    <ul>
        <li>1. sport</li>
        <li>2. music</li>
        <li>3. food</li>
    </ul>
<?php
require "components/footer.php";  
?>