<?php 
    session_start();

    require "../classes/Users.php";
    $user_obj   = new User;
    $all_products  = $user_obj->getAllProducts(); 
    // なんで（）の中身いらない？
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">shop</h1>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-text"><?= $_SESSION['full_name'];?></span>
                </li>
                <li class="nav-item">
                    <form action="../actions/logout.php" method="post" class="d-flex ms-3">
                        <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main class="row justify-content-center mt-5">
        <div class="col-6">
            <h2 class="text-center">SHOP</h2>
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <th></th> <!-- Photo -->
                    <th>ID</th>
                    <th>Products Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th> <!-- Action Buttons -->
                </thead>
                <tbody>
                    <?php
                        while ($product = $all_products->fetch_assoc()){
                    ?>
                            <tr>
                                <td>
                                </td>
                                <td><?= $product['id']?></td>
                                <td><?= $product['products_name']?></td>
                                <td><?= $product['price']?></td>
                                <td><?= $product['quantity']?></td>
                                <td>
                                    <?php
                                        if($_SESSION['id'] == $product['id']){
                                    ?>
                                            <a href="edit-user.php" class="btn btn-warning btn-sm" title="Edit">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                    <?php
                                        }
                                    ?>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>