<?php
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero venue-hero">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-inner">
        <div class="page-title-wrap">
            <div class="breadcrumb">Home &nbsp;> &nbsp;Wedding Venues</div>
            <h1>Wedding Venues<br>in Jim Corbett</h1>
            <p>Beautiful Places for Your Happily Ever After</p>
        </div>
    </div>
</section>

<section class="section venues-top">
    <div class="container">
        <div class="venue-feature-grid">
            <div class="small-feature"><span>🏨</span> Resort Venues</div>
            <div class="small-feature"><span>🏕</span> Banquet Halls</div>
            <div class="small-feature"><span>🌿</span> Lawns for Outdoor Functions</div>
            <div class="small-feature"><span>🛏</span> Accommodation for Guests</div>
            <div class="small-feature"><span>🎉</span> Perfect for Multiple Functions</div>
            <div class="small-feature"><span>🤝</span> Support from Expert Planners</div>
        </div>
    </div>
</section>

<section class="section venues-search">
    <div class="container">
        <div class="heading-center mb-4">
            <div class="section-tag">Find Your Perfect Venue</div>
            <h2>Explore Wedding Venues in Jim Corbett</h2>
            <p>Browse through a selection of the best wedding venues in Jim Corbett based on your preferences.</p>
        </div>

        <form class="filter-bar" method="GET" action="venues.php">
            <div class="filter-field">
                <label>Venue Type</label>
                <select name="venue_type">
                    <option value="">All Types</option>
                    <option value="Resort">Resort</option>
                    <option value="Banquet">Banquet</option>
                    <option value="Lawn">Lawn</option>
                </select>
            </div>
            <div class="filter-field">
                <label>Guest Capacity</label>
                <select name="guest_capacity">
                    <option value="">Any</option>
                    <option value="50">Up to 50</option>
                    <option value="100">Up to 100</option>
                    <option value="200">Up to 200</option>
                    <option value="300">Up to 300</option>
                </select>
            </div>
            <div class="filter-field">
                <label>Amenities</label>
                <select name="amenities">
                    <option value="">Select</option>
                    <option value="Pool">Pool</option>
                    <option value="Garden">Garden</option>
                    <option value="Accommodation">Accommodation</option>
                </select>
            </div>
            <div class="filter-field">
                <label>Budget Range</label>
                <select name="budget">
                    <option value="">Any</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="premium">Premium</option>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary">Search Venues</button>
        </form>

        <div class="venue-cards">
            <article class="venue-card">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Popular</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>Riverview Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 80</span><span>🍽 Banquet</span><span>🏡 30 guest rooms</span></div>
                    <p class="desc">A scenic riverside resort with lush lawns and elegant banquet spaces, ideal for multi-day wedding celebrations.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>

            <article class="venue-card premium">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1522673607200-164d1b6ce486?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Premium</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>Luxury Forest Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 100</span><span>🍽 Banquet</span><span>🏡 100+ guest rooms</span></div>
                    <p class="desc">A premium resort surrounded by greenery, perfect for grand weddings with stylish indoor and outdoor venues.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>

            <article class="venue-card">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Popular</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>Nature Retreat Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 50-250</span><span>🍽 Banquet</span><span>🏡 50-250 guests</span></div>
                    <p class="desc">A peaceful retreat offering beautiful lawns, comfortable accommodation and personalised wedding experiences.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>

            <article class="venue-card">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Popular</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>Forest View Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 50</span><span>🍽 Banquet</span><span>🏡 50 guest rooms</span></div>
                    <p class="desc">A serene venue with natural charm, perfect for intimate and mid-sized wedding celebrations.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>

            <article class="venue-card">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1519167758481-83f550bb7153?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Popular</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>Wild Orchid Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 100</span><span>🍽 Banquet</span><span>🏡 150+ guests</span></div>
                    <p class="desc">Spacious event areas, modern amenities and a beautiful setting for memorable wedding celebrations.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>

            <article class="venue-card">
                <div class="venue-image" style="background-image:url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1000&q=80');">
                    <span class="tag">Popular</span>
                    <button class="fav-btn">♡</button>
                </div>
                <div class="venue-content">
                    <h3>The Grand Valley Resort</h3>
                    <p class="meta">Jim Corbett, Ramnagar</p>
                    <div class="meta-row"><span>👥 80</span><span>🍽 Banquet</span><span>🏡 30 guest rooms</span></div>
                    <p class="desc">A versatile venue with multiple event spaces for all wedding functions, from rituals to receptions.</p>
                    <a href="contact.php" class="btn btn-link">View Details</a>
                </div>
            </article>
        </div>

        <div class="text-center mt-4">
            <a href="contact.php" class="btn btn-primary">Load More Venues</a>
        </div>
    </div>
</section>

<section class="section packages-section">
    <div class="container packages-layout">
        <div class="packages-copy">
            <div class="section-tag">Make It a Complete Experience</div>
            <h2>Destination Wedding Packages in Jim Corbett</h2>
            <p>
                Our destination wedding packages are designed to make planning easier and more enjoyable.
                From venue selection and décor to hospitality and event management, we take care of every detail so you can focus on your special moments.
            </p>
            <a href="contact.php" class="btn btn-primary">View Wedding Packages</a>
        </div>
        <div class="package-image">
            <div class="package-image-overlay">Celebrations <br> In the Heart of Nature</div>
        </div>
    </div>
</section>

<section class="section amenities-section">
    <div class="container">
        <div class="heading-center mb-4">
            <div class="section-tag">Venue Amenities</div>
            <h2>Everything You Need for a Perfect Wedding</h2>
            <p>Our wedding venues in Jim Corbett offer a range of amenities to make your celebration comfortable and memorable.</p>
        </div>
        <div class="amenities-grid">
            <div class="amenity-item"><span>🏡</span> Spacious Lawns</div>
            <div class="amenity-item"><span>🏕</span> Banquet Halls</div>
            <div class="amenity-item"><span>🛏</span> Accommodation</div>
            <div class="amenity-item"><span>🏠</span> In-house Catering</div>
            <div class="amenity-item"><span>🎵</span> Décor Support</div>
            <div class="amenity-item"><span>🚌</span> Parking Space</div>
            <div class="amenity-item"><span>🧳</span> Power Backup</div>
            <div class="amenity-item"><span>🛡</span> Guest Assistance</div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/floating-btn.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
