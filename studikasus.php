<?php
// Mulai sesi untuk menyimpan data penjualan
session_start();

// Inisialisasi array sales jika belum ada
if (!isset($_SESSION['sales'])) {
    $_SESSION['sales'] = array();
}

// Jika form disubmit, proses input data penjualan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $price_per_product = $_POST['price_per_product'];
    $quantity_sold = $_POST['quantity_sold'];

    // Hitung total untuk produk tersebut
    $total = $price_per_product * $quantity_sold;

    // Buat array asosiatif untuk menyimpan data transaksi
    $transaction = array(
        "name" => $product_name,
        "price" => $price_per_product,
        "quantity" => $quantity_sold,
        "total" => $total
    );

    // Tambahkan transaksi ke dalam session sales
    array_push($_SESSION['sales'], $transaction);
}

// Hapus semua data jika di-reset
if (isset($_POST['reset'])) {
    $_SESSION['sales'] = array();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Penjualan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Sistem Pencatatan Data Penjualan</h1>
    <!-- Form untuk input data penjualan -->
    <form method="POST" action="">
        <label>Nama Produk: </label>
        <input type="text" name="product_name" required><br><br>

        <label>Harga per Produk: </label>
        <input type="number" name="price_per_product" required><br><br>

        <label>Jumlah Terjual: </label>
        <input type="number" name="quantity_sold" required><br><br>

        <button type="submit">Tambahkan Penjualan</button>
        <button type="submit" name="reset">Reset Data</button>
    </form>

    <h2>Laporan Penjualan</h2>
    <!-- Tabel untuk menampilkan laporan penjualan -->
    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php
        $total_sales = 0;
        $total_quantity_sold = 0; // Menyimpan total jumlah terjual
        // Tampilkan setiap transaksi dalam tabel
        foreach ($_SESSION['sales'] as $sale) {
            echo "<tr>";
            echo "<td>{$sale['name']}</td>";
            echo "<td>{$sale['price']}</td>";
            echo "<td>{$sale['quantity']}</td>";
            echo "<td>{$sale['total']}</td>";
            echo "</tr>";
            $total_sales += $sale['total']; // Tambahkan total penjualan
            $total_quantity_sold += $sale['quantity']; // Tambahkan jumlah terjual
        }
        ?>
        <tr>
            <td colspan="2"><strong>Total Penjualan</strong></td>
            <td><strong><?php echo $total_quantity_sold; ?></strong></td> <!-- Menampilkan total jumlah terjual -->
            <td><strong><?php echo $total_sales; ?></strong></td> <!-- Menampilkan total penjualan -->
        </tr>
    </table>
</body>
</html>