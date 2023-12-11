<!doctype html>
<html lang="en">
    <head>
        <title>Add Product</title>
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

    <body class="bg-light">
        <div style="height: 100vh;">
            <div class="row h-100">
                <div class="w-25 mx-auto my-auto">
                    <form action="../actions/add-product.php" method="post">
                        <h1 class="text-info text-center fw-bold">
                            <i class="fa-solid fa-box"></i>
                            Add Product
                        </h1>

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
