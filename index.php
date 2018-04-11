<?php 

if (isset($_GET["id"])) {

}

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
    <header class="container">
        <h1>Enhörningsdatabasen</h1>
    </header>
    <section class="container unicorn-list">
        <h2>Alla enhörningar</h2>
        <!-- Lista alla enhörningar här -->
        <ul class="list-group">
            <li class="list-group-item"><a href="unicorn.php?id=1">Cras justo odio</a></li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </section>
</body>
</html>