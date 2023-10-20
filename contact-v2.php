<?php include_once "header.php" ;?> 
        
        <!-- Breadcrumb Area -->
        <div class="bixol-breadcrumb" data-background="assets/images/home1/contact.jpg">
            <span class="breadcrumb-object"><img src="assets/images/home1/slider-object.png" alt=""></span>
            <div class="container">
                <div class="breadcrumb-content">
                    <h1>Contact</h1>
                    <a href="index.html">Home <i class="fas fa-angle-double-right"></i></a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

       
       <!-- Contact Area V2 -->
       <section class="contact-v2 pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
                 <div style="padding-top: 40px !important;" class="col-lg-12">
                    <div class="contact-v2-right">
                <h5 style="text-align: center;">For all your inquiries, we're just a conversation away.</h5><br>
                        <h4 style="text-align: center;"> Contact us now and let's begin the journey of possibility.</h4>
                        <form action="contact.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="name-field">
                                        <label for="your-name">Name(required)</label>
                                        <input name="name"  type="text" id="your-name" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mail-field">
                                        <label for="email-address">Email address(required)</label>
                                        <input name="email" type="email" id="email-address" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Phone(optional)</label>
                                        <input name="mobile" type="tel" id="phone-number" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="subject-field">
                                        <label for="subject">Service(required)</label>
                                             <select name="service">
                                                <option value="Not Selected">SELECT</option>
                                                <option value="SOFT SERVICES">Banking</option>
                                                <option value="PLACEMENT SERVICES">Electricals</option>
                                                <option value="SECURITY SERVICES">Entertainment</option> 
                                                <option value="LABOUR SUPPLY">Manpower</option>
                                                <option value="OFFICE ADMINISTRATION">Civil</option>
                                                <option value="PROJECT BASED CLEANING">Social Work</option>
                                                <option value="PROPERTY MANAGEMENT & TECHNICAL SERVICE">Real Estate</option>
                                                <option value="GUESTHOUSE MANAGEMENT">Health Services</option>
                                                <option value="Transport">Transport</option>
                                                <option value="Agro">Agro</option>
                                                <option value="Event Management">Event Management</option>
                                                <option value="Hospitality">Hospitality</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="message-field">
                                        <label for="message">Your message</label>
                                        <textarea name="message" placeholder="Type message*" rows="5" id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button style="background-color: black;color:white;box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;" type="submit"><i class="fas fa-check-circle"></i>Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact V2 End -->


    
        <!-- Google Map -->
        <div class="bixol-footer-top">
            <iframe src="https://maps.app.goo.gl/gqtp6FtYnLgD16jj6" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Google Map -->

        <?php include_once "footer.php" ;?> 