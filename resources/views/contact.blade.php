<?php
  include_once '../routes/assets/top.php';
?>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Me</h2>
            <h3 class="section-subheading text-muted">if u need</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>

          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">

                <a href="https://twitter.com/M_RifkiC">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="https://www.facebook.com/rifki.chairil.94">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/muhammad-rifki-934274152/">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>

                <li class="list-inline-item">
                <a href="https://github.com/rfkchrl">
                  <i class="fa fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
<?php
  include_once '../routes/assets/button.php';

?>