<?php include "widgets/tradingview-tape.php"; ?>
<?php include "components/navigation.php"; ?>

  <!-- HEADER CSS START -->
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
              <img src="./images/dollar-3d.png" id="first-show" alt="" style="display: none;">
              <img src="./images/dolar.gif" id="second-show" alt="" style="">
            </div>
          </div>
          <div class="col-md-6 col-12 header-content">
            <div class="header-content1">
              <h1>Unlock Financial Freedom</h1>
              <p>
                 Trading Curriculums designed to strengthen your market analysis, risk management, and execution discipline.
              </p>
              <div class="btns-header">
                <a href="#Frequency-question">
                  <button class="primary-btns1">Learn More</button>
                </a>
                <a href="./contact">
                  <button class="primary-btns2">Enroll Now</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="gradient"></div>
      <div class="gradient2"></div>
    </div>
  </header>



  <section class="Learn" id="Courses">
    <div class="container">
      <div class="row">
        <div class="content-learn text-center">
          <h1>RoadMap To Your Financial Freedom</h1>
          <div class="content-about-heade d-flex justify-content-center">
            <h4 class="w-75">
              With our comprehensive courses designed to teach trading from
              scratch, and take you from a beginner to a complete professional
            </h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" id="couse1">
            <div class="image-content">
              <h4>Foundation Track</h4>
            </div>
            <p>
              Build essential trading & technical charting literacy. Weekly session plus practical day with live trading   
   executions. 
   <br><br>
   <b>Outcome: </b>A kickstart to your journey into the world of trading. 
            </p>
            <div class="btns-learn">
              <button class="Learn-btn1 fee-container">
                Outline <span class="toggle-icon">+</span>
              </button>
              
            </div>
            <div id="courseOutlineText" class="mb-3" style="display: none">
              <ul>
                <li>Basic Principles & Overview</li>
                <li>Glimpse of Risk management</li>
                <li>Overview of technical charting concepts with practical's (Trends, candles, SR Levels, charts + more) </li>
                <li>Indicators</li>
                <li>Q & A</li>
                <li>Live Back testing</li>
                <li>+ more</li>
              </ul>
            </div>
            <div class="duration text-center">
              <p>Duration: 03 Weeks</p>
              <button class="go-button"><i class="fa-solid fa-arrow-right"></i></button>

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" id="couse1">
            <div class="image-content">
              <h4>Growth Track</h4>
            </div>
            <p>
             Transition learners from basic literacy to applied trading skills. Multiple weekly sessions plus practical days with live trading executions.
           <br><br><b>Outcome:</b> Learners gain competence in applying strategies and preparing for advance trading.
            </p>
            <div class="btns-learn">
              <button class="Learn-btn2 fee-container">
                Outline <span class="toggle-icon">+</span>
              </button>
        
            </div>
            <div id="courseOutlineText2" class="mb-3" style="display: none">
              <ul>
                <li>Foundation Track Program with expanded and detailed learning modules </li>
                <li>Adapted Concepts from the CMT Program</li>
                <li>Authentic Elements from ICT & SMC</li>
                <li>Multiple Trading Strategies with trade plans</li>
                <li>Q & A</li>
                <li>Live Back testing</li>
                                <li>+ more</li>

    
              </ul>
            </div>
            <div class="duration text-center">
              <p>Duration: 01 Month</p>
             <button class="go-button"><i class="fa-solid fa-arrow-right"></i></button>


            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" id="couse1">
            <div class="image-content">
              <h4>Master Track</h4>
            </div>
            <p>
              Structured Progression Toward Advanced Professional Trading.  Multiple weekly sessions plus practical days with live trading executions.
<br><br>
              <b>Outcome:</b> Students that position themselves as professional traders ready for certification or advancement.
            </p>


            <div class="btns-learn">
           <button class="Learn-btn3 fee-container">
                Outline <span class="toggle-icon">+</span>
              </button>

            </div>
            <div id="courseOutlineText3" class="mb-3" style="display: none">
              <ul>
                <li>Certificate officially endorsed by the Testing Trade Board (TTB), Sindh Government.</li>
                <li>Lifetime access to Premium alumni community group</li>
                <li>Lifetime access to Guidance & Support</li>
                <li>Internship at a Regulated Brokerage House</li>

                <li>Growth Track Program with expanded and detailed learning modules </li>
                <li>Modules Aligned with CMT Standards </li>
                <li>Authentic concepts added from PA, ICT & SMC</li>
                <li>Advanced Strategies for Market Success with professional trading plans</li>
                <li>Bonus Material including elements from fundamentals & investments </li>
                <li>Q & A</li>
                <li>Live Trading Executions</li>
                <li>Live Back testing</li>
                <li>Proper Examination</li>
                <li>Future Career Opportunities</li>
                <li>+ more</li>
 
              </ul>
            </div>
            <div class="duration text-center">
              <p>Duration: 02 Months</p>
        <button class="go-button"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card" id="couse1">
            <div class="row">
            <div class="col-lg-4">
            <div class="image-content">
              <h4>Elite 1-1 Mentorship</h4>
            </div>
            <p>
            Structured Progression Toward Advanced Professional Trading. Multiple weekly sessions plus practical days with live trading executions.
            <br><br>
             <b>Outcome:</b> Students achieve mastery, positioning themselves as professional traders ready for certification or advancement.
             <br><br>
             Covers Master Track Program & In-depth strategies
            </p>
            <div class="btns-learn">
           <button class="Learn-btn4 fee-container">
                Outline <span class="toggle-icon">+</span>
              </button>

            </div>
            <div id="courseOutlineText4" class="mb-3" style="display: none">
              <ul>
                <li>Foundation Track Program with expanded and detailed learning modules </li>
                <li>Adapted Concepts from the CMT Program</li>
                <li>Authentic Elements from ICT & SMC</li>
                <li>Multiple Trading Strategies with trade plans</li>
                <li>Q & A</li>
                <li>Live Back testing</li>
    
              </ul>
            </div>
            <div class="duration text-center">
              <p>Duration: Customized - No Time Barriers</p>
       
              <button class="go-button"><i class="fa-solid fa-arrow-right"></i></button>

            </div>

          </div>
<div class="col-lg-4">RED</div></div>        
        </div>
        </div>
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
              <h1>
                No Investment? No Worries! We Help All Our Students Acquire
                Fully
              </h1>
              <h1><span>Funded Accounts</span></h1>
              <p>
                with trading capital that will enable you to trade without
                using your own funds
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <div class="content-Funded2 justify-content-center">
            <div class="img-funded">
              <img src="./images/FundedAccount-ezgif.com-video-to-gif-converter.gif" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Funded End -->

  <!-- Join Section -->

  <!-- Form Start -->

  
 

  <section id="reviews">
    <div class="container">
      <div class="gtco-testimonials">
        <div class="testimonal-heading">
          <h1>
            Still Unsure About Courses? <br>
            Hear What Our Students Say:
          </h1>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
          
          
          
          
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1125px, 0px, 0px); transition: all; width: 4129px;"><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  I am incredibly impressed with the quality of education I
                  received at Tradex's Forex trading course. The course
                  material is well-organized, easy to understand, and packed
                  with actionable strategies. What truly sets Tradex apart is
                  the personalized attention and feedback provided by the
                  instructors. They take the time to address each student's
                  questions and concerns, ensuring everyone progresses at
                  their own pace. I am grateful for the invaluable skills and
                  knowledge I've gained through Tradex's course
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
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
          </div></div><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
            <div class="card">
              <div class="card-body">
                <div class="header-card-rating d-flex justify-content-between align-items-center">
                  <div class="header-card-heading">
                    <h1>4.5</h1>
                  </div>
                  <div class="head-card-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                </div>

                <img src="./images/line1.svg" alt="">
                <p>
                  I can confidently say that Tradex offers an exceptional
                  learning experience for anyone interested in mastering Forex
                  trading. The instructors are not only experts in their field
                  but also skilled educators who genuinely care about their
                  students' success. The course is structured in a way that
                  caters to different learning styles, ensuring everyone can
                  grasp the concepts effectively.
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Tayyaba Kokab</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 015</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  Tradex's Forex trading course has proven to be a wise
                  investment in my future. The knowledge and skills I've
                  acquired have opened doors to opportunities I never thought
                  possible. The ongoing support from the Tradex ensures that
                  learning doesn't stop after the course ends. If you're
                  serious about achieving financial independence through Forex
                  trading, I wholeheartedly recommend Tradex as your partner
                  in success
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Azhar Bhatti</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 08</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  Enrolling in Tradex's Forex trading course has been one of
                  the best decisions I've ever made. The instructors are
                  incredibly knowledgeable and supportive, guiding me through
                  every step of the trading process. I've gained valuable
                  insights and skills that have empowered me to make confident
                  trading decisions. Highly recommend to anyone looking to
                  delve into the world of Forex trading
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Syed Muhammad Rafi</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 002</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active" style="width: 365.333px; margin-right: 10px;"><div class="item">
            <div class="card">
              <div class="card-body">
                <div class="header-card-rating d-flex justify-content-between align-items-center">
                  <div class="header-card-heading">
                    <h1>4.5</h1>
                  </div>
                  <div class="head-card-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                </div>

                <img src="./images/line1.svg" alt="">
                <p>
                  I cannot speak highly enough of the support and mentorship
                  provided by Tradex throughout their Forex trading course.
                  From day one, I felt like part of a supportive community of
                  traders, all dedicated to each other's success. The
                  instructors are not only experts in Forex trading but also
                  fantastic mentors who genuinely want to see their students
                  thrive. If you're serious about mastering Forex trading,
                  look no further than Tradex
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Muhammad Wasif</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 001</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  I am incredibly impressed with the quality of education I
                  received at Tradex's Forex trading course. The course
                  material is well-organized, easy to understand, and packed
                  with actionable strategies. What truly sets Tradex apart is
                  the personalized attention and feedback provided by the
                  instructors. They take the time to address each student's
                  questions and concerns, ensuring everyone progresses at
                  their own pace. I am grateful for the invaluable skills and
                  knowledge I've gained through Tradex's course
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
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
          </div></div><div class="owl-item" style="width: 365.333px; margin-right: 10px;"><div class="item">
            <div class="card">
              <div class="card-body">
                <div class="header-card-rating d-flex justify-content-between align-items-center">
                  <div class="header-card-heading">
                    <h1>4.5</h1>
                  </div>
                  <div class="head-card-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                </div>

                <img src="./images/line1.svg" alt="">
                <p>
                  I can confidently say that Tradex offers an exceptional
                  learning experience for anyone interested in mastering Forex
                  trading. The instructors are not only experts in their field
                  but also skilled educators who genuinely care about their
                  students' success. The course is structured in a way that
                  caters to different learning styles, ensuring everyone can
                  grasp the concepts effectively.
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Tayyaba Kokab</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 015</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  Tradex's Forex trading course has proven to be a wise
                  investment in my future. The knowledge and skills I've
                  acquired have opened doors to opportunities I never thought
                  possible. The ongoing support from the Tradex ensures that
                  learning doesn't stop after the course ends. If you're
                  serious about achieving financial independence through Forex
                  trading, I wholeheartedly recommend Tradex as your partner
                  in success
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Azhar Bhatti</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 08</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  Enrolling in Tradex's Forex trading course has been one of
                  the best decisions I've ever made. The instructors are
                  incredibly knowledgeable and supportive, guiding me through
                  every step of the trading process. I've gained valuable
                  insights and skills that have empowered me to make confident
                  trading decisions. Highly recommend to anyone looking to
                  delve into the world of Forex trading
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Syed Muhammad Rafi</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 002</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
            <div class="card">
              <div class="card-body">
                <div class="header-card-rating d-flex justify-content-between align-items-center">
                  <div class="header-card-heading">
                    <h1>4.5</h1>
                  </div>
                  <div class="head-card-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </div>
                </div>

                <img src="./images/line1.svg" alt="">
                <p>
                  I cannot speak highly enough of the support and mentorship
                  provided by Tradex throughout their Forex trading course.
                  From day one, I felt like part of a supportive community of
                  traders, all dedicated to each other's success. The
                  instructors are not only experts in Forex trading but also
                  fantastic mentors who genuinely want to see their students
                  thrive. If you're serious about mastering Forex trading,
                  look no further than Tradex
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
                <div class="auther">
                  <div class="auther-heading">
                    <h4>Muhammad Wasif</h4>
                  </div>
                  <div class="auther-details d-flex justify-content-between align-items-center">
                    <p>Batch: 001</p>
                    <p>Course: Standard Foxex</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 365.333px; margin-right: 10px;"><div class="item">
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

                <img src="./images/line1.svg" alt="">
                <p>
                  I am incredibly impressed with the quality of education I
                  received at Tradex's Forex trading course. The course
                  material is well-organized, easy to understand, and packed
                  with actionable strategies. What truly sets Tradex apart is
                  the personalized attention and feedback provided by the
                  instructors. They take the time to address each student's
                  questions and concerns, ensuring everyone progresses at
                  their own pace. I am grateful for the invaluable skills and
                  knowledge I've gained through Tradex's course
                </p>
                <img src="./images/line2.svg" class="pb-4" alt="">
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
          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </section>

  <!-- Tetimonal End -->

  <section class="Form-section" id="from-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-12">
          <div class="content-form-section">
            <h1>You Are one step away to earn in dollars</h1>
          </div>
        </div>
        <div class="col-lg-7 col-12 d-flex justify-content-center">
          <div class="form-emailjs w-100">
            <form id="form" method="post" action="https://api.rootsbmd.com/public/SaveContactForm">
              <input type="hidden" name="email_to" value="admin@tradexpk.com">
              <input type="hidden" name="subject" value="Enquiry Email | Trade X PK">
              <div class="row g-3">
                <div class="col-lg-6">
                  <div class="field">
                    <label for="Name">Name</label>
                    <input type="text" name="name" id="Name" class="form-control" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="field">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="Email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="field">
                    <label for="City">City</label>
                    <input type="text" name="city" id="City" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="field">
                    <label for="Contact">Contact Number</label>
                    <input type="text" name="contact" id="Contact" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="field">
                    <label for="WhatsApp">WhatsApp Number</label>
                    <input type="tel" name="whatsApp" id="WhatsApp" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="field">
                    <label for="Courses">Courses</label>
                    <select id="Courses" name="courses" class="form-select" required="">
                      <option disabled="" selected="" value="">Select Courses</option>
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
                    <input type="text" name="message" id="Message" class="form-control">
                  </div>
                </div>
              </div>

              <div class="Form-button mt-4 text-center">
                <input type="submit" id="button" class="btn btn-primary px-4" value="Send Email">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form End -->

  <div class="marquee mt-5">
    <div class="track">
      <div class="content">
        Learn to Earn in Dollar <i class="fa-solid fa-dollar-sign"></i> Learn
        to Earn in Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to
        Earn in Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn
        in Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i> Learn to Earn in
        Dollars <i class="fa-solid fa-dollar-sign"></i>
      </div>
    </div>
  </div>
  <!-- Frequency Asked Question -->

  <section class="Frequency-question" id="Frequency-question">
    <div class="container">
      <div class="frequency-heading">
        <h1>Frequently Asked Questions</h1>
      </div>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is Forex Trading?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                Forex trading involves buying and selling currencies on the
                foreign exchange market with the aim of making a profit from
                changes in exchange rates.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Do I Need a Background in Finance to Learn Forex Trading?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                While a background in finance can be helpful, it's not
                necessary. Many successful traders come from various
                backgrounds and learn as they go.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Is Forex Trading Risky?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                Yes, forex trading can be risky due to the volatile nature of
                currency markets. It's important to educate yourself, use risk
                management strategies, and only trade with money you can
                afford to lose.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              How Much Money Do I Need to Start Forex Trading?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                The amount varies depending on your broker and trading
                strategy, but some brokers allow you to start with as little
                as $100 or even less.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              What Resources Will I Have Access to as a Student?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                Yes, many traders start by trading part-time while maintaining
                other commitments. It's important to manage your time
                effectively and balance your priorities.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Are There Any Guarantees of Success in Forex Trading?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                No, there are no guarantees in forex trading. Success depends
                on various factors including skill, knowledge, discipline, and
                market conditions.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Does TradeX Offer Online Classes?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                Yes, TradeX likely offers online classes and educational
                resources for aspiring forex traders.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              What Is a Funded Account?
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>
                A funded account is an account provided by a trading firm or
                investor where you trade with their capital instead of your
                own. This allows you to access larger amounts of capital to
                trade with, but often comes with conditions and profit-sharing
                agreements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Start -->
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
    $(document).ready(function () {
      $(".Learn-btn1").click(function () {
        $("#courseOutlineText").slideToggle(500);
        $(this).find("i").toggleClass("fa-plus fa-minus");
      });

      $(window).scroll(function () {
        var owlStageOuterTop = $(".owl-stage-outer").offset().top;
        var windowHeight = $(window).height();
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > owlStageOuterTop - windowHeight) {
          $("#courseOutlineText").slideUp(500);
          $(".Learn-btn1 i").removeClass("fa-minus").addClass("fa-plus");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $(".Learn-btn2").click(function () {
        $("#courseOutlineText2").slideToggle(500);
        $(this).find("i").toggleClass("fa-plus fa-minus");
      });

      $(window).scroll(function () {
        var owlStageOuterTop = $(".owl-stage-outer").offset().top;
        var windowHeight = $(window).height();
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > owlStageOuterTop - windowHeight) {
          $("#courseOutlineText2").slideUp(500);
          $(".Learn-btn2 i").removeClass("fa-minus").addClass("fa-plus");
        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $(".Learn-btn3").click(function () {
        $("#courseOutlineText3").slideToggle(500);
        $(this).find("i").toggleClass("fa-plus fa-minus");
      });

      $(window).scroll(function () {
        var owlStageOuterTop = $(".owl-stage-outer").offset().top;
        var windowHeight = $(window).height();
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > owlStageOuterTop - windowHeight) {
          $("#courseOutlineText3").slideUp(500);
          $(".Learn-btn3 i").removeClass("fa-minus").addClass("fa-plus");
        }
      });
    });
  </script>

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

<script src="./App.js"></script>

</body></html>