<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h3 style="text-align: center;">DATA LAPORAN BARANG</h3>
	<?php 
		include 'koneksi.php'
	 ?>
					<table style="width: 100%; border-collapse: collapse;">
                      <thead>
                        <tr>
                          <th>Kode Barang</th>
                          <th>Nama Barang</th>
                          <th>Tanggal Masuk Barang</th>
                          <th>Jumlah Stok</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                           
                            $data = mysqli_query($koneksi, "SELECT * FROM penjualan");
                            while($d = mysqli_fetch_array($data)){
                          ?>
                        <tr>
                          <td><?php echo $d['No']; ?></td>
                          <td><?php echo $d['Nama']; ?></td>
                          <td><?php echo $d['Tanggal']; ?></td>
                          <td><?php echo $d['Jumlah']; ?></td>
                          
                        </tr>
                         <?php 
                            }
                            ?>
                      </tbody>
                    </table>

</body>
</html>