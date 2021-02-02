
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control"  placeholder="Nama" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Pilih">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
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
                    <a href="?page=karyawan&actions=tampil" class="btn btn-danger btn-sm">
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
	$jenis_kelamin=$_POST['jenis_kelamin'];
    $jabatan=$_POST['jabatan'];
    $lahir=$_POST['tgl_lahir'];
    
   //buat sql
   $sql="INSERT INTO karyawan VALUES ('','$nama','$alamat','$jenis_kelamin','$jabatan','$lahir')";
   $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Karyawan Error");
   if ($query){
       echo "<script>window.location.assign('?page=karyawan&actions=tampil');</script>";
   }else{
       echo "<script>alert('Simpan Data Gagal');<script>";
   }
   }

?>
