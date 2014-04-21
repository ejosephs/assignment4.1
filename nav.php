<nav>
    <ol>
        <?php
        if ($path_parts['filename'] == "home") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="home.php">Home</a></li>';
        }
        if ($path_parts['filename'] == "menu") {
            print '<li class="activePage">Menu</li>';
        } else {
            print '<li><a href="menu.php">Menu</a></li>';
        }
        if ($path_parts['filename'] == "table") {
            print '<li class="activePage">Hours</li>';
        } else {
            print '<li><a href="table.php">Hours</a></li>';
        }
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Reservations</li>';
        } else {
            print '<li><a href="form.php">Reservations</a></li>';
        }
        if ($path_parts['filename'] == "locations") {
            print '<li class="activePage">Locations</li>';
        } else {
            print '<li><a href="locations.php">Locations</a></li>';
        }
        if ($path_parts['filename'] == "about") {
            print '<li class="activePage">About</li>';
        } else {
            print '<li><a href="about.php">About</a></li>';
        }
        ?>
    </ol>
</nav>
