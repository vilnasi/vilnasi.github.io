<?php
include('includes/connect.php');
include('functions/common_function.php')
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Ecommerce Website using PHP and MySQL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-info"><!--bg-body-tertiary-->
                <div class="container-fluid">
                    <img src="./immage/logo.png" alt="" class="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Products</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>-->
                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!--<button class="btn btn-outline-success" type="submit">Search</button>-->
                        <input type="submit" value="Поиск" class="btn btn-outline-light" name="search_data_product">
                    </form>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Добро пожаловать, пользовотель</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Логин</a>
                    </li>
                </ul>
            </nav>
            <div class="bg-light">
                <h3 class="text-center">Товары</h3>
                <p class="text-center"></p>
            </div>
            <div class="row px-1">
                <div class="col-md-10">
                    <!--products-->
                    <div class="row">
                        <?php
                            getproducts();
                            get_uniquecate();
                            get_unique_brands();
                            //$ip = getIPAddress();  
                            //echo 'User Real IP Address - '.$ip;
                        ?>
                    </div>
                </div>
                <div class="col-md-2 bg-secondary p-0">
                    <!--sidenav-->
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-ligth"><h4>бренд</h4></a>
                        </li>
                        <?php
                            getbrands()
                        ?>
                    </ul>
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-ligth"><h4>Категория</h4></a>
                        </li>
                        <?php
                            getcategories()
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                include("./includes/footer.php")
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </body>
</html>