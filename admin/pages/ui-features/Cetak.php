<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h2 style="text-align: center;">PT Happy Shop Jaya</h2>
<h3 style="text-align: center; margin-bottom: 45px;">DATA LAPORAN BARANG</h3>
	<?php 
		include 'koneksi.php'
	 ?>
					<table style="width:80%; border-collapse: collapse; border: 1px solid black; margin: auto;">
                      <thead>
                        <tr style="height: 40px;">
                          <th style="border-collapse: collapse; border: 1px solid black;">Kode Barang</th>
                          <th style="border-collapse: collapse; border: 1px solid black;">Nama Barang</th>
                          <th style="border-collapse: collapse; border: 1px solid black;">Tanggal Masuk Barang</th>
                          <th style="border-collapse: collapse; border: 1px solid black;">Jumlah Stok</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                           
                            $data = mysqli_query($koneksi, "SELECT * FROM penjualan");
                            while($d = mysqli_fetch_array($data)){
                          ?>
                        <tr>
                          <td style="border-collapse: collapse; border: 1px solid black; text-align: center;text-align: center;"><?php echo $d['No']; ?></td>
                          <td style="border-collapse: collapse; border: 1px solid black; padding-left: 10px;"><?php echo $d['Nama']; ?></td>
                          <td style="border-collapse: collapse; border: 1px solid black;text-align: center;"><?php echo $d['Tanggal']; ?></td>
                          <td style="border-collapse: collapse; border: 1px solid black;text-align: center;"><?php echo $d['Jumlah']; ?></td>
                          
                        </tr>
                         <?php 
                            }
                            ?>
                      </tbody>
                    </table>

        <script type="text/javascript">
          window.print();
        </script>

</body>
</html>