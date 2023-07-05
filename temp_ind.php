<!DOCTYPE html>
<head>
    <style>
        #menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            clip-path: polygon(0 0, 100% 0, 96% 100%, 3% 100%);
        }
        #menu_item:last-child{
            margin-right: 10%;
        }
        #menu_item{
            float: left;
            margin-left: 10%;
        }
        #menu_item a{
            display: block;
            color: greenyellow;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        #menu_item a:hover{
            background-color: grey;
        }
    </style>
</head>
<body>
    <ul id="menu">
        <li id="menu_item"><a href="index1.php">Home</a></li>
        <li id="menu_item"><a href="cp.php">Shop</a></li>
    </ul>
    <?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>
    <?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 5');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
</body>
</html>