<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#424949;
        color: #73C6B6;
      }
      *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        h2{
            font-size: 40px;
        }
        table{
            letter-spacing: 1.2px;
        }
        td{
            text-align: center;
        }
        @media only screen and (orientation: portrait){
            *{
                letter-spacing: 1px;
            }
        }
    </style>
</head>

<body style="background-color : #EDBB99;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : #D68910; font-family: 'Brush Script MT', cursive;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : #34495E;">
                        <td class="py-2"><?php echo $rows['Id'] ?></td>
                        <td class="py-2"><?php echo $rows['Name']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        <td class="py-2"><?php echo $rows['Email']?></td>
                        <td><a href="selecteduserdetail.php?Id= <?php echo $rows['Id'] ;?>"> <button type="button" class="btn" style="background-color : #1ABC9C;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5 py-3 " style="color: #95A5A6">
             <p>&copy 2021. Made by <b>SHREYA SHAHI</b> <br> The Sparks Foundation</p>
          </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>