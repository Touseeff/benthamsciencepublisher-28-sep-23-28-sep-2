<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_SESSION['admin']) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: blue;
            color: white;
            transition: left 0.3s;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sub-menu {
            display: none; /* Hide sub-menus by default */
        }

        .main-link.active .sub-menu {
            display: block;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <ul>
            <!-- <li class="main-link" onclick="toggleSubMenu(this)"><a href="index.php?add_most_cited_article_sub_link" class="text-light" style="text-decoration:none;">Add Web Header</a></li> -->
            <li class="main-link" onclick="toggleSubMenu(this)">
                <a class="text-light"  style="text-decoration:none;">Add Web Header</a>
                <ul class="sub-menu">
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_web_header">Add Header</a></li>
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?edit">View All Header</a></li>
                </ul>
            </li>
            <li class="main-link" onclick="toggleSubMenu(this)">
                <a class="text-light" style="text-decoration:none;">Add Journal Impacting Science</a>
                <ul class="sub-menu">
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_web_header">Add Header</a></li>
                    <li><a class="text-light" style="text-decoration:none;" href="login.php">View Header</a></li>
                </ul>
            </li>
            <li class="main-link" onclick="toggleSubMenu(this)">
                <a class="text-light" style="text-decoration:none;">Add MOST CITED ARTICLES</a>
                <ul class="sub-menu">
                    <!-- Add sub-menu links here -->
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_most_cited_article_sub_link">Sub Link 1</a></li>
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_most_cited_article_sub_link">Sub Link 2</a></li>
                </ul>
            </li>
            <li class="main-link" onclick="toggleSubMenu(this)">
                <a class="text-light" style="text-decoration:none;">Add SUBJECT LIST MOST CITED ARTICLE</a>
                <ul class="sub-menu">
                    <!-- Add sub-menu links here -->
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_subject_list_sub_link">Sub Link 1</a></li>
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_subject_list_sub_link">Sub Link 2</a></li>
                </ul>
            </li>
            <li class="main-link" onclick="toggleSubMenu(this)">
                <a class="text-light" style="text-decoration:none;">Add Books</a>
                <ul class="sub-menu">
                    <!-- Add sub-menu links here -->
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_books_sub_link">Sub Link 1</a></li>
                    <li><a class="text-light" style="text-decoration:none;" href="index.php?add_books_sub_link">Sub Link 2</a></li>
                </ul>
            </li>
            <li class="main-link" onclick="toggleSubMenu(this)"><a class="text-light" style="text-decoration:none;">Article Status</a></li>
        </ul>
    </div>
    <!-- <button onclick="toggleSidebar()" class="btn btn-primary text-white">Toggle Sidebar</button> -->

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const mainLinks = document.querySelectorAll('.main-link');

        function toggleSidebar() {
            sidebar.classList.toggle('show');
        }

        function toggleSubMenu(link) {
            const subMenu = link.querySelector('.sub-menu');
            if (subMenu) {
                link.classList.toggle('active');
                subMenu.classList.toggle('active');
            }
        }
    </script>
</body>
</html>

<?php
} else {
    header('Location:login.php');
}
?>
