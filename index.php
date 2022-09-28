<?php
include "config.php";
include "function.php";

$topics = get_topic();


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
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <?php
            if ($topics) {
                ?>
                <h3>Выберите тему</h3>
            <form action="one.php" method="post">
                <?php foreach ($topics as $topic) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="<?= $topic['id'] ?>"
                               name="value" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?= $topic['topic'] ?>
                        </label>
                    </div>
                    <!--                    <p><a href="?id=--><?//= $topic['id'] ?><!--">--><?//= $topic['topic'] ?><!--</a></p>-->
                <?php }
            } ?>


                <input class="btn btn-primary" type="submit" name="button" value="Начать тест">
            </form>

        </div>
        <div class="col">
        </div>
    </div>
</div>


</body>
</html>