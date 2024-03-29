<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Aplikasi OpRec PCC</title>


  <!-- favicon -->
  <link rel="icon" href="assets/img/logo_pcc.png">

  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="DataTables/datatables.min.css"> -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/datepicker.min.css" rel="stylesheet">

  <!-- styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fungsi untuk membatasi karakter yang diinputkan -->
  <script type="text/javascrit" src="js/main.js" language="javascript">

    function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
    
    </script>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand -->
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
          <i class="glyphicon glyphicon-check"></i>
          OPREC PCC 2019
        </a>
      </div>
    </div> <!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">
    <?php
    if (empty($_GET["page"])) {
      include "tampil-data.php";
    } elseif ($_GET['page'] == 'tambah') {
      include "form-tambah.php";
    } elseif ($_GET['page'] == 'ubah') {
      include "form-ubah.php";
    }
    ?>
  </div> <!-- /.container-fluid -->
  <footer class="footer">
    <div class="container-fluid">
      <p class="text-muted pull-left">&copy; 2019 Department Software</p>
      <p class="text-muted pull-right hidden">Theme by <a href="http://www.getbootstrap.com" target="_blank">Bootstrap</a></p>
    </div>
  </footer>
  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLongTitle">Berhasil</h5>
        </div>
        <div class="modal-body">
          Absen Berhasil Dilakukan
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success close" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="DataTables/DataTables-1/js/jquery.dataTables.min.js"></script>
  <script src="DataTables/DataTables-1/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $(function() {

      //datepicker plugin
      $('.date-picker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      // toolip
      $('[data-toggle="tooltip"]').tooltip();
    })
  </script>
  <script>
    $(function() {
      $('#example').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
  <?php
  if (isset($_GET['alert']) == 5) { ?>
  <script type="text/javascript">
       $(function() {
       $('#exampleModalLong1').modal('show');
    });
    </script>
  <?php } ?>
</body>

</html>