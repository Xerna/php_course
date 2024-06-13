<?php

$pagetitle = "Ricardo's PHP Blog | Introduction to PHP";
$tittle = "Introduction to PHP";
$author = "Ricardo Cerna";
$body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting
            language that has revolutionized web development. With its simplicity,
            flexibility, and vast community support, PHP has become the backbone of
            countless dynamic websites and web applications."
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pagetitle; ?></title>
</head>

<body>
    <main>
        <h1><?= $tittle ?></h1>
        <p>By: <?= $author ?></p>
        <p>
            <?= $body ?>
        </p>
    </main>
</body>

</html>