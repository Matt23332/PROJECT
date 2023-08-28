<?php
$pageTitle = "Contact Us";
$section = null;
include ('include/header.php');
?>

    <h1>Contact Us</h1>

    <main>
        <div class="contact-form">
            <h2>Get in Touch</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> 123 Main Street, Nairobi, Kenya</p>
            <p><strong>Email:</strong> meditechpharm@gmail.com</p>
            <p><strong>Phone:</strong> +254-7456-78910</p>
        </div>
    </main>
<?php
include ('include/footer.php');
?>
