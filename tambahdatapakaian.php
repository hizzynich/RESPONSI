<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>


  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Form Tambah Data Pakaian</h3>
  <hr>
  <br>
        <form action="proses-tambah-pakaian.php" method="POST" >

                <div class="form-group">
                  <label>Kode Pakaian</label>
                  <input type="text" class="form-control" name="Id_Pakaian" placeholder="Kode Pakaian" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Jenis Pakaian</label>
                  <input type="text" class="form-control" name="Jenis_Pakaian" placeholder="Jenis Pakaian" style="width: 250px" >
                </div>
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
              <a href="pakaian.php"><input type="button" class="btn btn-default" value="Batal" ></a>
              </form>
</div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
