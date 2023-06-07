<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Ecommerce site</title>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>Ecommerce site</h1>
                </div>
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <img src="img/invoice.jpg" class="img-fluid" style="height : 200px; width : 200px">
                <br>
                <a href="query1.php"><button>Invoices</button></a>
            </div>
            <div class="col-md act">
                <img src="img/stock.jpg" class="img-fluid" style="height : 200px; width : 200px">
                <br>
                <a href="query2.php"><button>Stock details</button></a>
            </div>
            <div class="col-md act">
                <img src="img/user.jpg" class="img-fluid" style="height : 200px; width : 200px">
                <br>
                <a href="query3.php"><button>Top Customers</button></a>
            </div>
            <div class="col-md act">
                <img src="img/top_sell.jpg" class="img-fluid" style="height : 200px; width : 200px">
                <br>
                <a href="query4.php"><button>Top sold stock</button></a>
            </div>
            <div class="col-md act">
                <img src="img/top_invoice.jpg" class="img-fluid" style="height : 200px; width : 200px">
                <br>
                <a href="query5.php"><button>Highest Total Invoice</button></a>
            </div>
        </div>
    </div>
    <div class="px-4 pt-4 m-0 form-group col-sm-4">
            <h3 class="text-left"> Invoice Details </h3>
            <form  class = "p-2" method="get" action="query6.php">
                <label for="fname">Enter Invoice number:</label>
                <input type="text" id="invoiceno" name="InvoiceNo" class="form-control" id="ex2">
                <small id="emailHelp" class="form-text text-muted">We'll never share your invoice with anyone else.</small>
                <input type="submit" value="Submit" class="btn btn-secondary">
            </form>
            <h3 class="text-left"> Total price on Invoice </h3>
            <form class = "p-2" method="get" action="query7.php">
                <label for="fname">Enter Invoice number:</label>
                <input type="text" id="invoiceno" name="InvoiceNo" class="form-control">
                <small id="emailHelp" class="form-text text-muted">We'll never share your invoice with anyone else.</small>
                <input type="submit" value="Submit" class="btn btn-secondary">
            </form>
            
            
    </div>
    <div class="px-4 pt-4 m-0">
    <h3 class="text-left"> Insert Stock details </h3>
    <form class = "p-2" method="get" action="query9.php">
  <div class="row p-1 col-sm-12">
    
    <div class="col">
        <label for="fname">Enter Stock code :</label>
        <input type="text" id="StockCode" name="StockCode" class="form-control">
    </div>
    <div class="col">
        <label for="fname">Description:</label>
        <input type="text" id="Description" name="Description" class="form-control">
    </div>
    <div class="col">
        <label for="fname">Unit price:</label>
        <input type="text" id="UnitPrice" name="UnitPrice" class="form-control">
    </div>
    <div class="col">
        <br>
    <input type="submit" value="Submit" class="btn btn-secondary m-1">
    </div>
    
  </div>
  
</form>
</div>
<div class="px-4 pt-4 m-0 form-group mb-3 col-sm-6">
<h3 class="text-left"> Number of Invoices from country </h3>
<form class = "p-2" method="get" action="query8.php">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Choose the country</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="Country">
    <option selected>Choose...</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="Germany">Germany</option>
    <option value="France">France</option>
    <option value="EIRE">EIRE</option>
    <option value="Belgium">Belgium</option>
    <option value="Australia">Australia</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Spain">Spain</option>
    <option value="Sweden">Sweden</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Switzerland">Switzerland</option>
  </select>
  <input type="submit" value="Submit" class="btn btn-secondary m-1">
</form>
</div>
    
  

    <br>
    <br>
    <br>
    <br>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2022. Made by <b>The Thop Team</b> <br> Ecommerce Site</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
