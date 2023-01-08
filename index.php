<?php
    // Assign your info to variables
    $name = "Shaun McKinnon";
    $profile_link = "https://www.linkedin.com/in/shaun-mckinnon-82105061/";
    $profile_label = "LinkedIn";
    $image_link = "https://media.licdn.com/dms/image/C4E03AQElfC9PN6XenA/profile-displayphoto-shrink_800_800/0/1600286193072?e=1678320000&v=beta&t=TsveTuWeB-_Fl_DMEV7FXWtmGlrsia3veHxq5_83XUI";

    $recipe_title = "The Perfect Grilled Cheese";
    $recipe_image_link = "https://natashaskitchen.com/wp-content/uploads/2021/08/Grilled-Cheese-Sandwich-SQ.jpg";

    $ingredients = [
        "2 ounces sliced melting cheese (about 2 slices), such as American, Cheddar, muenster, Havarti, Swiss, fontina, Mozzarella, Monterey jack, pepper jack, provolone",
        "2 slices bread, such as white, rye, brioche, sourdough, potato, whole wheat, pumpernickel",
        "1 tablespoon fat, such as mayonnaise, butter or olive, chili or coconut oil",
    ];

    $steps = [
        "Sandwich 2 slices of cheese between 2 slices of bread",
        "Preheat a skillet over medium-low heat",
        "Spread or brush the outside of the sandwich with 1 tablespoon of fat.",
        "Cook until lightly browned, 3 to 4 minutes, on one side",
        "Flip over and cook the other side till lightly browned, 3 to 4 minutes",
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles/style.css">
        <title>Introducing PHP</title>
    </head>

    <body>
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <header>
                        <h1>Introducing PHP & Web Programming</h1>
        
                        <a target="_blank" href="./phpinfo.php">PHP Info</a>
                    </header>

                    <hr>
                </div>
            </div>


            <div class="row mb-5">
                <div class="col">
                    <h2>My Favourite Recipe - <?= $recipe_title ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="<?= $image_link ?>" alt="<?= $name ?>">

                        <div class="card-body">
                            <h5 class="card-title"><?= $name ?></h5>
                            <p class="card-text">Dude is awesome.</p>
                            <a class="btn btn-primary" href="<?= $profile_link ?>" target="_blank"><?= $profile_label ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid img-thumbnail" src="<?= $recipe_image_link ?>" alt="<?= $recipe_title ?>">
                        </div>
                        
                        <div class="col-9">
                            <h3>Ingredients:</h3>
                            <ul>
                                <?php foreach($ingredients as $ingredient): ?>
                                    <li><?= $ingredient ?></li>
                                <?php endforeach ?>
                            </ul>
        
                            <h3>Steps:</h3>
                            <ol>
                                <?php foreach($steps as $step): ?>
                                    <li><?= $step ?></li>
                                <?php endforeach ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>