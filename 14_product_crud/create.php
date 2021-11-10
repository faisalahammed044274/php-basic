<?php

$pdo = new PDO('mysql:host=localhost; port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// var_dump($_SERVER);
// exit();
// echo $SERVER['REQUEST_METHOD'] ."<br>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = ($_POST['title']);
    $description = ($_POST['description']);
    $price = ($_POST['price']);
    $date = date('Y-m-d H:i:s');

    if(!$title) {
       $errors
    }

    $statement = $pdo->prepare("INSERT INTO product(title, image, description, price, create_date)
    VALUES(:title, :image, :description, :price, :date)");

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
}

?>

<!doctype html>
<html lang="eng">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
  <title>crud</title>
  <style>
    form {
      padding: 20px;
      margin: 30px;
    }
  </style>
</head>

<body>
  <center>
    <h1>Create New Product</h1>
  </center>

div.alert.alert-danger

  <a href="index.php" class="btn btn-success" style="margin: 30px;">View Product</a>

  <form action="" method="post">
    <div class="form-group">
      <label>Product Image</label>
      <br>
      <input type="file" name="image" accept="image/jpeg">
    </div>
    <div class="form-group">
      <label>Product Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label>Product Description</label>
      <textarea type="text" name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label>Product price</label>
      <input type="number" name="price" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
