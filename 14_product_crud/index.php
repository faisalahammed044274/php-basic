<?php

$pdo = new PDO('mysql:host=localhost; port=3306;dbname=product_crud', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM product ORDER BY create_date DESC');

$statement->execute();

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($products);

?>


<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>crud</title>
    <style>
        .table{
            padding:650px;
        }
    </style>
  </head>
  <body>
   <center> <h1>Product CRUD</h1></center>
   <a href="create.php" class="btn btn-success" style="margin: 20px;">Create Product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $product):  ?>
      <tr>
        <th scope="row"><?php echo $i +1 ?></th> 
        <td></td>
        <td><?php echo $product["title"]?></td>
        <td><?php echo $product["price"]?></td>
        <td><?php echo $product["create_date"]?></td>
        <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        
      </tr>
      <?php endforeach ?>
  </tbody>
</table>

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
