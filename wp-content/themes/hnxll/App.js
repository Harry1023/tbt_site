// Custom Menu HNXLL Start

jQuery(document).ready(function($) {
    $('.hamburger-container').click(function() {
        $('.mobile-menu').toggleClass('mobile-view');
    });

    $('.mobile-close').click(function() {
        $('.mobile-menu').toggleClass('mobile-view');
    });
});

// Custom Menu HNXLL End



// Toggle Programs Button HNXLL Start

$(document).ready(function () {

  $(".Learn-btn1").click(function () {
    $("#courseOutlineText").slideToggle(500);
    $(this).find("i").toggleClass("fa-plus fa-minus");
  });

  $(".Learn-btn2").click(function () {
    $("#courseOutlineText2").slideToggle(500);
    $(this).find("i").toggleClass("fa-plus fa-minus");
  });

  $(".Learn-btn3").click(function () {
    $("#courseOutlineText3").slideToggle(500);
    $(this).find("i").toggleClass("fa-plus fa-minus");
  });

  $(".Learn-btn4").click(function () {
    $("#courseOutlineText4").slideToggle(500);
    $(this).find("i").toggleClass("fa-plus fa-minus");
  });

  $(window).scroll(function () {
    var owlStageOuterTop = $(".owl-stage-outer").offset().top;
    var windowHeight = $(window).height();
    var scrollPosition = $(this).scrollTop();

    if (scrollPosition > owlStageOuterTop - windowHeight) {
      $("#courseOutlineText").slideUp(500);
      $(".Learn-btn1 i").removeClass("fa-minus").addClass("fa-plus");

      $("#courseOutlineText2").slideUp(500);
      $(".Learn-btn2 i").removeClass("fa-minus").addClass("fa-plus");

      $("#courseOutlineText3").slideUp(500);
      $(".Learn-btn3 i").removeClass("fa-minus").addClass("fa-plus");

      $("#courseOutlineText4").slideUp(500);
      $(".Learn-btn4 i").removeClass("fa-minus").addClass("fa-plus");
    }
  });

});


// Toggle Programs Button HNXLL End





// Fee Toggle STart

$(document).ready(function () {
  $(".fee-container").click(function () {
    $(this).next(".fee-content").slideToggle();
    let icon = $(this).find(".toggle-icon");
    icon.text(icon.text() == "+" ? "-" : "+");
  });
});

// Fee Toggle ENd

$(document).ready(function () {
  $(".btn-right").click(function () {
    var icons = $(this).prev(".social-icons");
    var iconItems = icons.find(".icon");
    var buttonIcon = $(this).find("i");

    if (icons.hasClass("active")) {
      // Hide icons with delay
      iconItems.each(function (index) {
        $(this)
          .delay(index * 100)
          .queue(function (next) {
            $(this).css({ opacity: "0", transform: "translateY(20px)" });
            next();
          });
      });

      icons.delay(400).queue(function (next) {
        $(this).css({ opacity: "0", transform: "translateY(20px)" });
        $(this).removeClass("active");
        buttonIcon.removeClass("fa-xmark").addClass("fa-share-nodes");
        next();
      });
    } else {
      // Show icons with delay
      icons
        .addClass("active")
        .css({ opacity: "1", transform: "translateY(0)" });

      iconItems.each(function (index) {
        $(this)
          .delay(index * 100)
          .queue(function (next) {
            $(this).css({ opacity: "1", transform: "translateY(0)" });
            next();
          });
      });

      buttonIcon.removeClass("fa-share-nodes").addClass("fa-xmark");
    }
  });
});
$(document).ready(function () {
  setTimeout(function () {
    $("#loadingScreen").fadeOut("slow", function () {
      $("body").css("overflow", "auto");
      $(".content").fadeIn("slow");
    });
  }, 6000); // Loader will disappear after 6 seconds
});

$(document).ready(function () {
  // Set a timer for 1 minute (60000 milliseconds)
  setTimeout(function () {
    // Hide the first image and show the second image
    $("#first-show").fadeOut("slow", function () {
      $("#second-show").fadeIn("slow");
    });
  }, 4000); // 1 minute delay
});

// Community card
// document.addEventListener("DOMContentLoaded", function() {
//   // Create a new image element for the cursor
//   var cursorImg = new Image();
//   cursorImg.src = 'https://pics.clipartpng.com/Dollar_Sign_PNG_Clipart-658.png'; // Replace 'dollar_cursor.png' with the path to your dollar sign image
//   cursorImg.style.position = 'fixed';
//   cursorImg.style.zIndex = '99999999999999';
//   cursorImg.style.width = '35px'; // Set the width of the cursor image
//     cursorImg.style.height = '40px'; // Set the height of the cursor image
//   cursorImg.style.pointerEvents = 'none'; // Make sure the cursor image doesn't interfere with pointer events

//   // Add event listeners to update the cursor position
//   document.addEventListener('mousemove', function(e) {
//       cursorImg.style.left = e.clientX + 'px';
//       cursorImg.style.top = e.clientY + 'px';
//   });

//   // Append the cursor image to the body
//   document.body.appendChild(cursorImg);
// });

// Cursor Animation
// var counterSection = document.querySelector('.counter-section');
// var blobElement = document.querySelector('.blob');

// counterSection.addEventListener('mousemove', function(e){
//   blobElement.style.display = "none";
// });

// counterSection.addEventListener('mouseleave', function(e){
//   blobElement.style.display = "block"; // Show the .blob element when the mouse leaves the counter section
// });

$(".navigation-list").clone().appendTo(".mobile-menu-body");

$(".hamburger").on("click", function () {
  if (!$(".mobile-menu").hasClass("mobile-view")) {
    $(".mobile-menu").addClass("mobile-view");
  } else {
    $(".mobile-menu").removeClass("mobile-view");
  }
});

AOS.init({
  disable: function () {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  },
});
$("#menu-close").on("click", function () {
  $(".mobile-menu").removeClass("mobile-view");
  $(".dropdown-li").removeClass("open");
  $(".dropdown-li").find(">.dropdown-list").hide(200);
});

$(".mobile-menu .dropdown-li>a").append('<i class="fa fa-angle-right"></i>');

$(".mobile-menu .dropdown-li>a").click(function () {
  const parent = $(this).parent(".dropdown-li");
  if (!parent.hasClass("open")) {
    const ulParent = parent.parent();
    ulParent.find(".dropdown-li.open").find(">.dropdown-list").hide(200);
    ulParent.find(".dropdown-li.open").removeClass("open");
    parent.addClass("open");
    parent.find(">.dropdown-list").show(200);
  } else {
    parent.removeClass("open");
    parent.find(">.dropdown-list").hide(200);
  }
});

$(".animated-progress span").each(function () {
  $(this).animate(
    {
      width: $(this).attr("data-progress") + "%",
    },
    4000
  );
  $(this).text($(this).attr("data-progress") + "%");
});

// Counter
// Function to animate counting
function animateCount(targetElement, startValue, endValue, duration) {
  let startTime;
  const step = (timestamp) => {
    if (!startTime) startTime = timestamp;
    const progress = Math.min((timestamp - startTime) / duration, 1);
    const currentCount = Math.floor(
      progress * (endValue - startValue) + startValue
    );
    targetElement.textContent = currentCount.toLocaleString(); // Display with commas
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

// Function to start animation when element is in view
function startCountAnimationWhenVisible(
  element,
  startValue,
  endValue,
  duration
) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCount(entry.target, startValue, endValue, duration);
        observer.unobserve(entry.target); // Stop observing once element is in view
      }
    });
  });

  observer.observe(element);
}

// Select elements and start counting animation when they become visible
const batchCountElement = document.getElementById("batchCount");
const profileCountElement = document.getElementById("profileCount");
const earnedCountElement = document.getElementById("earnedCount");
const tradesCountElement = document.getElementById("tradesCount");
const batchCountElement3 = document.getElementById("batchCount3");
const profileCountElement3 = document.getElementById("profileCount3");
const earnedCountElement3 = document.getElementById("earnedCount3");
const tradesCountElement3 = document.getElementById("tradesCount3");
const batchCountElement4 = document.getElementById("batchCount4");
const profileCountElement4 = document.getElementById("profileCount4");
const earnedCountElement4 = document.getElementById("earnedCount4");
const tradesCountElement4 = document.getElementById("tradesCount4");

// Example animations for batch count, profile count, earned count, and trades count
startCountAnimationWhenVisible(batchCountElement2, 0, 69, 1000);
startCountAnimationWhenVisible(batchCountElement, 0, 24, 1000);
startCountAnimationWhenVisible(profileCountElement, 0, 870, 1000);
startCountAnimationWhenVisible(earnedCountElement, 0, 20630, 1000);
startCountAnimationWhenVisible(tradesCountElement, 0, 253, 1000);
startCountAnimationWhenVisible(batchCountElement4, 0, 24, 1000);
startCountAnimationWhenVisible(profileCountElement4, 0, 870, 1000);
startCountAnimationWhenVisible(earnedCountElement4, 0, 10530, 1000);
startCountAnimationWhenVisible(tradesCountElement4, 0, 153, 1000);
startCountAnimationWhenVisible(batchCountElement3, 0, 20, 1000);
startCountAnimationWhenVisible(profileCountElement3, 0, 420, 1000);
startCountAnimationWhenVisible(earnedCountElement3, 0, 25750, 1000);
startCountAnimationWhenVisible(tradesCountElement3, 0, 215, 1000);
startCountAnimationWhenVisible(header - animate, 0, 69, 1000);