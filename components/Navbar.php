<!-- Navigation Bar -->
<nav class="navbar bg-primary navbar-expand-lg sticky-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Perpustakaan Rumah Nenek</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <?php if(isset($_SESSION['username'])) {?>

                        <a href="logout.php">
                        <button class="btn btn-outline-light me-2" type="button">Logout</button>
                        </a>
                        
                        <?php }?>
                        <a class="nav-link active" href="ShowBooks.php">Daftar Buku</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End of Navigation Bar -->