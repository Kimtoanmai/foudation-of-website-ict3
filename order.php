<?php 
include "src/database.php"; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['customer_name'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    $query = "INSERT INTO orders (customer_name,email,product_name,quantity,price,order_date) VALUES(?,?,?,?,?,NOW())";
    $statement = $connection->prepare($query);
    $statement->bind_param("sssid",$name,$email,$product_name,$quantity,$price);
    if(!$statement->execute()) {
        echo $connection->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "fragments/head.php"; ?>
<body>
    <?php include "fragments/pageheader.php"; ?>
    
    <main class="content">
        <div class="card form-card">
            <div class="card-content">
                <form id="order-form" method="post" action="/order.php">
                    <h1>Order Form</h1>
                    <p class="form-description">Fill out the form below to place your order</p>
                    
                    <div class="form-group">
                        <label for="customer_name">Full Name</label>
                        <input required id="customer_name" name="customer_name" type="text" placeholder="Gemma Smith">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input required id="product_name" name="product_name" type="text" placeholder="Enter product name">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input required id="quantity" name="quantity" type="number" min="1" value="1">
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Price ($)</label>
                            <input required id="price" name="price" type="number" min="0.99" step="0.01" value="1.99">
                        </div>
                    </div>
                    
                    <button type="submit" class="form-button">Submit Order</button>
                </form>
            </div>
        </div>
    </main>
    
    <?php include "fragments/footer.php"; ?>
</body>
</html>