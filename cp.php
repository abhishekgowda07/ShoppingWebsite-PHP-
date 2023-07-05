<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                background: linear-gradient(to bottom, #ff9900 0%, #000000 100%);
            }
            #menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #000000;
            clip-path: polygon(0 0, 100% 0, 96% 100%, 3% 100%);
            margin-bottom: 5%;
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
            color: rgb(255, 132, 0);
            text-align: center; 
            padding: 14px 16px;
            text-decoration: none;
        }
        #menu_item a:hover{
            background-color: grey;
        }
            .box_main {
    width: 100%;
    background-color: white;
    height: auto;
    padding: 20px;
    margin-bottom: 20px;
}
.btn_main {
    width: 100%;
    display: flex;
}
a{
    text-decoration: none;
    outline: none;
}
.row
{
    display: flex;
    flex-wrap: wrap;    
    margin-bottom: 10%;
}
.img_l{
    width: 100%;
    text-align: center;
    margin: 50px 0px;
    min-height: 370px;
}
img {
    max-width: 100%;
    height: auto;
}
.col
{
    flex: 0 0 33.333333%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.item_text{
    width: 100%;
    text-align: center;
}
.price_text{
    width: 100%;
    color: darkblue;
    text-align: center;
}
.buy_bt{
    float: left;
    width: 100%;
}
.buy_bt a {
    width: 100%;
    font-size: 16px;
    color: #f26522;
    background-color: black;
    text-align: right;
    font-weight: bold;
    padding: 5%;
}

.buy_bt a:hover {
    background-color: #f26522;
    color: #262626;
}

.seemore_bt {
    width: 100%;
    float: right;
    text-align: right;
}

.seemore_bt a {
    width: 100%;
    font-size: 16px;
    color: #262626;
    background-color: transparent;
    text-align: right;
}

.seemore_bt a:hover {
    background-color: transparent;
    color: #f26522;
}
.active,#menu_item:hover{
    background-color: #6c6967;
    color: black;
}
        </style>
    </head>
    <body>
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
        <ul id="menu">
            <li id="menu_item"><a href="temp_ind.php">Home</a></li>
            <li id="menu_item"  class="active"><a href="#index">Shop</a></li>
        </ul>
        <div class="container">
           <div class="row">
              <?php foreach ($recently_added_products as $product): ?>
                 <div class="col">
                    <div class="box_main">
                    <h4 class="item_text"><?=$product['name']?></h4>
                    <p class="price_text">Price <span>$<?=$product['price']?></span></p> 
                    <div class="img_l">
                    <img src="<?=$product['name']?>.jpg">
                    </div>
                    <div class="btn_main">
                    <form action="temp_ind.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
                    </div>
                    </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>