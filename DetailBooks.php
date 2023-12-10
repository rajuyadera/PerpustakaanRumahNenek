<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
        require_once __DIR__ . '/getConnection.php';

        session_start();
        if ( !isset($_SESSION['username']) ) {
            header("location:login.php");
        }
    ?>
</head>
<body>
    <div class="container-fluid m-0 p-0">
    <?php require_once 'components/Navbar.php' ?>

        <!-- Book Detail Placeholder -->
       
        <div class="d-flex justify-content-center">
            <?php
                $connection = getConnection();
                if(isset($_GET['Id'])){
                    $id = $_GET['Id'];

                    $sql = "SELECT gambar, judul, penulis, sinopsis, kategori FROM buku WHERE id_buku='$id'";
                    $result = $connection->query($sql);

                    foreach ($result as $row) {
                        $gambar = $row['gambar'];
                        $judul = $row['judul'];
                        $penulis = $row['penulis'];
                        $sinopsis = $row['sinopsis'];
                        $kategori = $row['kategori'];

                        ?>
                        
                        <title>Buku <?php echo $judul?></title>

                        <div class="d-flex flex-row m-5 w-50">

                            <!-- Gambar -->
                            <div class="image-buku me-5">
                                <img style="width: 300px" src="img/<?php echo $gambar?>" alt="">
                            </div>

                            <!-- Info Buku -->
                            <div class="detail-buku">
                                <h1 class="mb-5"><?php echo $judul?></h1>
                                <p><?php echo $sinopsis?></p>
                                <p class="mb-0"> <b>Kategori :</b>
                                <?php echo $kategori?></p>
                                <p> <b>Penulis :</b>
                                <?php echo $penulis?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "Data buku tidak ditemukan";
                }
            ?>
        </div>
        <div class="d-flex flex-row justify-content-around mt-5 ">
            <a href="ShowBooks.php" class="btn btn-primary">Cari Buku Lain</a>
        </div>
        <!-- End of Book Detail Placeholder -->
        
    </div>
</body>
</html>