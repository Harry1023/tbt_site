<?php include "widgets/tradingview-tape.php"; ?>
<?php include "components/navigation.php"; ?>
 <!-- HEADER CSS START -->
  <header class="header header-main modal-blur-background">
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
                            <h2>The Most Complete Trading School</h2>
                            <p class="header-description">Discover
                                unparalleled expertise and support at the
                                forefront of trading education.</p>
                        </div>
                    </div>
                </div>
            </div>

       
      </div>
      <div class="gradient"></div>
      <div class="gradient2"></div>
    </div>
  </header>



<br><br><br><br>


    <section class="profit contact-back" id="from-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-contact-page">
                        <div class="content-form-contact-page mb-3">
                            <h1>Ready to trade your way to success?</h1>
                            <p>Transform your trading dreams into reality!
                                Reach out today and let's make profitable
                                trades your new norm.</p>
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
                                            <label for="City">City</label>
                                            <input type="text" name="city" id="City" class="form-control" />
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
                                            <label for="WhatsApp">WhatsApp Number</label>
                                            <input type="tel" name="whatsApp" id="WhatsApp" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="field">
                                            <label for="Courses">Courses</label>
                                            <select id="Courses" name="courses" class="form-select" required>
                                                <option disabled selected value>Select Courses</option>
                                                <option value="Strandard Forex">Strandard Forex</option>
                                                <option value="Forex Plus">Forex Plus</option>
                                                <option value="Forex Pro">Forex Pro</option>
                                                <option value="Free Demo">Free Demo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="field">
                                            <label for="Message">Message</label>
                                            <input type="text" name="message" id="Message" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="Form-button mt-4 text-center">
                                    <input type="submit" id="button" class="btn btn-primary px-4" value="Send Email" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="content-profit">
                        <ul>
                            <li>Address</li>
                            <li>- D-80 Block B North Nazimabad Karachi.
                            </li>

                        </ul>
                        <ul>
                            <li>Email Address</li>
                            <li>info@tradexpk.com</li>
                        </ul>
                        <ul>
                            <li>Phone Number</li>
                            <li><a href="tel:+923293030152">+92 329
                                    3030152</a></li>
                        </ul>
                        <div class="img-conatct-1">
                            <img src="./images/conatct-1.png" alt>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>

    <div class="marquee">
        <div class="track">
            <div class="content">Learn to Earn in Dollar <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
                Dollars <i class="fa-solid fa-dollar-sign"></i> </div>
        </div>
    </div>

    <!-- Footer Start -->

    <footer class="footer">
        <div class="footer-top-content">
            <h1>Reserve Your Seat Now</h1>
            <div class="btn-footer-top text-center">
                <a href="./contact">
                    <button class="btn">Free Demo</button>
                </a>
                <a href="./contact">
                    <button class="btn">Enroll Now</button>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-lg-5 pt-5">
                <div class="col-6">
                    <ul>
                        <li>
                            <h4>General</h4>
                        </li>
                        <li><a href="./about">About Us </a></li>
                        <li><a href="./community">Community</a></li>
                        <li><a href="./courses">Courses</a></li>
                        <li><a href="./achievement">Achievement</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li>
                            <h4>Community</h4>
                        </li>

                        <li><a href="./community">Join Discord <i class="fa-brands fa-discord"></i></a></li>
                        <li>
                            <a href="https://www.instagram.com/tradex_pk/">Instagram <i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/tradex.ae">Facebook <i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/tradex-pk1/?originalSubdomain=pk">Linkedin <i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li>
                            <h4>Courses</h4>
                        </li>
                        <li><a href="./courses">Standard Forex</a></li>
                        <li><a href="./courses">Forex +</a></li>
                        <li><a href="./courses">Forex Pro</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li>
                            <h4>Legal</h4>
                        </li>
                        <li><a href="./Refund">Refunds</a></li>
                        <li><a href="./Terms&Condition">Terms</a></li>
                        <li><a href="./privacypolicy.html">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <!-- Changed from col to col-md-12 -->
                    <div class="image-footer-logo">
                        <img src="./images/logo.png" alt />
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <div class="row pt-5">
                            <div class="col-md-12 col-xs-6 col-sm-6">
                                <ul>
                                    <li>
                                        <h4>Head Office</h4>
                                        </li>
                                        <li>
                                            <a href="https://maps.app.goo.gl/b7yQrQUWnREwcNnz9"><i
                                                                                        class="fa-solid fa-location-dot"></i> House
                                                No. D-80/01,Haziq
                                                Ul Khairi Street,Block B, North Nazimabad, Karachi</a>
                                        </li>
                                        
                                        
                                        <li><a href="tel:+923292126169"><i class="fa-solid fa-phone"></i> +92 329 2126169
                                            </a></li>
                                        <li><a href="tel:+923293030152"><i class="fa-solid fa-phone"></i> +92 329 3030152
                                            </a></li>
                                        <li><a href="tel:+923228204864"><i class="fa-solid fa-phone"></i> +92 322 8204864
                                            </a></li>
                                        <li>
                                            <a href="mail:info@Tradex.com.pk"><i class="fa-solid fa-envelope"></i>
                                                Info@tradexpk.com </a>
                                        </li>
                                        <li>
                                        
                                            <h4 class="pt-4">Branch Office
                                            </h4>
                                        </li>
                                        <li>
                                            <a href="https://maps.app.goo.gl/aWPxTqGG99HYDWnV8"><i
                                                                                        class="fa-solid fa-location-dot"></i>
                                                Building # 330, Block R, Johar Town, Lahore
                                            </a>
                                        </li>
                                        <li><a href="tel:+9204238970149"><i class="fa-solid fa-phone"></i> 042-38970149
                                            </a></li>
                                        <li><a href="tel:+923290668898"><i class="fa-solid fa-phone"></i>
                                                +92 329 0668898</a>
                                        </li>
                                        
                                        </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=1p5ai1iS5p2oStRnbGrZDAPHFDg1RMxw&ehbc=2E312F&noprof=1"
                        width="100%" height="510" style="border: 0" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
            <div class="row pt-5"></div>
            <!-- <hr />
            <div class="row">
                <div class="disclaimer-content">
                    <p>
                        <strong>Disclaimer:</strong> Our school, dedicated solely to
                        educational purposes, explicitly states that we do not engage in
                        any investment activities, offer promises of returns, or execute
                        trading on behalf of our students. The courses we provide are
                        designed solely for instructional purposes within an academic
                        environment and should not be construed as offering financial,
                        legal, or regulatory advice.
                    </p>
                    <p>
                        Forex trading, like any investment endeavor, carries inherent
                        risks. While our courses aim to educate and equip students with
                        knowledge and skills to navigate the forex market, we do not
                        guarantee any specific returns or profits. Any simulated trading
                        activities conducted during the course are purely for educational
                        purposes and may not accurately reflect real market performance.
                    </p>
                    <p>
                        Additionally, it is important to note that the reservation fee of
                        10,000 PKR for seat reservation is non-refundable. This fee is
                        charged to secure a seat in our courses and is non-negotiable. In
                        the event of a card loss or misplacement, students will be subject
                        to a fee of 500 PKR for the re-issuance of the student card.
                    </p>
                    <p>
                        By enrolling in our courses or accessing any materials provided by
                        our school, students acknowledge and accept the terms outlined in
                        this disclaimer. It is imperative that individuals carefully
                        consider their financial situation and risk tolerance before
                        engaging in any form of trading or investment activity
                    </p>
                </div>
            </div> -->
            <hr />
            <div class="row">
                <h5 class="text-white text-center">
                    TradeX • © 2025 • All Rights Reserved
                    <a href="https://rootsbmd.com/">Designed By Roots bmd </a>
                </h5>
            </div>
        </div>
    </footer>


    <!-- Footer End -->
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