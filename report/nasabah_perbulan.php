<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Nasabah Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Pembukaan Rekening Baru Bank ABC </h2>   
                        
                        <hr>
                        <h3>DATA NASABAH BULAN   <?php echo "$bulanNama $ambilthn" ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
							                     <tr>
                                   <th>No.</th><th class="text-center">Nama</th><th class="text-center">Alamat</th><th class="text-center">Email</th><th class="text-center">NIK</th><th class="text-center">No KK</th><th class="text-center">Tanggal</th>
                                  </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php 
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM nasabah WHERE month(tgl)='$ambilbln' AND year(tgl)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
									                  <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['email'] ?></td>
									                  <td><?= $data['nik'] ?></td>
								                    <td><?= $data['no_kk'] ?></td>
                                     <td><?= $data['tgl'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                       Medan,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Dirut, S.Hum<strong></u><br>
                                        NIP.102871291416712
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
