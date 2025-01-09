<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">

    <title>Dashboard</title>
</head>

<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img" alt="">
                </span>
                <div class="text header-text">
                    <span class="shop">Shop</span>
                    <span class="name">Organicstation</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="search" placeholder="Search....">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="./Dashboard.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./Category.php">
                            <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./Product.php">
                            <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./Order.php">
                            <i class='bx bx-cart icon'></i>
                            <span class="text nav-text">Order</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Wallet</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notification</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Role</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Setting</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">User</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">Category</div>
        <div class="content mx-5">
            <div class="content-preview d-flex align-items-center py-2">
                <a href="../Admin/Category.php">Category</a>
                <i class='bx bx-chevrons-right'></i>
                <a href="../Admin/CreateCategory.php">Create Category</a>
            </div>
            <div class="content-form py-2">
                <form action="aksi_crud.php" method="post">
                    <div class="d-flex w-100">
                        <div class="mb-3 w-50">
                            <label for="name" class="form-label">Jenis Product</label>
                            <input type="text" class="form-control form-control-lg" id="name">
                        </div>
                    </div>
                    <label for="price" class="form-label">Image</label>
                    <input type="file" id="price" class="form-control form-control-lg">
                </form>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../js/costum.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>
</html>