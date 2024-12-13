<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yumizen H500</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <!-- First Section: Hero -->
        <section class="Hero">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
                </a>
            </div>
            <div class="contact-numbers">
                <div class="contact-item">
                    <img src="<?php echo e(asset('images/Phone.svg')); ?>" alt="Logo 1">
                    <a href=""><span>+91-99954XXXXX</span></a>
                </div>
                <div class="contact-item">
                    <img src="<?php echo e(asset('images/WhatsApp.svg')); ?>" alt="Logo 2">
                    <a href=""><span>+91-99954XXXXX</span></a>
                </div>
            </div>
            <div class="content">
                <h1>Yumizen<br>H500</h1>
                <p>Cost Effective Hematology Solution<br>For Small Mid-Size Laboratories.</p>
                <button id="btn">Contact us <img src="<?php echo e(asset('images/Vector.png')); ?>" alt=""></button>
            </div>
            <div class="hero-image">
                <img src="<?php echo e(asset('images/product.png')); ?>" alt="">
            </div>
            <div class="contact-icon-container">
                <div id="contact-icon">
                    <img src="/images/queries.svg" alt="Contact Icon">
                </div>
                <div id="contact-button">
                    <span>Contact Us</span>
                </div>
            </div>
        </section>
    
        <!-- Application Section -->
        <section class="Applications">
            <div class="heading">
                <div class="line-left"></div>
                <h2>Applications</h2>
                <div class="line-right"></div>
            </div>
            
            <div class="cards-container">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card 1.png')); ?>" alt="Card 1">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back1.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
        
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card  2.png')); ?>" alt="Card 2">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back2.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
        
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card 3.png')); ?>" alt="Card 3">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back3.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
        
                <!-- Card 4 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card 4.png')); ?>" alt="Card 4">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back4.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
        
                <!-- Card 5 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card 5.png')); ?>" alt="Card 5">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back5.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
        
                <!-- Card 6 -->
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="<?php echo e(asset('images/Card 6.png')); ?>" alt="Card 6">
                        </div>
                        <div class="card-back">
                            <img src="<?php echo e(asset('images/back6.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Specifications Section -->
        <section class="specifications">
            <div class="heading">
                <hr class="line-left-specs">
                <div class="specs"><p>Specifications</p></div>
                <hr class="line-right-specs">
            </div>
            <div class="spec-details">
                <div class="key-terms">
                    <p>Weight</p>
                    <p>Dimensions</p>
                    <p>Throughput</p>
                    <p>Data Management</p>
                    <p>Parameters (37)</p>
                    <p id="extra">Operating Sample Mode</p>
                </div>
                <div class="values">
                    <p>49 lbs / 22 kg</p>
                    <p>19 x 16 x 19 in / 48 x 40 x 48 cm (HxWxD)</p>
                    <p>60 tests/hour</p>
                    <p>Yumicare Remote Service</p>
                    <p>
                        WBC, NEU# & NEU%, LYM# & LYM%, MON# & MON%, EOS# & EOS%, BAS# & BAS%, LIC# & LIC%, 
                        IML#, IML%, IMM#, IMM%, IMG#, IMG%, ALY#, .ALY%, RBC, MIC%, MAC%, HGB, HCT, MCV, MCH, 
                        MCHC, RDW-CV, RDW-SD, PLT, MPV, PCT, PDW, P-LCC, P-LCR
                    </p>
                    <p>Open Tube (OT), Closed Tube (CT)</p>
                </div>
            </div>
        </section>                
        
        <!-- Contact us Section -->
        <section id="contact-us">
            <div class="heading">
                <hr class="line-left" />
                <h2>Contact Us</h2>
                <hr class="line-right" />
            </div>
            <form class="contact-form">
                <div class="form-left">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required />
        
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
        
                    <label for="phone">Phone No.</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
        
                    <div class="checkbox-container">
                        <input type="checkbox" id="privacy" name="privacy" required />
                        <label for="privacy">I have read and agree to the HORIBA privacy notice</label>
                    </div>
                </div>
                <div class="form-right">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="Enter your city" required />
        
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
        
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        
            <!-- Footer Section -->
            <footer class="footer">
                <div class="footer-content">
                    <h3>FOLLOW US</h3>
                    <div class="social-icons">
                        <img src="<?php echo e(asset('images/facebook.png')); ?>" alt="">
                        <img src="<?php echo e(asset('images/twitter.png')); ?>" alt="">
                        <img src="<?php echo e(asset('images/linkedin-in.png')); ?>" alt="">
                        <img src="<?php echo e(asset('images/instagram.png')); ?>" alt="">
                    </div>
                    <hr class="footer-line" />
                    <div class="footer-links">
                        <a href="https://www.horiba.com/ind/legal/terms-and-conditions/">Terms and Conditions</a>
                        <a href="https://www.horiba.com/ind/legal/privacy-notice/">Privacy Note</a>
                        <a href="#">Cookies</a>
                        <a href="https://www.horiba.com/ind/">HORIBA website</a>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\risha\yumizen_h500\resources\views/index.blade.php ENDPATH**/ ?>