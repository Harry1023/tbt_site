<?php include "widgets/tradingview-tape.php"; ?>
<?php include "components/navigation.php"; ?>
 <!-- HEADER CSS START -->

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
                  <img width="220px" src="<?php echo $image[0]; ?>" alt="">
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
  


            </div>

       
      </div>

    </div>


<br><br><br><br>
<section>

<div class="container">

<div class="row text-white text-center mb-5"><h1>Our Management</h1><span style="background-image: url(<?php echo $turl; ?>/assets/brush.svg);"></span></div>
<br><br>
<div class="row row-gap-5 text-white text-center mb-5 justify-content-between text-md-start">

<div class="col-md-4"><h4>Umar Khalid Khan</h4><p>CEO, Founder</p><h6>Business Management | Compliance Auditor</h6><p>Over 2 Decades of Corporate Exposure</p></div>
<div class="col-md-4"><h4>Imran Ahmed</h4><p>Program Specialist</p><h6>BS Engineering | CMT | ACII | MBA (Finance)</h6><p>Over 2 Decades of Corporate Exposure</p></div>
<div class="col-md-4"><h4>Sohaib Aijaz</h4><p>Program Consultant/ Strategist</p><p>Decade+ of Financial Industry Experience</p><p>Fellow Member of Chartered Certified Accountant (FCCA)</p><p>CFA Level II Qualified</p></div>
<div class="col-md-4"><h4>Sarib Aijaz</h4><p>Program Consultant/ Strategist</p><p>Decade+ of Financial Industry Experience</p><p>Member ACCA, UK</p><p>CFA Level I (Cont.)</p></div>
<div class="col-md-4"><h4>Mateen Muhammad Khan (ACMA)</h4><p>Program Strategist</p><p>Over 2 Decades of Exposure</p><p>Chartered Management Accountant</p><p>Associate Member of the Institute of Cost & Management Accountants of Pakistan (ICMAP)</p></div>
<div class="col-md-4"><h4>Syed Muhammad Faisal</h4><p>Financial Literacy Coach/ Strategist</p><p>Over 2 Decades of Exposure</p><p>Certified Financial Market Regulations</p><p>Certified Commodity Broker</p><p>Certified PSX Sales Agent</p><p>M.Phil Management Sciences</p></div>


</div>


</div>



</section>
<br><br><br><br>
 

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