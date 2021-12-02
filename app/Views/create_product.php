<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajout de produit - Formation CodeIgniter</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h3>Enregistrer un produit</h3>
                <form action="<?= route_to('create_product') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div style="color:red"> <?= \Config\Services::validation()->listErrors()  ?> </div>
                    <?php if(isset($success)) : ?>
                        <div class="alert alert-success"><?= $success ?></div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <input type="text" name="libelle" placeholder="Libelle" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="price" min="0" placeholder="Prix" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="file" accept="image/*" name="image"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="description" id="" placeholder="Description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enregistrer" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>