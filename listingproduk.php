<?php
include "dataproduk.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>

    <link rel="stylesheet" href="css/listingproduk.css">
</head>
<body>
    <div class="container">
        <div class="konten">
            <h1> Listing Produk </h1>

            <div class="btn">
                <button onclick="show_tabel()"> Tabel </button>
                <button onclick="show_card()"> Card </button>
            </div>

            <div id="produk-tabel">
                <table>
                    <thead>
                        <tr>
                            <td> Produk </td>
                            <td> Tebal Buku </td>
                            <td> Ready Stok </td>
                            <td> Harga </td>
                            <td> Tahun Terbit </td>
                            <td> Deskripsi </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($produk as $item) { ?>
                        <tr>
                            <td> <?php echo $item["nama_produk"]; ?> </td>
                            <td> <?php echo $item["tebal_buku"]; ?>  </td>
                            <td> <?php echo $item["ready_stok"]; ?> </td>
                            <td> Rp <?php echo $item["harga"]; ?> </td>
                            <td> <?php echo $item["tahun_terbit"]; ?> </td>
                            <td> <?php echo $item["deskripsi"]; ?> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div id="produk-card">
                <div class="row">

                    <?php foreach($produk as $item) { ?>
                        <div class="card">
                            <h2> <?php echo $item["nama_produk"]; ?> </h2>
                            <h3> <?php echo $item["tebal_buku"]; ?> </h3>
                            <p> Rp. <?php echo $item["harga"]; ?> </p>
                            <p> <?php echo $item["ready_stok"]; ?> </p>
                            <p> <?php echo $item["tahun_terbit"]; ?> </p>
                            <h5> <?php echo $item["deskripsi"]; ?> </h5>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="js/listproduk.js"></script>
</body>
</html>