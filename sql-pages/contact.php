<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>About | Beverrinks</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <section class="contact-section" id="contact-section" name="contact-section">
        <div class="contact-form">
            <h1>Get in touch with us</h1>
            <form action="mailto:beverrinks@gmail.com" method="post" enctype="text/plain">
                <input type="text" placeholder="Name" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="subject" placeholder="Subject" required>
                <textarea name="message" id="message" cols="20" rows="5" placeholder="Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
        <div class="contact-info">
            <div class="contact-info-box">
                <i class="fa-solid fa-location-dot"></i>
                <h4 class="title">Address:</h4>
                <p id="address">Edinburgh, Scotland</p>
            </div>
            <div class="contact-info-box">
                <i class="fa-solid fa-phone"></i>
                <h4 class="title">Phone:</h4>
                <p><a href="tel://+44-4234234568">+44-4234234568</a></p>
            </div>
            <div class="contact-info-box">
                <i class="fa-solid fa-paper-plane"></i>
                <h4 class="title">Email:</h4>
                <p><a href="#">beverrinks@gmail.com</a></p>
            </div>
        </div>
    </section>

    <!-- ---- Footer Section ---- -->
    <?php include 'footer.php' ?>
</body>

</html>