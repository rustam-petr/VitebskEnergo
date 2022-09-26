<?php
include "config.php";
include "function.php";

$tests = get_topic();
print_r($tests);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($tests) {
    ?>
    <h3> Выберите тему</h3>
    <?php foreach ($tests as $test) { ?>
        <p><a href="?id=<?= $test['id'] ?>"><?= $test['topic'] ?></a></p>
    <?php } ?>
<?php } ?>

</body>
</html>