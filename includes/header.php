<?php
require_once __DIR__ . '/../config/database.php';

$navItems = [
    ['title' => 'Home', 'url' => '/index.php'],
    ['title' => 'About Us', 'url' => '/about.php'],
    ['title' => 'Wedding Venues', 'url' => '/venues.php'],
    ['title' => 'Our Services', 'url' => '/contact.php'],
    ['title' => 'Gallery', 'url' => '/index.php#gallery'],
    ['title' => 'Why Jim Corbett', 'url' => '/about.php#expertise'],
    ['title' => 'Contact Us', 'url' => '/contact.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp Adda | Jim Corbett Wedding Planner</title>
    <meta name="description" content="Destination wedding planner in Jim Corbett. Beautiful venues, expert planning and memorable wedding experiences.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="topbar">
        <div class="container topbar-inner">
            <span>A Registered Travel &amp; Event Company with Government of India</span>
            <span>15 Years of Experience</span>
            <span>Trusted by Many Families</span>
            <span>Plan with Experts</span>
        </div>
    </div>

    <header class="site-header">
        <div class="container nav-wrap">
            <a href="/index.php" class="brand" aria-label="Camp Adda home">
                <div class="brand-mark">A</div>
                <div class="brand-text">
                    <span class="brand-title">Camp Adda</span>
                    <span class="brand-subtitle">Explore • Experience • Celebrate</span>
                </div>
            </a>

            <nav class="main-nav">
                <?php foreach ($navItems as $nav): ?>
                    <a href="<?php echo $nav['url']; ?>"><?php echo $nav['title']; ?></a>
                <?php endforeach; ?>
            </nav>

            <a href="/contact.php" class="btn btn-primary nav-btn">Plan Your Wedding</a>
        </div>
    </header>

    <?php if (isset($_SESSION['form_success'])): ?>
        <div class="site-alert success"><?php echo htmlspecialchars($_SESSION['form_success']); ?></div>
        <?php unset($_SESSION['form_success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['form_error'])): ?>
        <div class="site-alert error"><?php echo htmlspecialchars($_SESSION['form_error']); ?></div>
        <?php unset($_SESSION['form_error']); ?>
    <?php endif; ?>
