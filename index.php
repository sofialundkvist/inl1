<?php 

namespace App;

require('fetchData.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhörningsdatabasen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>Enhörningsdatabasen</h1>
        </div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navlink menu-links" href="/index.php">Visa alla enhörningar</a>
                </li>
                <li class="nav-item">
                    <a class="navlink menu-links" href="/unicorn.php">Visa specifik enhörning</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="container unicorn-list main-content">
        <h2>Alla enhörningar</h2>
        <ul class="list-group">
        <?php
            foreach (getAllUnicorns() as $unicorn) {
                echo '<li class="list-group-item"><a href="unicorn.php?id=' . $unicorn->id . '">' . $unicorn->name . '</a></li>';
            }
        ?>
        </ul>
    </section>
</body>
</html>