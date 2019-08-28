
<script>
  function jrsProdi(){
      var nama_jurusan=document.getElementById("form_tambah").jurusan.value;
      
      if (nama_jurusan=="") { 
          document.getElementById("prodi").innerHTML="<option value='' selected disabled>--Pilih Prodi--</option>";
      } else if (nama_jurusan=="Teknik Elektro") {
          document.getElementById("prodi").innerHTML="<option value='Teknik Telekomunikasi (S.Tr)'>Teknik Telekomunikasi (S.Tr)</option><option value='Teknik Listrik (D3)'>Teknik Listrik (D3)</option><option value='Teknik Elektronika (D3)'>Teknik Elektronika (D3)</option><option value='Teknik Telekomunikasi (D3)'>Teknik Telekomunikasi (D3)</option><option value='Teknik Informatika (D3)'>Teknik Informatika (D3)</option>";
      } else if (nama_jurusan=="Teknik Sipil") {
          document.getElementById("prodi").innerHTML="<option value='Teknik Perawatan dan Perbaikan Gedung (S.Tr)'>Teknik Perawatan dan Perbaikan Gedung (S.Tr)</option><option value='Perancangan Jalan dan Jembatan (S.Tr)'>Perancangan Jalan dan Jembatan (S.Tr)</option><option value='Konstruksi Gedung (D3)'>Konstruksi Gedung (D3)</option><option value='Konstruksi Sipil (D3)'>Konstruksi Sipil (D3)</option>";
      } else if (nama_jurusan=="Teknik Mesin") {
          document.getElementById("prodi").innerHTML="<option value='Teknik Mesin Produksi dan Perawatan (S.Tr)'>Teknik Mesin Produksi dan Perawatan (S.Tr)</option><option value='Teknologi Rekayasa Pembangkit Energi (S.Tr)'>Teknologi Rekayasa Pembangkit Energi (S.Tr)</option><option value='Teknik Mesin (D3)'>Teknik Mesin (D3)</option><option value='Teknik Konversi Energi (D3)'>Teknik Konversi Energi (D3)</option>"
      } else if (nama_jurusan=="Akuntansi") {
          document.getElementById("prodi").innerHTML="<option value='Komputerisasi Akuntansi (S.Tr)'>Komputerisasi Akuntansi (S.Tr)</option><option value='Perbankan Syariah (S.Tr)'>Perbankan Syariah (S.Tr)</option><option value='Analis Keuangan (S.Tr)'>Analis Keuangan (S.Tr)</option><option value='Akuntansi Manajerial (S.Tr)'>Akuntansi Manajerial (S.Tr)</option><option value='Akuntansi (D3)'>Akuntansi (D3)</option><option value='Keuangan dan Perbankan (D3)'>Keuangan dan Perbankan (D3)</option>"
      } else if (nama_jurusan=="Administrasi Bisnis") {
          document.getElementById("prodi").innerHTML="<option value='Manajemen Bisnis Internasional (S.Tr)'>Manajemen Bisnis Internasional (S.Tr)</option><option value='Administrasi Bisnis Terapan (S.Tr)'>Administrasi Bisnis Terapan (S.Tr)</option><option value='Administrasi Bisnis (D3)'>Administrasi Bisnis (D3)</option><option value='Manajemen Pemasaran (D3)'>Manajemen Pemasaran (D3)</option>"
      }
  }
</script>

<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
        <i class="glyphicon glyphicon-check"></i>
        Input Data
        </h4>
      </div> <!-- /.page-header -->
      
      
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php" id="form_tambah">
            

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jurusan</label>
              <div class="col-sm-3">
                <select class="form-control" name="jurusan" id="jurusan" onchange="jrsProdi()" placeholder="Pilih Jurusan" required>
                  <option value="" selected disabled>--Pilih Jurusan--</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                  <option value="Teknik Sipil">Teknik Sipil</option>
                  <option value="Akuntansi">Akuntansi</option>
                  <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Program Studi</label>
              <div class="col-sm-3">
                <select class="form-control" name="prodi" id="prodi" placeholder="Pilih Program Studi" required>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="tel" class="form-control" name="no_telepon" autocomplete="off" maxlength="15" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">ID Line</label>
              <div class="col-sm-3">
                <input type="text" placeholder = "Tanpa @" class="form-control" name="idline" autocomplete="off" required>
              </div>
            </div>

            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" onclick="window.location.href='http://localhost/ppm/index.php?alert=2'"name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->