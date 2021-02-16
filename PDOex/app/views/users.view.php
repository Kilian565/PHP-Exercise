<?php require('partials/head.php') ?>


    <h1>ALL USERS</h1>

<?php foreach ($users as $user)  : ?>

    <li><?= $user->name ?></li>

<?php endforeach; ?>


    <h1>SUBMIT YOUR NAME</h1>

    <form method="post" action="/users">

        <input name="name">
        <button type="submit">SUBMIT</button>

    </form>

<?php require('partials/footer.php');