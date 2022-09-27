<?php
include "config.php";
include "function.php";

$topics = get_topic();
print_r($topics);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<body>
<?php
if ($topics) {
    ?>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
       Выберите тему
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php foreach ($topics as $topic) { ?>
        <li><a href="?id=<?= $topic['id'] ?>"><?= $topic['topic'] ?></a></li>
<!--        <p><a href="?id=--><?//= $topic['id'] ?><!--">--><?//= $topic['topic'] ?><!--</a></p>-->
    <?php } ?>
<?php } ?>




</body>
</html>