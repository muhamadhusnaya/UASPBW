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
    <style>
    .main-container {
        display: flex;
        flex-direction: row;
        min-height: 100vh;
    }

    .sidebar.close {
        width: 70px;
    }

    .content {
        flex: 1;
        padding: 20px;
        margin-left: 250px;
        transition: margin-left 0.3s;
    }

    .sidebar.close + .content {
        margin-left: 70px;
    }
</style>

    
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
                        <a href="">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-food-menu icon'></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
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

    <div class="content p-4" style="width: 100psh;">
        <h1 class="mb-4">Product List</h1>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="input-group" style="width: 300px;">
                <input type="text" id="search-bar" class="form-control" placeholder="Search product...">
                <button class="btn btn-outline-secondary" onclick="searchProduct()">Search</button>
            </div>
            <button type="button" class="btn btn-danger" onclick="window.location.href='/admin/Create'">Cancel</button>
        </div>

        <div class="table-responsive">
            <table class="table table-borderless bg-white">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Image</th>  
                        <th>Nama Product</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle" id="product-table">
                    <tr>
                        <td><img src="https://raw.githubusercontent.com/muhamadhusnaya/Organicstation/refs/heads/main/images/produk1.png" alt="" style="width: 100px;"></td>
                        <td>Susu Kedelai Organik</td>
                        <td>Rp. 78,000</td>
                        <td>10</td>
                        <td>Minuman</td>
                        <td><button class="btn btn-success"><i class='bx bx-edit'></i></button></td>
                        <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
                    </tr>
                    <tr>
                        <td><img src="https://raw.githubusercontent.com/muhamadhusnaya/Organicstation/refs/heads/main/images/produk1.png" alt="" style="width: 100px;"></td>
                        <td>Susu Kedelai Organik</td>
                        <td>Rp. 78,000</td>
                        <td>10</td>
                        <td>Minuman</td>
                        <td><button class="btn btn-success"><i class='bx bx-edit'></i></button></td>
                        <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
                    </tr>
                    <!-- Modal Edit -->
                    <div class="modal fade" id="modal-edit<?= $data['id_mhs'] ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Data Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="aksi_crud.php" method="POST">
                                    <div class="modal-body">
                                        <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
                                        <div class="mb-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3" required><?= $data['alamat'] ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Prodi</label>
                                            <select name="prodi" class="form-select" required>
                                                <option value="<?= $data['prodi'] ?>"><?= $data['prodi'] ?></option>
                                                <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                                                <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                                <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                                <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
                                                <option value="S1 - Desain Komunikasi Visual">S1 - Desain Komunikasi Visual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
    </div>

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