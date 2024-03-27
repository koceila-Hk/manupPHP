<?php include './variable_articles.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-center font-bold text-2xl">Liste des articles</h1>

    <div class="grid grid-cols-2 container mx-auto gap-8">
        <?php foreach ($articles as $a) { ?>

            <div class="rounded-lg shadow border grid grid-cols-2">
                <img class="rounded-l" src="<?= $a['image'] ?>" alt="<?= $a['image_alt'] ?>">

                <div>
                    <h2 class="italic"><?= $a['titre'] ?></h2>
                    <p class="text-sm font-thin"><?= $a['date'] ?></p>

                    <p><?= empty($a['contenu']) ? '' : substr($a['contenu'], 0, 300) . '...' ?></p>
                </div>
            </div>

        <?php } ?>
    </div>
</body>

</html>