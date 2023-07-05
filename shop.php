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
    background-color: #ffffff;
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
$servername = "localhost";
$username = "root";
$password = "root";
/*
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
} else {
  //echo "Error creating database: " . $conn->error;
} 
$conn = mysqli_connect($servername, $username, $password,"myDB");
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

//$sql="CREATE TABLE MyGuestsNew (name varchar(30) primary key, as varchar(30))";
$conn->query($sql)
*/
$name = $_POST['name'];
$email=$_POST['email'];
$conn = mysqli_connect($servername, $username, $password,"myDb");
$sql = "insert into mytable values('$name','$email')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
$conn->close();
?>
        <ul id="menu">
            <li id="menu_item"><a href="#index">Home</a></li>
            <li id="menu_item"  class="active"><a href="#index">Shop</a></li>
            <li id="menu_item"><a href="#index">Contact</a></li>
            <li id="menu_item" style="float:right;"><a href="#index">About</a></li>
        </ul>
        <div class="container">
        <div class="row">
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">
                        <img src="1.jpg">
                    </div>
                    <div class="btn_main">
                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                    <div class="seemore_bt"><a href="#">See More</a></div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">  
                        <img src="1.jpg">
                    </div>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <div class="seemore_bt"><a href="#">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">
                    <img src="1.jpg">
                </div>
                <div class="btn_main">
                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                    <div class="seemore_bt"><a href="#">See More</a></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">
                        <img src="1.jpg">
                    </div>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <div class="seemore_bt"><a href="#">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">
                        <img src="1.jpg">
                    </div>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <div class="seemore_bt"><a href="#">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="box_main">
                    <h4 class="item_text">LAPTOP</h4>
                    <p class="price_text">Price<span>$ 400</span></p> 
                    <div class="img_l">
                    <img src="1.jpg">
                </div>
                <div class="btn_main">
                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                    <div class="seemore_bt"><a href="#">See More</a></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <form action="shop.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    </body>
</html>