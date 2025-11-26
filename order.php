<?php include "src/database.php"; 
// check for form submission
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // get data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // insert the data into contact_us table
    // SQL query
    $query = "INSERT INTOcontact_us orders(customer_name,email,product_name,quantity,price,order_date)
    value
    ";
    $statement = $connection -> prepare($query);
    $statement -> bind_param("ssss",$name,$email,$subject,$message);
    if( !$statement -> execute() ) {
        // there's an error
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "fragments/head.php"; ?>

<body>
    <?php include "fragments/pageheader.php"; ?>
    
    <main class="content">
        <div class="card">
            <div class="card-content">
                <form id="contact" method="post" action="/contact.php">
                    <h1>Contact Us</h1>
                    <label for="name">Name</label>
                    <input required id="name" name="customer_name" type="text" placeholder="Gemma Smith">
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    <label for="product_name">Subject</label>
                    <input required id="product_name" name="subject" type="text" placeholder="inquiry">
                    <label for="message">Message</label>
                    <label for="quantity">quantity</label>
                   <input require id ="quantity"> name= "quantity" type ="number" min="1" val "1">
                    <button type="submit" class="form-button">Send</button>
                </form>
            </div>
        </div>
         
    </main>
    <?php include "fragments/footer.php"; ?>
</body>

</html>