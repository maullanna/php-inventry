<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h2>Data</h2>

    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>ID Barang</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Model</th>
            <th>Bulan Pembelian</th>
            <th>Tahun Pembelian</th>
            <th>User</th>
            <th>Level</th>
            <th>Bagian</th>
            <th>Status</th>
            <th>Data Transfer</th>
            <th>Remark</th>
            <th>Condition</th>
            <th>Name Category</th>
            <th class="opsi">Opsi</th>
        </tr>

        <?php 
        include 'function.php';

        $no=1;

        $ambildata = mysqli_query($koneksi, "SELECT * FROM barang, category WHERE barang.name_category = category.name_category") or die (mysqli_error($koneksi));

        while($tampil = mysqli_fetch_array($ambildata)){
            echo "<tr>";
            echo "<td align='center'>$no</td>";
            echo "<td align='center'>$tampil[brand]</td>";
            echo "<td align='center'>$tampil[type]</td>";
            echo "<td align='center'>$tampil[model]</td>";
            echo "<td align='center'>$tampil[bulan_pembelian]</td>";
            echo "<td align='center'>$tampil[tahun_pembelian]</td>";
            echo "<td align='center'>$tampil[user]</td>";
            echo "<td align='center'>$tampil[level]</td>";
            echo "<td align='center'>$tampil[bagian]</td>";
            echo "<td align='center'>$tampil[status]</td>";
            echo "<td align='center'>$tampil[data_transfer]</td>";
            echo "<td align='center'>$tampil[remark]</td>";
            echo "<td align='center'>$tampil[barang_condition]</td>";
            echo "<td align='center'>$tampil[name_category]</td>";
            echo "<td align='center'>$tampil[opsi]</td>";
            echo "</tr>";
            $no++;
        }
        ?> 
    </table>
</body>
</html>
