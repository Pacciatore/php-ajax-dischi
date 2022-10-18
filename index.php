<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Dischi</title>
</head>

<body>

    <?php

    include __DIR__ . '/database.php';
    $filter = '';

    if (isset($_GET['filter'])) {
        $filter = strtolower($_GET['filter']);
        $data = [];

        foreach ($database as $album) {
            if (strlen($filter) === 0 || strtolower($album['genre']) == $filter) {
                $data[] = $album;
            }
        }

        $database = $data;
    };

    ?>

    <header class="pt-4">

        <form action="./index.php" method="get" class="container">
            <input type="text" name="filter" value="<?= $filter ?>">
            <input type="submit" value="Cerca">
        </form>

    </header>


    <main class="container pt-5">

        <div class="album-container">

            <?php

            foreach ($database as $album) {
            ?>

                <div>
                    <?php
                    include __DIR__ . '/card-album.php';
                    ?>
                </div>

            <?php
            }
            ?>

        </div>

    </main>

</body>

</html>