    <!-- 🔹 Sticky Top Navigation -->
    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <header id="navbar">
        <div class="nav-content">
            <h1><a href="index.php">A Note to You</a></h1>
            <nav id="nav-links">
                <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Gallery</a>
                <a href="mission.php" class="<?= $currentPage == 'mission.php' ? 'active' : '' ?>">About</a>
                <a href="process.php" class="<?= $currentPage == 'process.php' ? 'active' : '' ?>">Process</a>
                <a href="publication.php" class="<?= $currentPage == 'publication.php' ? 'active' : '' ?>">Publication</a>
            </nav>

            <div id="hamburger" class="hamburger-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>