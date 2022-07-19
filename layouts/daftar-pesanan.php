<?php 
    $fp = fopen("list-pesanan.txt", "a+");
    while($isi = fgets($fp, 100)){
        $pisah = explode("|", $isi);
    }
?>

<html lang="en">
<head>
    <title>Form Orderlist</title>
    <!-- Link BS5 -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap-grid.min.css">
    <!-- Link Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Link FontAwesome - Icons -->
    <link rel="stylesheet" href="../assets/vendor/fontawesome-free-6.1.1/css/all.min.css">
    <!-- Customize CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<header>
    <div class="container">
        <div class="card banner bg-light mt-5">
            <div class="card-body">
                <h3>Table Form Daftar Pesanan</h3>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="absen_table">
                        <tr class="text-center">
                            <th width="20%">Nama</th>
                            <th width="15%">Tanggal</th>
                            <th width="25%">Material</th>
                            <th width="25%">Custom Order</th>
                            <th width="25%">Brand</th>
                            <th width="10%">Stock</th>
                            <th width="30%">Alamat</th>
                        </tr>  
                        <?php 
                            echo "<tr class=text-center>
                            <td>$pisah[0]</td>
                            <td>$pisah[1]</td>
                            <td>$pisah[2]</td>
                            <td>$pisah[3]</td>
                            <td>$pisah[4]</td>
                            <td>$pisah[5]</td>
                            <td>$pisah[6]</td>
                            </tr>";                        
                        ?>
                    </table>
                    <a href="./main-form.html" class="btn btn-success"  >
                        <i class="fa-solid fa-plus fa-lg"></i>
                    </a>
                    <a href="../index.html" class="btn btn-primary ms-auto fa-md">
                        <i class="fa-solid fa-house fa-lg"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<body class="">
  <!-- Bundle BS5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Bundle FontAwesome -->
  <script src="../assets/vendor/fontawesome-free-6.1.1/js/all.min.js"></script>
  <!-- Customize JS -->
  <script src="../assets/js/script.js"></script>
</body>
</html>