    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-5">

              <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>44,Block-b,Chayabithi Eastern Housing,Middle Basabo,Sabujbagh,Dhaka</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+88 01795825188</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>nasim.ahamed411@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->


                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.25957178368066!2d90.43404903110698!3d23.741917525451125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1736874888493!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

            <div class="col-lg-7">

                    <form action="{{ route('contact.send') }}" method="POST">

                    @csrf <!-- Include CSRF token for security -->
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Your Name</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject-field">
                        </div>
                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>

            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->
