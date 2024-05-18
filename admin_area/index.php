<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .admin_image {
                width: 100px;
                object-fit: contain;
            }
            .footer {
                position: absolute;
                bottom: 0;
        }</style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../immage/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Добро пожаловать пользовотель</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="bg-light">
            <h3 class="text-center p-2">Настройка</h3>
        </div>
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex aligin-items-center">
                <div class="px-5">
                    <a href="#"><img src="../immage/mous1.webp" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Ник админа</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Ввести продукты</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Просмотреть продукты</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Ввести категорию</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Просмотреть категории</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Ввести бренды</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Просмотреть бренды</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Заказы</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Платежы</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Список пользовотелей</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Разлогиниться</a></button>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
        </div>
        <div class="bg-info p-3 text-center footer">
            <p></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>