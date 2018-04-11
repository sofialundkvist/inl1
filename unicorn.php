<?php 

namespace App;

require('fetchData.php');

if (isset($_GET["id"])) {
    $unicorn = getUnicorn($_GET["id"]);
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
    <link rel="stylesheet" type="text/css" href="style/unicorn.css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>Enhörningsdatabasen</h1>
        </div>
    </header>
    <section class="container unicorn-info">
        <div class="row">
            <div class="col-md col-xs-12">
                <h2><?= $unicorn->name ?></h2>
                <p><?= $unicorn->description ?></p>
                <p><span class="bold">Sågs:</span> <?= date("Y-m-d", strtotime($unicorn->spottedWhen)) ?> av <?= $unicorn->reportedBy ?></p>
            </div>
            <img src=<?= $unciron->image ?> alt="Bild på enhörning" class="col-md col-xs-12">
        </div>
    </section>
</body>
</html>