    <!-- Navbar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <div class="logo">
                <img src="./images/IPR logo.png">
            </div>&nbsp; &nbsp;
            <a class="navbar-brand" href="index.php">SAKEC IPR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#events">
                            Events
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#roles">
                            Our Team
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#news">
                            News
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#footer">
                            Contact Us
                        </a>

                    </li>

                </ul>
                <div class="d-flex justify-content-center">
                    <?php
                    if (!isset($_SESSION['email'])) {
                    ?>
                        <a href="login.php" class="button" style=" padding: 5px 15px; color: white;">Login</a>
                    <?php
                    } else {
                    ?>
                        <a href="logout.php" class="button" style=" padding: 5px 15px; color: white;">Logout</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- navbar ends -->