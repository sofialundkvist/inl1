<?php 

namespace App;
require('fetchData.php');

if (isset($_GET["id"])) {
    $unicorn = getUnicorn($_GET["id"]);
    echo $unicorn;
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
        <h1>Enhörningsdatabasen</h1>
    </header>
    <h2>Namn på enhörning</h2>
    <section class="unicorn-list">
        <!-- Lista alla enhörningar här -->
    </section>
</body>
</html>