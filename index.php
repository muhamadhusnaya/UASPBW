<?php
    include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Fundamentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Ngoding bersama IPTEK</h1>
        <h1 class="text-center">CRUD - PHP & MySQL</h1>

        <div class="card mt-5">
            <div class="card-header bg-primary text-white">Data Mahasiswa</div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah</button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY id_mhs DESC");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                        <td>
                            <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit<?= $data['id_mhs'] ?>">Ubah</a>
                            <a href="aksi_crud.php?delete=<?= $data['id_mhs'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                        </td>
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

                    <?php endwhile; ?>
                </table>

                <!-- Modal Tambah -->
                <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Mahasiswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="aksi_crud.php" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">NIM</label>
                                        <input type="text" class="form-control" name="nim" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Prodi</label>
                                        <select name="prodi" class="form-select" required>
                                            <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                                            <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                            <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
                                            <option value="S1 - Desain Komunikasi Visual">S1 - Desain Komunikasi Visual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                     
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
