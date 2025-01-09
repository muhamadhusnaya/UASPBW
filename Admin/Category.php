<?php
    include "../koneksi.php";

    $query = "SELECT * FROM categories";
    $categories = $conn->query($query);
?>

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
                    <img src="{{ asset('img/Group 559.png') }}" alt="">
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
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Category</button>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = $categories->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td>
                            <?php if (!empty($row['image'])) : ?>
                                <img width="60px" src="../img/<?= $row['image'] ?>">
                            <?php else : ?>
                                No Image
                            <?php endif; ?>
                        </td>
                        <td><?= $row['jenis_product'] ?></td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Edit</button>
                            <a href="aksi.php?category_action=delete&id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="./aksi_crud.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden" name="category_action" value="update">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <div class="mb-3">
                                            <label class="form-label">Category Produk</label>
                                            <input type="text" name="jenis_product" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image URL</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="./aksi_crud.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="category_action" value="create">
                            <div class="mb-3">
                                <label class="form-label">Category Produk</label>
                                <input type="text" name="jenis_product" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image URL</label>
                                <input type="file
                                " name="image" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../js/costum.js"></script>
</body>
</html>