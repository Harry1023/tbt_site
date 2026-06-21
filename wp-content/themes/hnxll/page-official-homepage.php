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
        <div class="row flex-column flex-md-row-reverse">
          <div class="col-lg-6 text-center">
            <div class="header-image">
              <img src="<?php echo $turl; ?>/assets/chrome-bull2.png" id="first-show" alt="" style="display: none;">
              <img src="<?php echo $turl; ?>/assets/chrome-bull2.png" id="second-show" alt="" style="">
            </div>
          </div>
          <div class="col-md-6 col-12 header-content">
            <div class="header-content1">
              <h1>Unlock Financial Freedom</h1>
              <p>
                 Trading Curriculums designed to strengthen your market analysis & execution discipline.
              </p>
              <div class="btns-header">
                <a href="#Frequency-question">
                  <button class="primary-btns1">Learn More</button>
                </a>
                <a href="./contact">
                  <button class="primary-btns2">Join Now</button>
                </a>
              </div>
<br><br>
              <!-- <p class="fineprint-header">This program is for educational purposes only and does not constitute financial advice. Past performance is not indicative of future results.</p> -->
            </div>
          </div>
        </div>
       
      </div>
      <div class="gradient"></div>
      <div class="gradient2"></div>
    </div>
  </header>





<!----- START COURSES  
<br><br><br><br> ----->
<?php // get_template_part("template-parts/programs"); ?>
<!----- END COURSE ------->

<br><br><br><br>
<section class="extra_text">

<div class="container text-white text-center">

<div class="row justify-content-center">
<h1 class="mb-4"><b>Beyond Traditional Trading Education</b></h1>
<h4 class="w-85">Our mentorship sessions go far beyond <span style="color: var(--col2);">ordinary classroom teaching</span>. We adopt a high‑level consulting approach, blending practical application with advanced strategies. This ensures that every student gains deeper knowledge, real‑world exposure, and the confidence to excel in professional trading.</h4>
</div>


       <div class="mt-4 btns-header justify-content-center">
                <a href="#Frequency-question">
                  <button class="primary-btns1">Learn More</button>
                </a>
                <a href="./contact">
                  <button class="primary-btns2">Join Now</button>
                </a>
              </div>

</div>

</section>



  <!-- Funded  Start-->

  <section class="funded">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="content-Funded2">
            <div class="content-Funded">
              <h1 data-aos="fade-up" data-aos-duration="1500">
                Master the Skill of Reading the Market by Mastering Your Trading
              </h1>
              <h1 data-aos="fade-up" data-aos-duration="1600"><span>Psychology</span></h1>
              <p data-aos="fade-up" data-aos-duration="1700">
                with training that will take your mindset from novice to a professional trader.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="content-Funded2 justify-content-center">
            <div class="img-funded">
              <img src="<?php echo $turl; ?>/assets/chrome-brain.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  
 <!---- Testimonials Start ---->

  <section id="reviews">
    <div class="container">
      <div class="gtco-testimonials">
        <div class="testimonal-heading">
          <h1>
            Still Unsure About Programs? <br>
            Hear What Our Students Say:
          </h1>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
          
          
          
          
          
            <div class="item">
            <div class="card">
              <div class="card-body">
                <div class="header-card-rating d-flex justify-content-between align-items-center">
                  <div class="header-card-heading">
                    <h1>5.0</h1>
                  </div>
                  <div class="head-card-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>

                <img src="<?php echo $turl; ?>/assets/line1.svg" alt="">
                <p>
                  I am incredibly impressed with the quality of education I
                  received. The course material is well-organized, easy to understand, and packed
                  with actionable strategies. What truly sets The Bulls Trading apart is
                  the personalized attention and feedback provided by the
                  instructors. They take the time to address each student's
                  questions and concerns, ensuring everyone progresses at
                  their own pace. I am grateful for the knowledge I've gained through The Bulls Trading course
                </p>
                <img src="<?php echo $turl; ?>/assets/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Ahsan Raza</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 020</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          
      </div>
    </div>
  </section>

  <!-- Testimonials End -->







<?php get_template_part("template-parts/marquee"); ?>
<?php get_template_part("template-parts/faqs"); ?>








<?php get_footer(); ?>
  <!-- Footer End -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script async="" src="https://www.youtube.com/iframe_api"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script>
    // Set the target date to 21st September 2024
    var target_date = new Date("September 21, 2024 00:00:00").getTime();
    var days, hours, minutes, seconds;

    var countdown = document.getElementById("tiles");

    getCountdown();
    setInterval(function () { getCountdown(); }, 1000);

    function getCountdown() {
      var current_date = new Date().getTime();
      var seconds_left = (target_date - current_date) / 1000;

      days = pad(parseInt(seconds_left / 86400));
      seconds_left = seconds_left % 86400;

      hours = pad(parseInt(seconds_left / 3600));
      seconds_left = seconds_left % 3600;

      minutes = pad(parseInt(seconds_left / 60));
      seconds = pad(parseInt(seconds_left % 60));

      countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>";
    }

    function pad(n) {
      return (n < 10 ? '0' : '') + n;
    }
  </script>

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

  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "cards",
      grabCursor: true,
      autoplay: true,
    });
  </script>

  <script>
    document.addEventListener("mousemove", function (event) {
      const ball = document.querySelector(".ball");
      const mouseX = event.clientX;
      const mouseY = event.clientY;
      ball.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
    });
  </script>

  <!-- Email -->
  <!-- 
  <script type="text/javascript">
    emailjs.init("SjHPKyDb0Ccjnyr5L");

  </script>
  <script>
    const btn = document.getElementById("button");

    document
      .getElementById("form")
      .addEventListener("submit", function (event) {
        event.preventDefault();

        btn.value = "Sending...";

        const serviceID = 'default_service';
        const templateID = 'template_ah3rsgo';

        emailjs
          .sendForm(serviceID, templateID, this)
          .then(() => {
            btn.value = "Send Email";
            Swal.fire({
              icon: "success",
              title: "Success!",
              text: "Email sent successfully!",
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
            });
          })
          .catch((err) => {
            btn.value = "Send Email";
            Swal.fire({
              icon: "error",
              title: "Error!",
              text: "Failed to send email: " + err,
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
            });
          });
      });
  </script> -->

  <!-- Buttons -->


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var signUpModal = new bootstrap.Modal(
        document.getElementById("signUpModal")
      );
      signUpModal.show();

      var myModalEl = document.getElementById("signUpModal");
      myModalEl.addEventListener("show.bs.modal", function () {
        document.body.classList.add("modal-open");
      });
      myModalEl.addEventListener("hide.bs.modal", function () {
        document.body.classList.remove("modal-open");
      });
    });
  </script>

  <script>
    // Function to generate a random number
    function getRand(max) {
      return Math.floor(Math.random() * (max + 1));
    }

    // Function to update the counter
    function updateCounter() {
      var ceilingLimit = parseInt(
        document.querySelector(".ceilingLimit").textContent.replace(/,/g, "")
      );
      var oldNum = parseInt(
        document.getElementById("visitsNum").textContent.replace(/,/g, "")
      );
      var newNum;

      // Decide whether to increase or decrease
      if (Math.random() < 0.5) {
        newNum = Math.max(oldNum - 5, 0); // Decrease by 5, but not below 0
      } else {
        newNum = Math.min(oldNum + 10, ceilingLimit); // Increase by 10, but not above ceilingLimit
      }

      // Update the counter text
      document.getElementById("visitsNum").textContent = formatNumber(newNum);

      // Change color based on increment/decrement
      var numcolor = newNum > oldNum ? "green" : "#fc0000";
      document.getElementById("visitsNum").style.color = numcolor;

      // Trigger a reflow to apply CSS transitions
      void document.getElementById("visitsNum").offsetWidth;
      document.getElementById("visitsNum").style.fontSize = "5em";

      // After transition, reset font size and color
      setTimeout(function () {
        document.getElementById("visitsNum").style.fontSize = "5em";
        document.getElementById("visitsNum").style.color = "black";
      }, 500);
    }

    // Function to format number with commas
    function formatNumber(number) {
      return number.toLocaleString();
    }

    // Initial update
    updateCounter();

    // Periodically update the counter
    setInterval(updateCounter, 1000);
  </script>

  <script>
    $(function () {
      // Owl Carousel
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: false,
        dots: false,
        responsive: {
          360: {
            items: 1,
            nav: false,
          },
          680: {
            items: 2,
            nav: false,
            loop: false,
          },
          992: {
            items: 3,
            nav: true,
          },
        },
      });
    });
  </script>

  <script>
    var swiper = new Swiper(".myCard-1", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        1400: {
          slidesPerView: 3, // For large screens (lg), display 3 slides
        },
        992: {
          slidesPerView: 2, // For medium-sized screens (md), display 2 slides
        },
        300: {
          slidesPerView: 1, // For small screens, display 1 slide
        },
      },
    });
  </script>

</body></html>