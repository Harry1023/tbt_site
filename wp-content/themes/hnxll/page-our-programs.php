<?php include "widgets/tradingview-tape.php"; ?>
<?php include "components/navigation.php"; ?>

  <header class="header header-main modal-blur-background">
    <div class="header-bottom">
      <div class="container">
        <div class="row align-items-center nav-full">
          <div class="col-lg-2 col-md-12 col-sm-12">
            <div class="navbar-respon d-flex justify-content-center">
              <div class="hamburger d-block d-lg-none">
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
              <img src="<?php echo $turl; ?>/assets/chrome-bear.png" id="first-show" alt="" style="display: none;">
              <img src="<?php echo $turl; ?>/assets/chrome-bear.png" id="second-show" alt="" style="">
            </div>
          </div>
          <div class="col-md-6 col-12 header-content">
            <div class="header-content1">
              <h1>OUR PROGRAMS</h1>

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

<br><br><br><br>


<!----- START COURSES  ----->
<br><br><br><br>
<?php get_template_part("template-parts/programs"); ?>
<!----- END COURSE ------->




    <section class="platform">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-6">
                    <p class="header-content-about-btn">AFFILIATIONS</p>
                    <h1>Our Affiliations</h1>
                </div>
                <div class="col-lg-6 d-flex align-items-end">
                    <p>Our programs Affiliated and Endorsed by Trade Testing Board, Government of Sindh (Pakistan). <br>
                  <br>(Sindh Technical Education & Vocational Training Authority STEVTA)</p>
                </div>
            </div>

            <div class="row mt-5">
      
            </div>



        <!----    <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card">
                        <h1>Tradex Management Features</h1>
                        <p>Precision in execution, insight in analysis.
                            Empowering traders with comprehensive tools for
                            strategic success.</p>
                        <div class="row  mb-4">
                            <div class="icons-des d-flex justify-content-between">
                                <span>
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>Strategy Development</h6>
                                </span>
                                <span>
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>Market Research</h6>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="icons-des d-flex justify-content-between">
                                <span>
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>Risk Management</h6>
                                </span>
                                <span>
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>Trade Monitoring</h6>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-fancybox">
                        <a href="https://vimeo.com/938614823?share=copy" data-fancybox="group"
                            data-caption="This image has a caption 2">
                            <img src="./images/tradeex-thumb.jpg" />
                            <div class="img-play-button">
                                <i class="fa-solid fa-circle-play"></i>
                            </div>
                        </a>

                    </div>

                </div>---->
            </div>
        </div>
    </section>

 <!-- Footer Start -->
 <?php get_footer(); ?>
  <!-- Footer End -->

</body>

</html>