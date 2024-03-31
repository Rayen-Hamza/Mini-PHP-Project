<?php 
$title="Carya.tn";
$class=""
?>

<?php ob_start(); ?>


    <section id="hero">
        <div class="container">
            <h2>Find Your Perfect Ride</h2>
            <p>Explore our wide range of rental cars at affordable prices.
            Discover our extensive selection of rental cars, 
            each one offered at competitive prices.
             Whether you're looking for a compact car for city driving, 
             a comfortable sedan for business trips, 
             or a spacious SUV for family vacations, 
             we have the perfect vehicle to meet your needs and fit your budget.
            </p>
        </div>
    </section>
    <section id="featured-cars">
        <div class="container">
            <div class="car-card">
                <a href="/Mini-PHP-Project/carya.tn/Templates/login.php" class="btn">Rent Now</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Rent-a-Car. All rights reserved.</p>
        </div>
    </footer>



<?php $content = ob_get_clean();?>

<?php require('layout.php')?>