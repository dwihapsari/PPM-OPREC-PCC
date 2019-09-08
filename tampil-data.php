<?php 
if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = "";
}
?>

  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-user"></i> Data Anggota
          <br>
          
        </h4>
      </div>

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
  } elseif ($_GET['alert'] == 5) { ?>
      <script type="text/javascript">
           $(function() {
           $('#exampleModalLong1').modal('show');
        });
        </script>
  <?php } ?>
  
<div class="btn-tambah">
            <form class="form-inline" method="POST" action="index.php">
            <a class="btn btn-primary" href="?page=tambah">
                <i class="glyphicon glyphicon-plus"></i> Tambah
              </a>
              <div class="pull-right form-group">
                <div class="input-group">
                  
                  <input type="text" class="form-control" name="cari" placeholder="Cari ..." autocomplete="off" value="<?php echo $cari; ?>">
                  
                </div>
              </div>
            </form>
          </div>
          <br>
      <div class="panel panel-primary">
        
        <div class="panel-heading">
          <h3 class="panel-title">Data Anggota</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table id ="example" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Program Studi</th>
                  <th>No. Telepon</th>
                  <th>ID Line</th>
                  <th>Absen</th>
                  <th>Ubah</th>
                </tr>
              </thead>   

              <tbody>
              <?php
              /* Pagination */
              $batas = 10;

              // if (isset($cari)) {
              //   $jumlah_record = mysqli_query($db,"SELECT COUNT(*) FROM is_siswa WHERE nis LIKE '%$cari%' OR nama LIKE '%$cari%'");
              // } else {
                $jumlah_record = mysqli_query($db,"SELECT COUNT(*) FROM is_siswa");
              //}

              $jumlah  = mysqli_num_rows($jumlah_record);
              $halaman = ceil($jumlah / $batas);
              $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
              $mulai   = ($page - 1) * $batas;
              /*-------------------------------------------------------------------*/
              $no = 1;
              if (isset($cari)) {
                $sql = mysqli_query($db,"SELECT * FROM is_siswa 
                                    WHERE id LIKE '%$cari%' OR nama LIKE '%$cari%' 
                                    ORDER BY status ASC");
              } else {
                $sql = mysqli_query($db,"SELECT * FROM is_siswa ORDER BY status ASC");
                // $sql = mysqli_query($db,"SELECT * FROM is_siswa 
                //                     ORDER BY nis DESC LIMIT $mulai, $batas");
              }
              // $sql = mysqli_query($db,"SELECT * FROM is_siswa");
              
              while ($data = mysqli_fetch_assoc($sql)) {

                echo "
                
                <tr>
                      <td class='center'>$no</td>
                      <td>$data[id]</td>
                      <td>$data[nama]</td>
                      <td>$data[jurusan]</td>
                      <td>$data[prodi]</td>
                      <td>$data[no_telepon]</td>
                      <td>@$data[idline]</td>";
?>
                      <td>
                      <form action='proses_absen.php' method="post">
                        <input type="hidden" value="<?php echo $data['id']?>" name="id">
                        <?php
                        if($data['status']==1){
                          echo "<button class='btn btn-success glyphicon glyphicon-ok-circle' disabled></button>";
                        }else{
                          echo "<button type='submit' class='btn btn-secondary glyphicon glyphicon-ok'></button>";
                        }
                        echo "</td>";
                        ?>
                        </form>
                        <?php
                      
                      echo "
                      
                      <td>
                        <div class=''>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='?page=ubah&id=$data[id]'>
                            <i class='glyphicon glyphicon-edit'></i>
                          </a>";
              ?>
                         
              <?php
                echo "
                        </div>
                      </td>
                    </tr>";
                $no++;
              }
              ?>
              </tbody>           
            </table>
          </div>
        </div>
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->