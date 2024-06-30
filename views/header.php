<?php
    $alphabet = gen_alphabet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="./styles/custom.css" />
    <title>Name explorer</title>
</head>
<body>
    <header>
        <a href="index.php" style="text-decoration: none;"><h1>Name explorer</h1></a>
        <p>Explore and find names</p>
        <nav>
            <?php
            foreach ($alphabet AS $char):
            ?>

                <a href="char.php?<?php echo http_build_query(['char'=> $char]) ?>">
                    <?php echo e($char) ?>
                </a>

            <?php endforeach; ?>
        </nav>
    </header>
    <main>