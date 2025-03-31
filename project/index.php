<!DOCTYPE html>
<html lang="en">
<!--
    Notes: 
        -we have to use php, for the header and footer nav, so we need to change the name of the page to 
            index.php so you can open and close ( <?php  ?> ) around it. 

        -I could do it but I need your "approval"

        -I will post an example of the form so you can adapt and put on here with the necessary fields


        <form method="post" action="./backend/add.php">
            <fieldset>
                <legend>Personal Information</legend>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Type first name">
                </div>
                <div>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname"placeholder="Type last name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your Email"></p>
                </div>
                <div>
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required pattern="^[0-9]{10}$">
                </div>
            </fieldset>
            <fieldset>
                <legend>Hobbies</legend>
                <div>
                    <label for="hobbies">Enter your hobbies:</label>
                    <textarea name="hobbies" id="hobbies" placeholder="Write your hobbies here" required></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Available Days</legend>
                <div>
                    <label for="monday">
                        <input type="checkbox" id="monday" name="days[]" value="Monday"> Monday
                    </label>
                    <div id="monday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="monday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="monday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="monday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="tuesday">
                        <input type="checkbox" id="tuesday" name="days[]" value="Tuesday"> Tuesday
                    </label>
                    <div id="tuesday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="tuesday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="tuesday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="tuesday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="wednesday">
                        <input type="checkbox" id="wednesday" name="days[]" value="Wednesday"> Wednesday
                    </label>
                    <div id="wednesday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="wednesday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="wednesday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="wednesday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="thursday">
                        <input type="checkbox" id="thursday" name="days[]" value="Thursday"> Thursday
                    </label>
                    <div id="thursday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="thursday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="thursday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="thursday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="friday">
                        <input type="checkbox" id="friday" name="days[]" value="Friday"> Friday
                    </label>
                    <div id="friday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="friday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="friday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="friday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="saturday">
                        <input type="checkbox" id="saturday" name="days[]" value="Saturday"> Saturday
                    </label>
                    <div id="saturday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="saturday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="saturday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="saturday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
                <div>
                    <label for="sunday">
                        <input type="checkbox" id="sunday" name="days[]" value="Sunday"> Sunday
                    </label>
                    <div id="sunday-time" class="time-options" style="display: none;">
                        <label><input type="checkbox" name="sunday-time[]" value="Morning"> Morning</label>
                        <label><input type="checkbox" name="sunday-time[]" value="Afternoon"> Afternoon</label>
                        <label><input type="checkbox" name="sunday-time[]" value="Evening"> Evening</label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter a username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
            </fieldset>
            <div class="button-container">
                <input type="submit" name="Submit" value="Add">
                <input type="reset" value="Clear">
            </div>
            
        </form>

        - Sorry, I know it's big but it's just to have an example of almost everything. We need to change
            multiple things as the availability, because we will have to put a precise day and time accordingly
            to the classes so for example: after you make the schedule, if the first option that the user needs 
            to make it the type of the class, and he/she chooses yoga, then the next line will only appear
            the available yoga classes, etc. Also we can make appear another line if the user wants to have 
            multiple preferences

        -The path of the form will be:
            index.html -> backend/add.php -> (add needs crud and validate) -> crud needs database
            this part is to retrive information from the user and upload on database

        -The path of the login will be:
            index.html -> backend/login.php -> login needs crud (read part) -> crud needs database
            then we have a userpage.php (or html)
        
        -front end part will be pages as: index.php, userpage.php (or similar), maybe schedule and 
            gym pictures page?

-->
<head>
    <!--BASIC METADATA-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the webpage for Blue Rock Yoga Studio.">
    <meta name="keywords" content="yoga, excersise, webpage">
    <title>Blue Rock Yoga Studio</title>
    <!--LINK SHEETS AND ICONS-->
    <link rel="stylesheet" href="../css/styles.css"> <!-- CSS -->
    <link rel="icon" href="../images/favicon (2).png"> <!-- ICON -->
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="./img/logo-name.jpg" alt="logo"></a>
        </div>
        <?php
            include 'navs/header-nav.php';
        ?>
    </header>

    <main>
        <!-- Intro -->
        <section class="Intro">
            <h1>Hey There,</h1>
            <p>Welcome to Blue Rock Yoga</p>
            <p>Rooted In Strength Through Yoga</p>
        </section>

        <!-- Who We Are -->
        <section id="who-we-are">
            <h2>Who We Are</h2>
            <p>Blue Rock Yoga is a studio that is dedicated to fostering your physical and mental well-being. We offer a variety of yoga classes catered to different levels of comfortability and we offer flexible timings at affordable prices. Our experienced instructors are dedicated to helping you find your inner peace, improve flexibility, and achieve overall well-being.</p>
        </section>

        <!-- Membership Info  -->
        <section id="membership-info">
            <h2>Join Our Membership Program</h2>
            <p>Become a member at Blue Rock Yoga and enjoy access to the sauna, creative workshops, and special events. Whether you prefer weekly sessions or more flexible drop-in options, we have a membership plan that fits your schedule and needs.</p>
            <ul>
                <li><strong>Basic Membership:</strong> Access to 3 classes per week.</li>
                <li><strong>Premium Membership:</strong> Unlimited access to all classes and workshops.</li>
                <li><strong>Drop-in Classes:</strong> Pay per class for a more flexible option.</li>
            </ul>
        </section>

        <!-- Testimonials Section -->
        <section id="reviews">
            <h2>What Our Members Say</h2>
            <blockquote>
                <p>"Blue Rock Yoga has completely transformed my life. The instructors are so supportive, and the classes are always refreshing and challenging. I leave every class feeling rejuvenated!"</p>
                <footer>- Emily R.</footer>
            </blockquote>
            <blockquote>
                <p>"I love the peaceful atmosphere at Blue Rock Yoga. It’s the perfect place to relax, clear my mind, and focus on my health."</p>
                <footer>- Mark L.</footer>
            </blockquote>
            <blockquote>
                <p>"I was hesitant to purchase the basic membership plan, but I am so glad I did. It's allowed me to never worry about classes and now Im able to fully enjoy every session. Worth every penny!"</p>
                <footer>- Anika F.</footer>
            </blockquote>
            <blockquote>
                <p>"I've tried many studio's but Blue Rock is my all time favorite. The instructors are incredible teachers and the aesthetics of the studio are just beautiful!"</p>
                <footer>- Denise E.</footer>
            </blockquote>
            <blockquote>
                <p>"I was given a gift card by a friend for my birthday for one free class and sauna use. I've never tried yoga prior to my first session at Blue Rock, but I was amazed! The sauna was amazing and the class was reviving! Will be coming again!"</p>
            <footer>- Sam K.</footer>
            </blockquote>
            <blockquote>
                <p>"I suffered an injury about a month ago and needed to find a way to stay active without pushing limits. Blue Rocks classes for injury recovery are incredible and so affordable. Thank you Blue Rock.</p>
                <footer>- Al J.</footer>
            </blockquote>
        </section>
    </main>
    <footer>
        <div class="logo">
            <a href="index.php"><img src="./img/logo.png" alt="logo"></a>
        </div>
        <?php
            include 'navs/footer-nav.php';
        ?>
    </footer>
</body>
</html>
