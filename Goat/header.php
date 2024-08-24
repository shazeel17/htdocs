<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pulga</title>
    <link rel="stylesheet" href="styles.css">
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.logo h1 {
    margin: 0;
}

nav {
    display: flex;
}

/* Style for the toggle checkbox and label */
.menu-toggle {
    display: none;
}

.menu-icon {
    display: none;
    background: none;
    border: none;
    color: #fff;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Style the navigation list */
.nav-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-list li {
    margin-right: 1rem;
}

.nav-list a {
    color: #fff;
    text-decoration: none;
}

/* Dropdown styles */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #444;
    list-style: none;
    margin: 0;
    padding: 0;
    top: 100%;
    left: 0;
    min-width: 150px;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

/* Responsive styles */
@media (max-width: 768px) {
    .nav-list {
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .nav-list a {
        display: block;
        padding: 1rem;
        border-top: 1px solid #555;
        text-align: center;
    }

    .menu-icon {
        display: block;
    }

    /* Toggle the visibility of the navigation menu */
    .menu-toggle:checked ~ nav .nav-list {
        display: flex;
    }

    .dropdown-menu {
        position: static;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }
}
</style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>La Pulga</h1>
        </div>
        <!-- Hidden checkbox for toggle -->
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="Clubs.php">Clubs</a>
                    <ul class="dropdown-menu">
                        <li><a href="barcelona.php">Barcelona</a></li>
                        <li><a href="psg.php">PSG</a></li>
                        <li><a href="miami.php">Miami</a></li>
                    </ul>
                </li>
                <li><a href="achievements.php">Achievements</a></li>
                <li><a href="trophies.php">Trophies</a></li>
                <li><a href="award.php">Individual</a></li>
                <li><a class="records" href="records.php">Records</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
