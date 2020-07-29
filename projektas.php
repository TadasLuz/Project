<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektas</title>
    <script src="https://kit.fontawesome.com/55d5cdeba0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="container flex-container">
            <div class="notebook">
                <h1>Notebook</h1>
            </div>
            <nav class="main-nav">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul class="flex-container">
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </nav>
        </div>
        <section class="ideas">
            <div class="container">
                <h2>Best Ideas Start On Paper</h2>
                <p>Revolutionary notebook with eco-friendly paper, advanced surface technology and digital sharing integration.</p>
                <a class="pulse-animation" href="#pricing">Order Now</a>
            </div>
        </section>
    </header>
    <section class="prototype">
        <div class="container">
            <h2>Start prototyping your next project</h2>
            <p>Terry Richardson cardigan whatever gentrify Tumblr, gluten-free jean shorts cray Schlitz selvage DIY sustainable Helvetica sriracha. Banh mi ethical, put a bird on it VHS irony bicycle rights slow-carb literally retro skateboard ugh 90's Helvetica hashtag. Next level beard keffiyeh cornhole pork belly, slow-carb Schlitz.</p>
            <i class="fas fa-pencil-alt"></i>
        </div>
    </section>
    <section class="browser">
        <div class="container">
            <h2>Works in any browser</h2>
            <p>Revolutionary notebook with eco-friendly paper, advanced surface technology and digital sharing integration.</p>
            <div class="slideshow flex-container">
                <div class="arrow-left" onclick="plusDivs(-1)">
                    &#11164;
                </div>
                <img class="slide" src="Iskarpyta/images/opera1200.jpg" alt="opera browser">
                <img class="slide" src="Iskarpyta/images/chrome1200.jpg" alt="chrome browser">
                <img class="slide" src="Iskarpyta/images/safari1200.jpg" alt="apple browser">
                <img class="slide" src="Iskarpyta/images/firefox1200.jpg" alt="firefox browser">
                <img class="slide" src="Iskarpyta/images/edge1200.jpg" alt="microsoft edge browser">
                <div class="arrow-right" onclick="plusDivs(1)">
                    &#11166;
                </div>
            </div>
        </div>
    </section>
    <section id="pricing">
        <div class="container">
            <div class="problems">
                <h3>Flexible pricing plans to fulfill your needs and solve your problems</h3>
                <p>Revolutionary notebook with eco-friendly paper, advanced surface technology and digital sharing integration.</p>
            </div>
            <div class="boxes">
                <div class="box1">
                    <h3>Forever Free</h3>
                    <h4>$0/month</h4>
                    <p>1 Notebook<br><br>3 Users<br><br>100 Shares</p>
                    <a href="#">Sign Up</a>
                </div>
                <div class="box2">
                    <h3>Professional</h3>
                    <h5>Most popular</h5>
                    <h4>$20/month</h4>
                    <p>20 Notebooks<br><br>100 Users<br><br>Unlimited Shares</p>
                    <a href="#">Buy Now</a>
                </div>
                <div class="box3">
                    <h3>Enterprice</h3>
                    <h4>$100/month</h4>
                    <p>100 Notebooks<br><br>Unlimited Users<br><br>Unlimited Shares</p>
                    <a href="#">Buy Now</a>
                </div>
            </div>
            <div class="related">
                <p>If you have got any questions related to pricing please get in touch with us using the form below.</p>
            </div>
        </div>
    </section>
    <section class="forma">
        <div class="container">
            <div class="section-heading">
                <h2>Get in Touch</h2>
                <p>Got any questions? Feel free to get in touch with us. We would love to hear from you.</p>
            </div>
            <div class="forma2">
                <form class="contact-form" action="projektas.php" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" rows="4" placeholder="Message" required></textarea>
                    <input type="submit" class="btn btn-form" name="submit" value="Send">
                </form>
            </div>
            <div class="social">
                <ul class="flex-container">
                    <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
            <a href="#" class="scrollToTop"><i class="far fa-arrow-alt-circle-up"></i></a>
        </div>
        <?php
            if(isset($_POST['submit'])) {
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $message = trim($_POST['message']);

                if(!empty($name) && !empty($email) && !empty($message)) {
                   // echo 'Name : ' . $name . '<br>';
                   // echo 'Email : ' . $email . '<br>';
                   // echo 'Message : ' . $message . '<br>';
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $from = "$email";
                        $to = "tadasluzanskis@gmail.com";
                        $subject = "New message";
                        $autorius = 'From: ' . $name . ', ' . $email;
                        $zinute = htmlspecialchars($message);
                        
                       // mail($to, $subject, $autorius, $zinute);
                        echo "<script>alert('Thank you for your message.');</script>";
                        include('db.php');
                    }
                }
            }
        ?>
    </section>
    <footer>
        <div class="container flex-container">
            <div class="copyright">
                <p><?php echo date('Y'); ?> &copy; Despreneur. All rights reserved. Crafted in London.</p>
            </div>
            <nav class="bottom-nav">
                <ul class="flex-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    
    <script>
        let slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
            let i;
            let x = document.getElementsByClassName("slide");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }
    </script>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 200){
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
            $('.scrollToTop').click(function(){
                $('html,body').animate({scrollTop: 0}, 2000)
            })
    });
    </script>
</body>
</html>