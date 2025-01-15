<style>
    .center-img { display: block; margin-left: auto; margin-right: auto; max-width: 150px; height: 150px;
    }
</style>

<?php
include_once 'modules/database.php';
global $db;

$query = $db->prepare('SELECT * FROM smartphone');
$query->execute();
$smartphones = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($smartphones);   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Cards</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
        <?php foreach ($smartphones as $smartphone): ?>
            
                    <div class="col-md-4">
                        <div class="card mt-3 border border-dark">
                            <img src="<?= $smartphone['image'] ?>" class="border-bottom border-dark center-img" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $smartphone['name'] ?></h5>
                                <a href="#" class="btn btn-warning">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
        <?php endforeach;?>
    </div>
    <br>
    <a href="insert.php" class="btn btn-primary">Insert</a>
</div>
          
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

      