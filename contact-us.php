<?php require "header.php" ?>

  <section id="contact" class="contact section" style="padding-top: 64px;">
      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Contact</h2>
        <p class="para-graph">Have a question, need support, or want to book a repair? Get in touch with Appliance Cure today — our friendly experts are ready to help with all your tech and appliance service needs.</p>
        
      </div><!-- End Section Title -->
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>360 Central Ave, St. Petersburg, FL 33701</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>contact@appliancia.com</p>
                </div>
              </div><!-- End Info Item -->
                <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-globe flex-shrink-0"></i>
                <div>
                  <h3>Website</h3>
                  <p>www.appliancia.com</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h3>Open Hours:</h3>
                  <p>Mon-Fri: 9:30AM - 6:30PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="send-mail.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade" data-aos-delay="100" id="contactForm">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>
                <div class="col-md-6">
                  <input type="tel" class="form-control" name="phone" placeholder="Your Mobile no." required="">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">Send Message</button>
                </div>
                <div class="col-lg-12">
                  <div id="message" class="message"></div>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section>

<?php require "footer.php" ?>