<!Doctype html>
<html>
<head>
    <title>Jalgratturi eksamiportaal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
</head>
<body>
<?php
include_once('header.php');
?>
<?php
include('navigation.php');
?>
<main>
    <?php
    if(isSet($_GET["page"])){
        include('content/'.$_GET["page"].".php");
    } else {
        include('content/pealeht.php');
    }
    ?>
</main>

<?php
include('footer.php');
?>
</body>
</html>
