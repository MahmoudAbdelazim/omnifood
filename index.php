<?php
session_start();
error_reporting(1);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>

<body>
    <header>
        <?php include('nav.php') ?>
        <div class="hero-text-box">
            <h1>Goodbye junk food.<br> Hello super healthy meals.</h1>
            <a class="btn btn-orange js--scroll-to-plans" href="#"><i class="fas fa-cart-plus"></i> I'm hungry </a>
            <a class="btn btn-outline-orange js--scroll-to-start" href="#"> Show me more </a>
        </div>
    </header>

    <section class="section-features" id="section-features">
        <div class="row">
            <h2>Get food fast &mdash; not fast food</h2>
            <p class="long-copy">
                Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for
                cooking. So let
                us take care of that, we're really good at it, we promise!
            </p>
        </div>
        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="fas fa-infinity icon-big"></i>
                <h3>Up to 365 days/year</h3>
                <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage.
                    You can also choose
                    to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="fas fa-clock icon-big"></i>
                <h3>Ready in 20 minutes</h3>
                <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your
                    home. We work with
                    the best chefs in each town to ensure that you're 100% happy.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="fas fa-carrot icon-big"></i>
                <h3>100% organic</h3>
                <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or
                    antibiotics. Good for your
                    health, the environment, and it also tastes better!
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="fas fa-cart-plus icon-big"></i>
                <h3>Order anything</h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also
                    choose from our menu
                    containing over 100 delicious meals. It's up to you!
                </p>
            </div>
        </div>
    </section>
    <section class="section-meals" id="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/3.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/5.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/7.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/images/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>
    <section class="section-steps" id="section-steps">
        <div class="row">
            <h2>How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-col js--wp-2">
                <img src="resources/images/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen">
            </div>
            <div class="col span-1-of-2 steps-col js--wp-3">
                <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website.
                        Or you can even call us!</p>
                </div>
                <div class="works-step">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20
                        minutes. See you the next time!</p>
                </div>

                <div class="app-btns">
                    <a href="#" class="app-btn">
                        <img src="resources/images/download-app.svg" alt="App store button">
                    </a>
                    <a href="#" class="app-btn">
                        <img src="resources/images/download-app-android.png" alt="Play store button">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cities" id="section-cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>
        <div class="row js--wp-4">
            <div class="col span-1-of-4 box city-box">
                <img src="resources/images/lisbon-3.jpg" alt="Libson city">
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <i class="fas fa-user icon-small"></i>
                    1600+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="fas fa-utensils icon-small"></i>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <i class="fab fa-twitter icon-small"></i>
                    <a class="twitter-link" href="#">@omnifood_lx</a>
                </div>
            </div>
            <div class="col span-1-of-4 box city-box">
                <img src="resources/images/san-francisco.jpg" alt="San Francisco city">
                <h3>San Francisco</h3>
                <div class="city-feature">
                    <i class="fas fa-user icon-small"></i>
                    3700+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="fas fa-utensils icon-small"></i>
                    160+ top chefs
                </div>
                <div class="city-feature">
                    <i class="fab fa-twitter icon-small"></i>
                    <a href="#" class="twitter-link">@omnifood_sf</a>
                </div>
            </div>
            <div class="col span-1-of-4 box city-box">
                <img src="resources/images/berlin.jpg" alt="Berlin city">
                <h3>Berlin</h3>
                <div class="city-feature">
                    <i class="fas fa-user icon-small"></i>
                    2300+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="fas fa-utensils icon-small"></i>
                    110+ top chefs
                </div>
                <div class="city-feature">
                    <i class="fab fa-twitter icon-small"></i>
                    <a href="#" class="twitter-link">@omnifood_berlin</a>
                </div>
            </div>
            <div class="col span-1-of-4 box city-box">
                <img src="resources/images/london.jpg" alt="London city">
                <h3>London</h3>
                <div class="city-feature">
                    <i class="fas fa-user icon-small"></i>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="fas fa-utensils icon-small"></i>
                    50+ top chefs
                </div>
                <div class="city-feature">
                    <i class="fab fa-twitter icon-small"></i>
                    <a href="#" class="twitter-link">@omnifood_london</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials" id="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <i class="fas fa-quote-left"></i>
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so
                    Omnifood is a
                    life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    <cite><img src="resources/images/customer-1.jpg" alt="Alberto Duncan image"> Alberto Duncan</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <i class="fas fa-quote-left"></i>
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food
                    delivery here in
                    Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                    <cite><img src="resources/images/customer-2.jpg" alt="Joana Silva image"> Joana Silva</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <i class="fas fa-quote-left"></i>
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and
                    ended up with
                    Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                    <cite><img src="resources/images/customer-3.jpg" alt="Milton Chapman image"> Milton Chapman</cite>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="section-plans" id="section-plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3 js--wp-5">
                <div class="plan-box">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">
                            $0 <span class="per-month"> / month</span>
                        </p>
                        <p class="plan-price-meal">
                            That's only $0 per meal
                        </p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check icon-small"></i> 1 meal every day</li>
                            <li><i class="fas fa-check icon-small"></i> Order 24/7</li>
                            <li><i class="fas fa-check icon-small"></i> Access to newest creations</li>
                            <li><i class="fas fa-check icon-small"></i> Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="signup.php" class="signup-btn btn btn-orange">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">
                            $0 <span class="per-month"> / month</span>
                        </p>
                        <p class="plan-price-meal">
                            That's only $0 per meal
                        </p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check icon-small"></i> 1 meal 10 days/month</li>
                            <li><i class="fas fa-check icon-small"></i> Order 24/7</li>
                            <li><i class="fas fa-check icon-small"></i> Access to newest creations</li>
                            <li><i class="fas fa-check icon-small"></i> Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="signup.php" class="signup-btn btn btn-outline-orange">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">
                            $0 <span class="per-meal"> / meal</span>
                        </p>
                        <p class="plan-price-meal">
                            <br>
                        </p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check icon-small"></i> 1 meal</li>
                            <li><i class="fas fa-check icon-small"></i> Order from 8 am to 12 pm</li>
                            <li><i class="fas fa-times icon-small"></i></li>
                            <li><i class="fas fa-check icon-small"></i> Free delivery</li>
                        </ul>
                    </div>
                    <div>
                        <a href="signup.php" class="signup-btn btn btn-outline-orange">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-form" id="section-form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form action="#" method="POST" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="news">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" checked> Yes, please.
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="messege">Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="messege" id="messege" placeholder="Your messege"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="messege">&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="submit">
                    </div>
                </div>

            </form>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2019 Omnifood. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
</body>

</html>