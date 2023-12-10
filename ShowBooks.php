<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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

        <!-- Daftar Buku Placeholder -->

        <h1 class="text-center mt-4">Daftar Buku</h1>
        <hr>

        <!-- Button Kategori -->
        <div class="d-flex flex-row justify-content-center">
            <a href="ShowBooks.php?kategori=Novel" class="btn btn-primary me-3">Novel</a>
            <a href="ShowBooks.php?kategori=Programming" class="btn btn-primary me-3">Programming</a>
            <a href="ShowBooks.php?kategori=Politik" class="btn btn-primary me-3">Politik</a>
            <a href="ShowBooks.php" class="btn btn-primary">Semua</a>
        </div>

        <div class="container d-flex mt-2">
            <div class="d-flex flex-row align-content-start row ps-5">   
                <?php
                    $connection = getConnection();

                    if (isset($_GET['kategori'])){
                        $kategori = $_GET['kategori'];

                        $sql = "SELECT id_buku, gambar, judul, penulis FROM buku WHERE kategori='$kategori'";
                        $result = $connection->query($sql);
        
                        foreach ($result as $row) {
                            $id = $row["id_buku"];
                            $gambar = $row["gambar"];
                            $judul = $row["judul"];
                            $penulis = $row["penulis"];
        
                            ?>
                                <div class="card col-4 m-2" style="width: 18rem;">
                                    <img src="img/<?php echo $gambar ?>" class="card-img-top" alt="..." style="height: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $judul ?></h5>
                                        <p class="card-text"><?php echo $penulis; ?></p>
                                        <a href="DetailBooks.php?Id=<?php echo $id; $id = $id?>" class="btn btn-primary">Detail Buku</a>
                                    </div>
                                </div>
                            <?php
                        }  
                    } else {

                        $sql = "SELECT id_buku, gambar, judul, penulis FROM buku";
                        $result = $connection->query($sql);
        
                        foreach ($result as $row) {
                            $id = $row["id_buku"];
                            $gambar = $row["gambar"];
                            $judul = $row["judul"];
                            $penulis = $row["penulis"];
        
                            ?>
                                <div class="card col-4 m-2" style="width: 18rem;">
                                    <img src="img/<?php echo $gambar ?>" class="card-img-top" alt="..." style="height: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $judul ?></h5>
                                        <p class="card-text"><?php echo $penulis; ?></p>
                                        <a href="DetailBooks.php?Id=<?php echo $id; $id = $id?>" class="btn btn-primary">Detail Buku</a>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>

        </div>
    </div>
</body>
</html>