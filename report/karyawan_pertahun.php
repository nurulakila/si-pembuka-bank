<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Karyawan Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Pembukaan Rekening Baru Bank ABC </h2>
                        <hr>
                        <h3>DATA PEMINJAMAN KARYAWAN TAHUN  <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                <tr>
                                <th>No.</th><th class="text-center">Nama</th><th class="text-center">Alamat</th><th class="text-center">Jenis Kelamin</th><th class="text-center">Jabatan</th><th class="text-center">Tanggal Lahir</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM karyawan WHERE year(tgl_lahir)='$ambilthn'";
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
                                    <td><?= $data['jenis_kelamin'] ?></td>
									<td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                              <td colspan="8" class="text-right">
                                        Medan  <?= date("d-m-Y") ?>
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