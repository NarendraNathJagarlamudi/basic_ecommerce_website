<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice by country</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color: black;
        color: white;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $Country = $_GET['Country'];

    $query = mysqli_query($conn, "SELECT Country,count(InvoiceNo) as InvoiceCount from Invoice group by Country having Country = '".$Country."'")
    
    or die (mysqli_error($conn));
    $query2 = mysqli_query($conn, "SELECT * from Invoice where Country = '".$Country."'")
    or die (mysqli_error($conn));

 
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4">Invoice by country</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Country</th>
                            <th scope="col" class="text-center py-2">InvoiceCount</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['Country'] ?></td>
                        <td class="py-2"><?php echo $rows['InvoiceCount']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Country</th>
                            <th scope="col" class="text-center py-2">InvoiceNo</th>
                            <th scope="col" class="text-center py-2">CustomerID</th>
                            <th scope="col" class="text-center py-2">InvoiceDate</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($query2)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['Country'] ?></td>
                        <td class="py-2"><?php echo $rows['InvoiceNo']?></td>
                        <td class="py-2"><?php echo $rows['CustomerID']?></td>
                        <td class="py-2"><?php echo $rows['InvoiceDate']?></td>
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
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>