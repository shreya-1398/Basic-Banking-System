<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Basic Banking System</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-image: url('images/money-writes-with-white-chalk-is-hand-draw-concept.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            opacity: 90%
        }
        h1{
            font-family: Copperplate, Papyrus, fantasy;
            font-size: 5.5rem;
        }
        .heading {
            
            color: #D4AC0D;
            margin: 2%  0% 0% 5%;
            font-family: sans-serif;
        }
        h3 {
            font-family: 'Brush Script MT', cursive;
        }
        p {
            color:#F5B7B1;
        }
        .bg-image {
            width: 100%;
            height: 100%;
            border: none;
            display: flex;
        }
        .img-fluid {
            opacity: 80%;
            margin: 0% auto;
        }
        .intro {
            margin: 0% auto;
        }
        .btn:hover{
            background-color: #9A7D0A;
            color: #B7950B;
        }
    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?> 
    <div class="container-fluid">
        <div class="row intro">
            <div class="heading ">
                <h3>Welcome To</h3>
                <h1>TSF Bank</h1>
            </div>
        </div>
        <div class="row activity text-center ">
                    <div class="col-lg-4">
                        <img src="images/users.jpg" class="img-fluid">
                        <br>
                        <br>
                        <a href="createuser.php"><button  class="btn" style="background-color : #7D3C98;">Create a User</button></a>
                    </div>
                    <br>
                    <div class="col-lg-4">
                        <img src="images/transfer.jpg" class="img-fluid">
                        <br>
                        <br>
                        <a href="transfer.php"><button  class="btn" style="background-color : #7D3C98;">Make a Transaction</button></a>
                    </div>
                    <div class="col-lg-4">
                        <img src="images/transaction.jpg" class="img-fluid">
                        <br>
                        <br>
                        <a href="transaction.php"><button class="btn" style="background-color : #7D3C98;">Transaction History</button></a>
                    </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-3bg-dark">
        <p>&copy 2021. Made by <b>SHREYA SHAHI</b> <br> The Sparks Foundation</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>