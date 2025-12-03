<?php 
include "src/database.php"; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO contact_us (name,email,subject,message,submitted_at) VALUES(?,?,?,?,NOW())";
    $statement = $connection->prepare($query);
    $statement->bind_param("ssss",$name,$email,$subject,$message);
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
                <form id="contact" method="post" action="/contact.php">
                    <h1>Contact Us</h1>
                    <p class="form-description">Have a question or feedback? We'd love to hear from you!</p>
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input required id="name" name="name" type="text" placeholder="Gemma Smith">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input required id="email" name="email" type="email" placeholder="gemma@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input required id="subject" name="subject" type="text" placeholder="How can we help?">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea required id="message" name="message" rows="6" placeholder="Tell us more about your inquiry..."></textarea>
                    </div>
                    
                    <button type="submit" class="form-button">Send Message</button>
                </form>
            </div>
        </div>
    </main>
    
    <?php include "fragments/footer.php"; ?>
</body>
</html>