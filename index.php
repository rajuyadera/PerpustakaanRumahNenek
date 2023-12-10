<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Rumah Nenek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container-fluid" id="main-container">
        <?php require_once 'components/Navbar.php' ?>

        <!-- Landing Page -->
        <div class="container-fluid" id="container">
            <div class="jumbotron jumbotron-fluid text-center text-light" id="landing-page">
                <div class="container">
                    <h1 class="headline">Perpustakaan Rumah Nenek</h1>
                    <p class="sub-headline">Cari buku apapun yang kamu suka</p>
                    <a href="login.php" class="btn btn-success">Masuk untuk lihat buku</a>
                </div>
            </div>
        </div>
        <!-- End of landing page -->

        <!-- Footer -->
        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3 bg-primary text-light">
                <p>© 2023 Copyright: Kelompok Keren</p>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- End of footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
        
</body>
</html>