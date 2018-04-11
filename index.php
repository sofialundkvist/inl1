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
    <link rel="stylesheet" type="text/css" href="style/index.css" />
</head>
<body>
    <header class="container-fluid">
        <h1>Enhörningsdatabasen</h1>
    </header>
    <section class="container unicorn-list">
        <h2>Alla enhörningar</h2>
        <!-- Lista alla enhörningar här -->
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