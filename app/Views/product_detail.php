<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?= $product->libelle ?> - Formation CodeIgniter</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <img src="<?= $product->image ?>" height="250" alt="">
                    <h1><?= $product->libelle ?></h1>
                    <h3>Prix : <?= $product->price ?></h3>
                    <p>
                        <?= $product->description ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>