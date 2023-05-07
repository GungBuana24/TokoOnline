<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
  $id = $_POST ['idSepatu'];
  $nama = $_POST ['namaSepatu'];
  $size = $_POST ['ukuranSepatu'];
  $prize = $_POST ['hargaSepatu'];
  $stock = $_POST ['Stok'];

  $query="UPDATE daftarsepatu SET namaSepatu='$nama',ukuranSepatu='$size', hargaSepatu='$prize', Stok='$stock' WHERE idSepatu = $id";
  mysqli_query($kon, $query);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand"><img class="image" border="0" src="foto/crown.png"  width="45px" style="margin: 2px;padding: 0px">Shoes King</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
</nav>

    <div class="container">
<div class="container d-flex justify-content-center">
 <form action="" method="POST" style="width: 50vw; min-width:300px;">
<div class="row">
  <div class="col">
    <label class="form-label">Id</label>
    <input type="text" class="form-control" name="idSepatu" value="<?php echo $id ['idSepatu'];?>">
  </div>
</div>
<div>
<label class="form-label">Shoes Name</label>
    <input type="text" class="form-control" name="namaSepatu">
</div>
<div>
<label class="form-label">Size</label>
    <input type="number" class="form-control" name="ukuranSepatu">
</div>
<div>
<label class="form-label">Prize</label>
    <input type="text" class="form-control" name="hargaSepatu">
</div>
<div>
<label class="form-label">Stock</label>
    <input type="number" class="form-control" name="Stok">
</div>
<div class="btn mt-3"><button type="submit" class="btn btn-success" name="submit">Save</button>
<a href="admin.php" class="btn btn-danger">back</a>
</div>
</form>
</div>
</body>
</html>