<?php
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero contact-hero">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-inner">
        <div class="page-title-wrap">
            <div class="breadcrumb">Home &nbsp;> &nbsp;Contact Us</div>
            <h1>Let's Plan Your Dream Wedding</h1>
            <p>Share your details and our team will get in touch with you.</p>
        </div>
    </div>
</section>

<section class="section contact-section">
    <div class="container contact-grid">
        <div class="contact-form-panel">
            <h2>Book Your Wedding Consultation</h2>
            <form class="enquiry-card contact-form" action="process_form.php" method="POST">
                <div class="form-grid">
                    <div class="field">
                        <label>Bride Name</label>
                        <input type="text" name="bride_name" placeholder="Enter bride name" required>
                    </div>
                    <div class="field">
                        <label>Groom Name</label>
                        <input type="text" name="groom_name" placeholder="Enter groom name" required>
                    </div>
                    <div class="field">
                        <label>Wedding Date</label>
                        <input type="date" name="wedding_date" required>
                    </div>
                    <div class="field">
                        <label>No. of Persons</label>
                        <input type="number" name="no_of_persons" min="10" placeholder="e.g. 200" required>
                    </div>
                    <div class="field full">
                        <label>Mobile Number</label>
                        <input type="tel" name="mobile_no" placeholder="Enter phone number" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Enquiry</button>
            </form>
        </div>

        <div class="contact-info-panel">
            <h3>We'd love to hear from you</h3>
            <div class="info-box">
                <strong>Camp Adda India Travel Pvt. Ltd.</strong>
                <p>Jim Corbett, Uttarakhand</p>
            </div>
            <div class="info-box">
                <strong>Phone</strong>
                <p>+91 98765 43210</p>
            </div>
            <div class="info-box">
                <strong>Email</strong>
                <p>hello@campadda.in</p>
            </div>
            <div class="info-box">
                <strong>Hours</strong>
                <p>Mon - Sat | 9:00 AM - 7:00 PM</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/floating-btn.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
