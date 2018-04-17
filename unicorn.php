<?php 

namespace App;

require('fetchData.php');
require('logVisitors.php');

if (isset($_GET["id"])) {
    $unicorn = getUnicorn($_GET["id"]);

    if (!$unicorn) {
        logVisit("User requested info about a unicorn with an id that did not exist");
    } else {
        logVisit("User requested info about " . $unicorn->name);
    }

} else {
    logVisit("User visited unicorn.php to search for a unicorn");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorns</title>
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
        <div class="row center-row search-form">
            <form action="unicorn.php" method="get" class="row">
                <input type="text" name="id" placeholder="Skriv in id på enhörningen" />
                <input type="submit" value="Visa enhörning" />
            </form>
        </div>
        <?php if ($unicorn === false): ?>
            <div class="row center-row">
                <p class="alert alert-danger col-sm-12 col-md-6 message">Det finns ingen enhörning med detta id</p>
            </div>
        <?php endif; ?>
        <article class="row center-row">
            <?php if(!$unicorn): ?>
                <p class="col-xs-12">Sök efter en enhörning för att visa information om den</p>
            <?php elseif (!is_null($unicorn)): ?>
                <div class="col-md col-xs-12">
                    <h2><?= $unicorn->name ?></h2>
                    <p><?= $unicorn->description ?></p>
                    <p><span class="bold">Sågs:</span> <?= date("Y-m-d", strtotime($unicorn->spottedWhen)) ?> av <?= $unicorn->reportedBy ?></p>
                </div>
                <img src=<?php echo $unicorn->image ?> alt="Bild på enhörning" class="col-md col-xs-12">
            <?php endif; ?>
        </article>
    </section>
</body>
</html>