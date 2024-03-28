<?php
require 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <style>
    body{
        background-image: radial-gradient(rgb(231, 170, 170),rgb(153, 153, 224) ) ;
    }
    .nvbar{
        background-color: black;
        border-radius:8px ;
    }
    .nvbar ul{
        overflow: auto;
    }
    .nvbar li{
        display: inline;
        list-style: none;
        margin: 13px;
    }
    .nvbar li a{
        padding: 5px;
        text-decoration: none;
        color: white;
    }
    .nvbar li a:hover{
        color: aqua;
    }
    .im{
        float: left;
    }
    .m{
        float:right;
    }
    .container{
        display:flex;
    }
    .box{
        flex-basis:100%;
    }
    .image{
        width:100%;
    }
    #box1{
        flex-grow:2;
    }
    .bid{
        margin-top: 80px;
        font-size: 70px;
        font-weight: bold;
        text-align: center;
        color:rgb(44, 20, 20);
    }
    #caption{
        font-size: 28px;
        font-style: italic;
        text-align: center;
    }
    #logo{
        border-radius: 3px;
    }
 </style>
</head>
<body>
    <br>
    <!-- <nav class="nvbar">
        <ul>
            <li class="m"><a href="https://en.wikipedia.org/wiki/FAQ">FAQ</a></li>
            <li class="m"><a href="">Contact</a></li>
            <li class="m"><a href="">About</a></li>
            <li class="m"><a href="login.php">Login</a></li>
            <li class="im"><img id="logo" src="auctioniz.jpg" width="120" height="40"></li>
        </ul>
    </nav> -->
    <div class="container">
        <div class="box" id="box1">
            <div class="bid">ONLINE<br>BIDDING</div>
            <p id="caption">BID,WIN,THRIVE:<br>Your Auction Adventure Begins!!</p>
        </div>
        <div class="box">
            <img src="bg5.jpg" class="image">
        </div>
    </div>

</body>
</html>