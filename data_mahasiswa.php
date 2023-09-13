<div class="content-header1">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0">Mahasiswa</h2>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Datanya
                        </button>
                        <br></br>
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++
                    ?>
                                <tr>
                                    <td width='2%'><?php echo $no;?></td>
                                    <td><?php echo $mhs['nama'];?></td>
                                    <td><?php echo $mhs['nim'];?></td>
                                    <td><?php echo $mhs['semester'];?></td>
                                    <td>
                                        <a onclick="hapus_data(<?php echo $mhs['id'];?>)"
                                            class="btn btn-sm btn-danger">Hapus</a>
                                        <a href="index.php?page=edit-data&& id=<?php echo $mhs['id'];?>"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a class="view-data btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-view" data-nama="<?php echo $mhs['nama'];?>"
                                            data-nim="<?php echo $mhs['nim'];?>"
                                            data-semester="<?php echo $mhs['semester'];?>">View Data</a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NAMA" name="nama" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIM" name="nim" required>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="inputGroupSelect01" name="semester">
                                <option selected>Pilih Semester..</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- view data -->
<div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data.php">
                <div class="modal-body" id="hasil-view-data">


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
function hapus_data(data_id) {
    // alert('ok');
    // window.location=("delete/hapus_data.php?id="+data_id);
    Swal.fire({
        title: 'Apakah Datanya Mau Dihapus?',
        // showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Delete Data',
        confirmButtonColor: 'green',
        cancelButtonText: 'Cancel',
        cancelButtonColor: 'red',
        // denyButtonText: `Don't save`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location = ("delete/hapus_data.php?id=" + data_id);
        }
    })
}
</script>
