<?php 

namespace App;

require('fetchData.php');
require('logVisitors.php');

logVisit("User requested info about all unicorns");

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
    <section class="container main-content">
        <h2 class="page-heading">Alla enhörningar</h2>
        <section class="row center-row">
            <ul class="list-group col-sm-12 col-md-10">
            <?php foreach (getAllUnicorns() as $unicorn) : ?>
                <li class="list-group-item list-item-custom">
                    <a href="unicorn.php?id=<?php echo $unicorn->id ?>"><?php echo $unicorn->name ?></a>
                    <a class="btn btn-light" href="unicorn.php?id=<?php echo $unicorn->id ?>">Läs mer...</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </section>
    </section>
</body>
</html>