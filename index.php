<?php
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero hero-main">
    <div class="hero-overlay"></div>
    <div class="container hero-inner">
        <div class="hero-copy">
            <div class="eyebrow">Destination Wedding at</div>
            <h1>JIM CORBETT</h1>
            <h2>Where Your Love Story Meets Nature</h2>
            <p>
                Plan a memorable destination wedding in Jim Corbett with Camp Adda India Travel Private Limited.
                With 15+ years of experience in crafting beautiful weddings amidst nature's finest settings.
            </p>
            <div class="hero-actions">
                <a href="#enquiry-form" class="btn btn-primary">Plan Your Dream Wedding</a>
            </div>
            <div class="stats-grid">
                <div class="stat-box">
                    <div class="icon">★</div>
                    <div>
                        <strong>15+ Years</strong>
                        <span>of Experience</span>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon">✓</div>
                    <div>
                        <strong>Government</strong>
                        <span>Registered Company</span>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon">✦</div>
                    <div>
                        <strong>Expert Wedding</strong>
                        <span>Planners</span>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="icon">◎</div>
                    <div>
                        <strong>End-to-End</strong>
                        <span>Event Management</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-form-wrap">
            <form class="enquiry-card" id="enquiry-form" action="process_form.php" method="POST">
                <h3>Quick Wedding Enquiry</h3>
                <div class="form-grid">
                    <div class="field">
                        <label for="bride_name">Bride Name</label>
                        <input type="text" id="bride_name" name="bride_name" placeholder="Enter bride name" required>
                    </div>
                    <div class="field">
                        <label for="groom_name">Groom Name</label>
                        <input type="text" id="groom_name" name="groom_name" placeholder="Enter groom name" required>
                    </div>
                    <div class="field">
                        <label for="wedding_date">Wedding Date</label>
                        <input type="date" id="wedding_date" name="wedding_date" required>
                    </div>
                    <div class="field">
                        <label for="no_of_persons">No. of Persons</label>
                        <input type="number" id="no_of_persons" name="no_of_persons" min="10" placeholder="e.g. 150" required>
                    </div>
                    <div class="field full">
                        <label for="mobile_no">Mobile Number</label>
                        <input type="tel" id="mobile_no" name="mobile_no" placeholder="Enter mobile number" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Enquiry</button>
            </form>
        </div>
    </div>
</section>

<section class="section choose-section">
    <div class="container two-col">
        <div class="section-copy">
            <div class="section-tag">Why Choose</div>
            <h2>Jim Corbett for Your Destination Wedding?</h2>
            <p>
                Jim Corbett offers a perfect blend of natural beauty, premium resorts and serene surroundings.
                It gives you the opportunity to celebrate your special day away from the busy city life, with your loved ones,
                in a relaxed and scenic environment.
            </p>
            <a href="venues.php" class="btn btn-secondary">Discover More</a>
        </div>
        <div class="features-grid">
            <div class="mini-card">
                <div class="mini-icon">⛰</div>
                <h4>Stunning Natural Surroundings</h4>
            </div>
            <div class="mini-card">
                <div class="mini-icon">🏕</div>
                <h4>Beautiful Resort Venues</h4>
            </div>
            <div class="mini-card">
                <div class="mini-icon">📅</div>
                <h4>Perfect for Multiple Functions</h4>
            </div>
            <div class="mini-card">
                <div class="mini-icon">👨‍👩‍👧‍👦</div>
                <h4>Quality Time with Family &amp; Friends</h4>
            </div>
            <div class="mini-card">
                <div class="mini-icon">📸</div>
                <h4>Great for Wedding Photography</h4>
            </div>
            <div class="mini-card">
                <div class="mini-icon">🌿</div>
                <h4>A Refreshing Destination Experience</h4>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding-top:0;">
    <div class="container">
        <div class="heading-center">
            <div class="section-tag">Wedding Functions in Jim Corbett</div>
            <h2>Every Function, A Special Setting</h2>
            <p>From Haldi to the Grand Wedding, celebrate each moment in a unique and beautiful setting.</p>
        </div>
        <div class="function-grid">
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=900&q=80" alt="Welcome Dinner">
                <span>Welcome Dinner</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=900&q=80" alt="Haldi Ceremony">
                <span>Haldi Ceremony</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?auto=format&fit=crop&w=900&q=80" alt="Mehendi Ceremony">
                <span>Mehendi Ceremony</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?auto=format&fit=crop&w=900&q=80" alt="Sangeet Night">
                <span>Sangeet Night</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=900&q=80" alt="Wedding Ceremony">
                <span>Wedding Ceremony</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1519167758481-83f550bb7153?auto=format&fit=crop&w=900&q=80" alt="Reception">
                <span>Reception</span>
            </article>
            <article class="function-card">
                <img src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?auto=format&fit=crop&w=900&q=80" alt="Goodbye Dinner">
                <span>Goodbye Dinner</span>
            </article>
        </div>
    </div>
</section>

<section class="section story-section">
    <div class="container story-layout">
        <div class="story-content">
            <div class="section-tag">Our Story</div>
            <h2>The Journey of Camp Adda</h2>
            <p>
                Camp Adda India Travel Private Limited is a registered and experienced travel and event company with Government of India recognition.
                With 15 years of experience in the travel and event management industry, we have successfully planned and managed many weddings and special events in Jim Corbett and across Uttarakhand.
            </p>
            <p>
                Our journey began with a simple idea — to help people experience the beauty of nature through meaningful travel and well-organised events.
                Over the years, we have grown into a trusted name for destination weddings in Jim Corbett, known for our professionalism, attention to detail and genuine commitment to our clients.
            </p>
            <a href="about.php" class="btn btn-secondary">Our Services</a>
        </div>
        <div class="story-box">
            <div class="logo-badge">
                <div class="camp-logo">Camp Adda</div>
            </div>
        </div>
    </div>
</section>

<section class="section purpose-section">
    <div class="container">
        <div class="heading-center mb-4">
            <div class="section-tag">Our Purpose</div>
            <h2>Delivering Meaningful Experiences</h2>
            <p>We believe every wedding is a unique story. Our purpose is to turn your vision into a well-planned celebration where you, your family and your guests can enjoy every moment.</p>
        </div>
        <div class="purpose-grid">
            <div class="purpose-item"><div class="purpose-icon">🌿</div><span>Nature-Inspired Celebrations</span></div>
            <div class="purpose-item"><div class="purpose-icon">👥</div><span>Personalised Planning</span></div>
            <div class="purpose-item"><div class="purpose-icon">💞</div><span>Guest-Centric Approach</span></div>
            <div class="purpose-item"><div class="purpose-icon">🏡</div><span>Responsibility Towards Destinations</span></div>
            <div class="purpose-item"><div class="purpose-icon">✨</div><span>Creating Memories that Last</span></div>
        </div>
    </div>
</section>

<section class="section experience-section">
    <div class="container experience-grid">
        <div class="experience-photo">
            <div class="photo-card">
                <div class="photo-card-overlay">Beautiful Places <br> Happier People <br> Stronger Bonds</div>
            </div>
        </div>
        <div class="experience-copy">
            <div class="section-tag">Our Expertise</div>
            <h2>Why Couples Choose Us</h2>
            <p>Our strong presence and hands-on knowledge of Jim Corbett give us a clear understanding of the destination, its hospitality ecosystem and what it takes to plan a successful wedding here.</p>
            <ul class="check-list">
                <li>In-depth knowledge of Jim Corbett and surrounding areas</li>
                <li>End-to-end wedding planning and event management</li>
                <li>Experienced team with local expertise</li>
                <li>Coordination with venues, vendors and resort teams</li>
                <li>Focus on hospitality, guest experience and smooth execution</li>
                <li>Support for multi-day wedding celebrations</li>
                <li>Commitment to personalised service and transparent communication</li>
            </ul>
        </div>
    </div>
</section>

<section class="section cta-banner">
    <div class="container cta-banner-inner">
        <div>
            <div class="section-tag">Our Commitment</div>
            <h2>Let's Create Something Special Together</h2>
            <p>
                At Camp Adda, we are committed to making your destination wedding in Jim Corbett a memorable and well-organised experience.
                From the first discussion to the final celebration, our team is here to support you at every step.
            </p>
            <a href="contact.php" class="btn btn-primary">Get in Touch</a>
        </div>
        <div class="cta-scripture">Same Journey<br>New Stories</div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/floating-btn.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
