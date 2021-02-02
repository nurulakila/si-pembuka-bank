<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Nasabah</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM nasabah WHERE id_nasabah='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pembukaan Rekening Baru Bank ABC </h2>
                       
                        <hr>
                        <h3>DATA NASABAH</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                            
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Email</td> <td><?= $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor KK</td> <td><?= $data['no_kk'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tgl'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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