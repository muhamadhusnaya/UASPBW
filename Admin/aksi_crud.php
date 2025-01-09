<?php
include "../koneksi.php";
session_start();

// ===== CRUD CATEGORY =====
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category_action'])) {
    $action = $_POST['category_action'];

    if ($action === 'create') {
        $name = $_POST['jenis_product'];
        $image = $_FILES['image']['name'];

        $path = "img";
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image;

        $sql = "INSERT INTO categories (jenis_product, image) VALUES ('$name', '$image')";

        if ($conn->query($sql) === TRUE) {
            header("Location: Category.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }

    if ($action === 'update') {
        $id = $_POST['id'];
        $name = $_POST['jenis_product'];
        $image = $_POST['image'];

        $sql = "UPDATE categories SET jenis_product = '$name', image = '$image' WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: categories.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['category_action']) && $_GET['category_action'] === 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: categories.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

// ===== CRUD PRODUCT =====
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_action'])) {
//     $action = $_POST['product_action'];

//     if ($action === 'create') {
//         $productName = $_POST['productName'];
//         $price = $_POST['price'];
//         $stock = $_POST['stock'];
//         $category = $_POST['category'];

//         // Handle file upload
//         $image = $_FILES['image']['name'];
//         $target_dir = "uploads/";
//         $target_file = $target_dir . basename($image);
//         move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

//         $sql = "INSERT INTO products (image, product_name, price, stock, category) VALUES ('$image', '$productName', $price, $stock, '$category')";

//         if ($conn->query($sql) === TRUE) {
//             header("Location: index.php");
//             exit;
//         } else {
//             echo "Error: " . $conn->error;
//         }
//     }

//     if ($action === 'update') {
//         $id = $_POST['id'];
//         $productName = $_POST['productName'];
//         $price = $_POST['price'];
//         $stock = $_POST['stock'];
//         $category = $_POST['category'];

//         // Handle file upload
//         if (!empty($_FILES['image']['name'])) {
//             $image = $_FILES['image']['name'];
//             $target_dir = "uploads/";
//             $target_file = $target_dir . basename($image);
//             move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
//             $imageSQL = ", image = '$image'";
//         } else {
//             $imageSQL = "";
//         }

//         $sql = "UPDATE products SET product_name = '$productName', price = $price, stock = $stock, category = '$category' $imageSQL WHERE id = $id";

//         if ($conn->query($sql) === TRUE) {
//             header("Location: index.php");
//             exit;
//         } else {
//             echo "Error: " . $conn->error;
//         }
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['product_action']) && $_GET['product_action'] === 'delete') {
//     $id = $_GET['id'];
//     $sql = "DELETE FROM products WHERE id = $id";
//     if ($conn->query($sql) === TRUE) {
//         header("Location: index.php");
//         exit;
//     } else {
//         echo "Error: " . $conn->error;
//     }
// }
    




//tambahData
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mhs (nim, nama, alamat, prodi) VALUES ('$nim', '$nama', '$alamat', '$prodi')";
    mysqli_query($koneksi, $query);

    echo "<script>window.location='index.php';</script>";
}

//editData
if (isset($_POST['update'])) {
    $id = $_POST['id_mhs'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat', prodi='$prodi' WHERE id_mhs='$id'";
    mysqli_query($koneksi, $query);

    echo "<script>window.location='index.php';</script>";
}

//hapusData
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($koneksi, "DELETE FROM mhs WHERE id_mhs='$id'");
    echo "<script>window.location='index.php';</script>";
}
?>
