<?php $title = "Contact Us || Xyz"; ?>
<?php include('header.php'); ?>
    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Contact</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Contacts -->
    <section class="pt-120 pb-120">
        <div class="container">
          
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                                <p>Sed ut perspiciatis unde omnis natus vitae dicta sunt explicabo.</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+1234567890">(+1) 234-567-890</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:serviney.demo@fakemail.com">serviney.demo@fakemail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>784/A Zirtoli Bazar, Begumgonj, Noakhali-3800, BD</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Get In Touch</h3>
                        <div class="form-response"></div>
                        <form method="post" action="http://themelooks.net/demo/serviney/html/preview/sendmail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="theme-input-style" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" name="email" class="theme-input-style" placeholder="E-mail address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" class="theme-input-style" placeholder="Telephone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="subject" class="theme-input-style" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea name="message" class="theme-input-style" placeholder="Write your message" required></textarea>
                            </div>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contacts -->

  <?php 
  include('above-footer.php');
  include('footer.php'); ?>