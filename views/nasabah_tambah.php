<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Nasabah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="NIK" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_kk" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kk"class="form-control" id="inputEmail3" placeholder="No KK" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl"class="form-control" id="inputEmail3" placeholder="Tanggal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=nasabah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$nik=$_POST['nik'];
  $no_kk=$_POST['no_kk'];
  $tgl=$_POST['tgl'];
	
    //buat sql
    $sql="INSERT INTO nasabah VALUES ('','$nama','$alamat','$email','$nik','$no_kk','$tgl')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Nasabah Error");
    if ($query){
        echo "<script>window.location.assign('?page=nasabah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
