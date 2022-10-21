<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Lobster&family=Montserrat:wght@400;600&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Finals</title>
</head>
<body>
    <main>
        <div class="nav-container">
            <nav>
                <h1 id="logo"><a href="#">Press</a></h1></a>
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Where to Buy</a></li>
                    <li><a class="order" href="#">Order</a></li>
                </ul>
            </nav>
        </div>
        <section class="home">
            <div class="showcase">
                <h2 data-aos="fade-right">HyperX Cloud II</h2>
                <i class="fas fa-tags" data-aos="fade-right" data-aos-delay="500"><p> BEST SALE $99.99</p></i>
                <span><p data-aos="fade-right" data-aos-delay="500">an ultra-comfortable gaming headset with amazing sound.</p></span>
                <a href="" class="learn" data-aos="fade-right" data-aos-delay="500">Learn More ></a>
                <img src="./images/headphones2.png" alt="headphones">
                <div class="info">
                    <h3 data-aos="fade-up" data-aos-offset="220">One <span>PRESS</span> for change</h3>
                    <p data-aos="fade-up" data-aos-delay="500" data-aos-offset="180">a digitally enhanced, noise-cancelling microphone <br>with automatic gain control functionality and echo<br> cancellation enabled through the USB sound card.</p>
                </div>
                <div class="title-features">
                <h2 data-aos="fade-down" data-aos-offset="220" data-aos-duration="800">Top Products</h2>
                <div id="button"><i class="fas fa-arrow-down" data-aos="fade-down" data-aos-offset="180" data-aos-duration="800"></i></div>
                </div>
            </div>
        </section>
        <section>
        <div class="features-container">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f0f0f0" fill-opacity="1" d="M0,192L24,170.7C48,149,96,107,144,112C192,117,240,171,288,208C336,245,384,267,432,277.3C480,288,528,288,576,288C624,288,672,288,720,277.3C768,267,816,245,864,218.7C912,192,960,160,1008,133.3C1056,107,1104,85,1152,85.3C1200,85,1248,107,1296,112C1344,117,1392,107,1416,101.3L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
        </svg>
            <div class="card">
                <div class="content">
                    <h2>Pulsefire Dart Wireless Gaming Mouse</h2>
                    <p>a gaming-grade wireless mouse with a reliable 2.4GHz RF connection that will make you wonder why you waited so long to cut the cord.</p>
                    <a href="#">Read More</a>
                </div>
            <img src="./images/mouse.png" alt="mouse">
            </div>

            <div class="card">
                <div class="content">
                    <h2>HyperX Alloy FPS Pro Mechanical Gaming Keyboard</h2>
                    <p>for the FPS gamer who wants a reliable, accurate tenkeyless (TKL) keyboard to maximize their desktop space.</p>
                    <a href="#">Read More</a>
                </div>
            <img src="./images/keyboard.png" alt="mouse">
            </div>

            <div class="card" id="third">
                <div class="content">
                    <h2>HyperX Alloy FPS RGB Mechanical Gaming Keyboard</h2>
                    <p>a great-looking, high-performance keyboard designed to make sure that both your skills and style are on full display.</p>
                    <a href="#">Read More</a>
                </div>
            <img src="./images/keyboard2.png" alt="mouse">
            </div>
        </div>
    </section>
    <section id="products">
        <div class="title-prod">
            <h2>Other Products</h2>
        </div>
    </section>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            
            duration: 1500
        });
    </script>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 100)
        })
    </script>
</body>
</html>