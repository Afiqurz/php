<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='post' action='update/update_data_siswa.php' enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" placeholder="Nama" name='nama_siswa'
                                    value="<?php echo $view['nama_siswa'];?>">
                                <input type="text" class="form-control" placeholder="Nama" name='id'
                                    value="<?php echo $view['id'];?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" placeholder="NIS" name='nis'
                                    value="<?php echo $view['nis'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="custom-select" id="inputGroupSelect01" name="jenis_kelamin">
                                    <option value="<?php echo $view['jenis_kelamin'];?>" selected>
                                        <?php echo $view['jenis_kelamin'];?></option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID KELAS</label>
                                <input type="text" class="form-control" placeholder="Id_kelas" name='id_kelas'
                                    value="<?php echo $view['id_kelas'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Alamat Siswa</label>
                                <input type="text" class="form-control" placeholder="Alamat_Siswa" name='alamat_siswa'
                                    value="<?php echo $view['alamat_siswa'];?>">
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                        </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
