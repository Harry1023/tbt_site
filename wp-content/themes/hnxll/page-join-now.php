<?php include "widgets/tradingview-tape.php"; ?>
<?php include "components/navigation.php"; ?>
 <!-- HEADER CSS START -->
  <header class="header header-contact header-main modal-blur-background">
    <div class="header-bottom">
      <div class="container">
        <div class="row align-items-center nav-full">
          <div class="col-lg-2 col-md-12 col-sm-12">
            <div class="navbar-respon d-flex justify-content-center">
              <div class="hamburger d-block d-lg-none"><br><br>
                <div class="hamburger-container">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="header-logo">
                <a href="/">
                  <img src="<?php echo $image[0]; ?>" alt="">
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-10 d-none d-lg-block">
            <div class="bottom-row">
              <?php navigationCall('desktop'); ?>
            </div>
          </div>
        </div>
  

           <div class="row">
                    <div class="col-md-12 header-content-about text-start">
                        <div class="header-content-about1" data-aos="fade-up" data-aos-duration="1500">
                            <p class="header-content-about-btn">Contact</p>
                            <h2>Everything You Need to Become a Professional Trader</h2>
                            <p class="header-description">Access industry-leading training and support to help you navigate the markets with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>

       
      </div>
      <div class="gradient"></div>
      <div class="gradient2"></div>
    </div>
  </header>


<?php get_template_part("template-parts/marquee"); ?>
<br><br><br><br>


    <section class="profit contact-back" id="from-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-contact-page">
                        <div class="content-form-contact-page mb-3">
                            <h1>Ready to unlock success?</h1>
                            <p>Take the next step in your trading journey with expert guidance, structured education, and the skills needed to trade with confidence.</p>
                        </div>
                        <div class="form w-100">
                            <form id="form" method="post" action="https://api.rootsbmd.com/public/SaveContactForm">
                                <input type="hidden" name="email_to" value="admin@tradexpk.com" />
                                <input type="hidden" name="subject" value="Enquiry Email | Trade X PK" />
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="field">
                                            <label for="Name">Name</label>
                                            <input type="text" name="name" id="Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field">
                                            <label for="Email">Email</label>
                                            <input type="email" name="email" id="Email" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field">
                                            <label for="Contact">Contact Number</label>
                                            <input type="text" name="contact" id="Contact" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field">
                                            <label for="Courses">Courses</label>
                                            <select id="Courses" name="courses" class="form-select" required>
                                                <option disabled selected value>Select Program</option>
                                                <option value="Strandard Forex">Foundation Track</option>
                                                <option value="Forex Plus">Growth Track</option>
                                                <option value="Forex Pro">Master Track</option>
                                                <option value="Free Demo">Elite 1-1 Mentorship</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="Form-button mt-4 text-center">
                                    <input type="submit" id="button" class="btn btn-primary px-4" value="Join Now" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="content-profit">
                   
                        <ul>
                            <li>Email Address</li>
                            <li>info@thebullstrading.com</li>
                        </ul>
                        <ul>
                            <li>Phone Number</li>
                            <li>+92 330 6886537</li>
                        </ul>
                  

                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>


<?php get_template_part("template-parts/marquee"); ?>

<?php get_footer(); ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
    <script>
        $(document).ready(function () {
            $("#form").on("submit", function (e) {
                e.preventDefault(); // prevent default form submit
                var form = $(this);
                var formData = form.serialize();

                // Disable button while sending
                $("#button").prop("disabled", true).val("Sending...");

                $.ajax({
                    url: form.attr("action"),
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        Swal.fire({
                            icon: "success",
                            title: "Message Sent!",
                            text: "Your enquiry has been successfully sent.",
                            confirmButtonColor: "#3085d6",
                        });
                        form.trigger("reset");
                    },
                    error: function (xhr, status, error) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops!",
                            text: "Something went wrong. Please try again later.",
                            confirmButtonColor: "#d33",
                        });
                    },
                    complete: function () {
                        $("#button").prop("disabled", false).val("Send Email");
                    },
                });
            });
        });
    </script>
</body>
<script src="./App.js"></script>

</html>