
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Admin</title>
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
  </div>
</nav>
<a href="create.php" class="btn btn-primary">Create</a>
<div class="container mt-3">
    <table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">name</th>
      <th scope="col">Size</th>
      <th scope="col">Prize</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include 'koneksi.php';
        $query = "SELECT * FROM daftarsepatu ";
        $tampil = mysqli_query($kon, $query);
        $urut = 1;
        while($result = mysqli_fetch_array($tampil)) {
          $nama = $result ['namaSepatu'];
          $size = $result ['ukuranSepatu'];
          $prize = $result ['hargaSepatu'];
          $stock = $result ['Stok'];

        ?>
        <tr>
            <td scope="row"><?php echo $urut++; ?></td>
            <td scope="row"><?php echo $nama; ?></td>
            <td scope="row"><?php echo $size; ?></td>
            <td scope="row"><?php echo $prize; ?></td>
            <td scope="row"><?php echo $stock; ?></td>
            <td scope="row">
            <a href="edit.php" class="link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z "/>
</svg></a>
<a href="hapus.php" class="link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a>
            </td>
        </tr>
        <?php
        }
        ?>
  </tbody>
</table>
    </div>
</body>
</html>