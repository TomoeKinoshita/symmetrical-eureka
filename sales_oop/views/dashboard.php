<?php
    session_start();
    require '../classes/Sales.php';
    $sales = new Sales;
    $all_sales = $sales->getAllProducts();

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <nav class="navbar navbar-expand" style="margin-bottom: 80px;">
            <div class="container">
                <a href="" class="navbar-brand">
                    <i class="fa-solid fa-house"></i>
                </a>
                
                <div class="navbar-nav justify-content-center">
                    <span class="navbar-text">Welcome, <?= $_SESSION['username'] ?></span>
                </div>

                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                        <button type="submit" class="text-danger bg-transparent border-0"></button>
                        <a href="" class="navbar-brand text-danger">
                            <i class="fa-solid fa-user-xmark"></i>
                        </a>
                </form>
                
            </div>
        </nav>

        <main>
            <div class="container w-75">
                <h1 class="fw-bold">
                    <div class="row">
                        <div class="col-11">Product List</div>
                        
                        <div class="col-1">
                            <!-- <a href="../actions/add-product.php" type="button" class="btn btn-info text-end" data-bs-toggle="modal" data-bs-target="#AddProduct">
                                <i class="fa-solid fa-plus"></i>
                            </a> -->
                            
                            <button type="button" href="../actions/add-product.php" class="btn btn-info text-end" data-bs-toggle="modal" data-bs-target="#AddProduct">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        
                            <div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="AddProductLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">
                                            <h1 class="modal-title text-info text-center fw-bold" id="RegistrationLabel">
                                                <i class="fa-solid fa-box"></i>
                                                Add Product
                                            </h1>
                                            
                                            <div class="modal-body mx-auto my-auto">
                                                <form action="../actions/add-product.php" method="post">
                                                    <label for="">Product Name</label>
                                                    <input type="text" name="product_name" id="" class="form-control">

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">Price</label>
                                                            <input type="number" name="price" id="" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Quantity</label>
                                                            <input type="number" name="quantity" id="" class="form-control">
                                                        </div>
                                                    </div>

                                                    <input type="submit" value="Add" name="register" class="btn btn-info text-black text-center w-100">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </h1>

                <table class="table table-striped mt-4">
                    <thead>
                        <tr class="">
                            <th class="bg-dark text-white">ID</th>
                            <th class="bg-dark text-white">Product Name</th>
                            <th class="bg-dark text-white">Price</th>
                            <th class="bg-dark text-white">Quantity</th>
                            <th class="bg-dark"><!--edit, delete action buttons--></th>
                            <th class="bg-dark"><!--register action button--></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            while($sales = $all_sales->fetch_assoc()){
                        ?>

                        <tr>
                            <td><?= $sales['id']; ?></td>
                            <td><?= $sales['product_name']; ?></td>
                            <td><?= $sales['price']; ?></td>
                            <td><?= $sales['quantity']; ?></td>
                            <td>
                                <a href="../actions/edit-product.php" class="btn btn-warning">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                
                                <a href="../actions/delete-product.php" class="btn btn-danger text-white">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success text-white">
                                    <i class="fa-solid fa-cash-register"></i>
                                </button>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </main>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
