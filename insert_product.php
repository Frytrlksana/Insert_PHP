<?php
require('koneksi.php');

if (isset($_POST["submit"])) {
    if (tambahproduct($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert_product.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert_product.php';
            </script> 
    ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Tilt+Warp&display=swap" rel="stylesheet">

    <title>Database</title>
    <style>
         .Navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: grey;
            margin-bottom: 20px;
            border-bottom: 1px solid #514f4f;
            padding: 0 40px;
        }

        

        ul li a:hover {
            background-size: 50% 2px;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: black;
            margin-left: 20px;
        }

        /* Styling for form */
form {
  max-width: 500px;
  margin: 0 auto;
  padding: 4px;
  font-family: "Poppins", sans-serif;
}

form ul {
  list-style: none;
  padding: 0;
}

form li {
  margin-bottom: 10px;
}

form label {
  display: block;
  font-size: 12px;
  margin-bottom: 5px;
}

form input[type="text"],
form select {
  font-size: 12px;
  padding: 7px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 90%;
}

form input[type="submit"] {
  background-color: #333;
  color: white;
  font-size: 12px;
  padding: 7px 9px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

form input[type="submit"]:hover {
  background-color: #555;
}
li button[type="submit"] {
  background-color: #333;
  color: white;
  padding: 12px 24px;
  margin: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
    </style>
</head>

<body>
    <div class="Navbar">
        <div class="kiri">
            <h1>Classic Models</h1>
        </div>
        <div class="kanan">
            <a href="product.php" id="#product">Product</a>
            <a href="customer.php" id="#customer">Customer</a>
        </div>
    </div>

    <form action="" method="post">
            <ul>
                <li>
                <label for="productCode">Product Code : </label>
                <input type="text" name="productCode" id="productCode">
                </li>
            
            
                <li>
                <label for="productName">Product Name : </label>
                <input type="text" name="productName" id="productName">
                </li>
            
            
                <li>
                    <label for="productLine">Product Line : </label>
                    <select class="formsize" id="productLine" name="productLine">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="ulains">ulains</option>
                        <option value="ulucks and Buses">ulucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
                    </select>
                </li>
            
            
                <li>
                    <label for="productScale">Product Scale : </label>
                    <input type="text" name="productScale" id="productScale">
                </li>
            
            
                <li>
                    <label for="productVendor">Product Vendor : </label>
                    <input type="text" name="productVendor" id="productVendor">
                </li>
            
            
                <li>
                    <label for="productDescription">Product Description : </label>
                <li><input type="text" name="productDescription" id="productDescription"></li>
            
            
                <li>
                    <label for="quantityInStock">Quantity in Stock </label>
                    <input type="text" name="quantityInStock" id="quantityInStock">
                </li>
            
            
                <li>
                    <label for="buyPrice">Buy Price </label>
                    <input type="text" name="buyPrice" id="buyPrice">
                </li>
                <li>
                    <label for="MRSP">MRSP </label>
                    <input type="text" name="MRSP" id="MRSP">
                </li>
            <li>
               <button type="submit" name="submit">Submit</button>
            </li>
        </ul>   
    </form>
</body>
</html>