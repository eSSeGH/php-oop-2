<?php

require_once __DIR__."/./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f845cc90f8.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <header class="d-flex justify-content-center mb-5" style="background-color: rgba(0,0,0,0.95); height: 90px;">
            <h1 style="color: coral; line-height: 90px;">PHP OOP 1</h1>
        </header>

        <div class="container">
            <div class="row row-cols-3" style="gap: 30px;">
                <?php 
                    foreach ($products as $product) {
                        
                        if (get_class($product) == 'Food') {
                            $product->printFoodCardHTML();
                        } else if (get_class($product) == 'Game') {
                            $product->printGameCardHTML();
                        } else if (get_class($product) == 'Shelter') {
                            $product->printShelterCardHTML();
                        }
                    }
                ?>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>