<!DOCTYPE html>
<html>

<head>
    <title>Insurance Database</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <style>
    .dropdown {
        cursor: pointer;
        height: 50px;
        position: relative;
        text-align: center;
        z-index: 1;
    }

    .dropdown-menu li {
        margin: auto !important;
    }

    .dropdown-menu {
        background-color: #4E6E5D;
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: absolute;
        left: 0;
        opacity: 0;
        text-align: center;
        top: 0;
        visibility: hidden;
        z-index: -9;
        border-radius: 4px;
    }

    .dropdown-menu a {
        width: 100%;
        text-decoration: none;
        transition: all 0.5s;
        display: none;
    }

    .dropdown-menu a:last-child {
        display: inline-block;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        top: 100%;
        transition: all 0.5s;
        margin-top: 20px;
    }

    .dropdown-menu:not(:hover) {
        transition-delay: 0.3s;
        opacity: 0;
        visibility: hidden;
    }

    .fa-chevron-down {
        color: #efefef !important;
        margin-left: 2px;
        transition: all 0.2s ease-in-out;
    }

    .dropdown:hover .fa-chevron-down {
        transform: scaleY(-1);
    }
    .dropdown-menu>li>a {
        &:hover {
            background-color: #597d6a;
            transition: background 0.3s;
        }&::after {
            display: none;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php" class="list">Home</a></li>

            <li class="dropdown">
                <a> View
                    <i class="fas fa-chevron-down" style="color: #2B2D42;"></i>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="employees_records.php">Employees</a>
                        </li>
                        <li>
                            <a href="owners_records.php">Owners</a>
                        </li>
                    </ul>
                </a>
            </li>

            <li class="dropdown">
                <a> Add
                    <i class="fas fa-chevron-down" style="color: #2B2D42;"></i>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="employees_add.php" class="list">Employee</a>
                        </li>
                        <li>
                            <a href="owners_add.php" class="list">Owner</a>
                        </li>
                    </ul>
                </a>
            </li>

            <li><a href="about.php" class="list">About Project</a></li>
        </ul>
        <div class="rightNav">
            <i class="fas fa-search" style="color: #2B2D42;"></i>
            <input type="text" name="search" id="search" placeholder="Search" readonly>
        </div>
    </nav>
</body>

</html>