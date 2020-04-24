<nav>
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Oglasi</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php  if(!isset($_SESSION["user"])): ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <?php else: ?>
                <li><a href="userprofile.php"><?php echo $_SESSION["user"]["name"]; ?></a></li>
                <li><a href="logout.php">logout</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>