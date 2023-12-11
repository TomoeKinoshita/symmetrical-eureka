<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
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
                    <form action="../actions/login.php" method="post">
                        <h1 class="text-primary text-center fw-bold my-3">
                            LOGIN
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </h1>

                        <div class="row my-3">
                            <label for="" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row my-3">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <input type="submit" value="Login" name="btn_login" class="btn btn-primary text-white text-center w-100">
                            </div>
                        </div>
                    
                        <div class="row my-3">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <div class="text-center">
                                    <button type="button" class="btn btn-danger text-white justify-content-center" data-bs-toggle="modal" data-bs-target="#Registration">Create an Account</button>
                                
                                    <div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="RegistrationLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <h1 class="modal-title text-danger text-center fw-bold" id="RegistrationLabel">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        Registration
                                                    </h1>
                                                    <br>
                                                    
                                                    <div class="modal-body mx-auto my-auto">
                                                        <form action="../actions/register.php" method="post">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="" class="mb-2">First Name</label>
                                                                    <input type="text" name="first_name" id="" class="form-control mb-2">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="" class="mb-2">Last Name</label>
                                                                    <input type="text" name="last_name" id="" class="form-control mb-2">
                                                                </div>
                                                            </div>
                                                            <label for="" class="mb-2">Username</label>
                                                            <input type="text" name="username" id="" class="form-control mb-2">
                                                            <label for="password" class="mb-2">Password</label>
                                                            <input type="password" name="password" id="" class="form-control mb-2">

                                                            <input type="submit" value="Register" name="btn_register" class="btn btn-danger text-white text-center w-100 mb-2">
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
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
