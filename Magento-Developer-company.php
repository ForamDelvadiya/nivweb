<!DOCTYPE html>
<html lang="en">

<?php include 'layout.php';?>

<body>
  <div id="wapper">
    <div class="header-wapper">
      <div class="container">

      <?php include 'header.php';?>

      </div>
    </div>
    <div class="innerbanner">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <div class="inrpgtitle">
            <h3><span>Magento</span> Development Company</h3>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Magento Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="images/react-bnr.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          
we offer a comprehensive range of Magento development services designed to meet the specific needs of your business. From custom development to seamless integration and performance optimization, our team of certified Magento developers has the expertise to deliver solutions that elevate your e-commerce store.

        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part animatable fadeInLeft">
              <h3>Why Choose Our Magento Services for Your Web Development Needs?</h3>
              <p>
              We believe in creating Magento stores that do more than just sell products—they provide engaging shopping experiences that keep customers coming back. Whether you’re a small business just starting out or an established enterprise looking to take your store to the next level, we’re here to help you build a Magento-powered e-commerce solution that drives results.

                <br /><br />
                When it comes to building a successful e-commerce store, you need a partner that understands the intricacies of the platform and your business. At Nivzen Technologies, we bring a unique blend of technical expertise, creative thinking, and a deep understanding of e-commerce trends to every project.
              </p>

            </div>
          </div>
          <div class="col col-12 col-md-6 text-center ">
            <div class="image-part animatable  fadeInRight">
              <img src="images/about-react-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'inquery.php';?>

    <div class="servicesRow">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 whycol">
            <h3>Why Choose Nivzen Technologies for Magento Development</h3>
            <div class="row">
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="images/p3.png" alt="" />
                </div>
                <h6>Upgrade<br />
                  Tools</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="images/p4.png" alt="" />
                </div>
                <h6>Powerful<br />
                  Solutions</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="images/p2.png" alt="" />
                </div>
                <h6>Augmentation<br />
                  Services</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="images/p1.png" alt="" />
                </div>
                <h6>Extensively<br />
                  Scalable</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="images/p3.png" alt="" />
                </div>
                <h6>Accessible<br />
                  Support</h6>
              </div>

            </div>
          </div>

          <div class="col-12 col-md-6 servicecol">
            <h3>Why Choose Nivzen Technologies for Magento Development</h3>
            <ul>
              <li>Brand-Centric Visual Design for Storefronts</li>
              <li>Adaptive Graphics for Mobile-Friendly Themes</li>
              <li>Custom Visuals for Themes with Interactive Elements</li>
              <li>Conversion-Optimized Product Images & Visual Content</li>
              <li>Personalized Iconography & Graphics for Magento Extensions</li>
              <li>Compelling Product Storytelling through Custom Graphics</li>
              <li>Magento Front-End Design for Enhanced Shopper Engagement</li>
              <li>Ongoing Visual Enhancement & Maintenance</li>
              <li>Data-Driven A/B Testing for Visual & UX Optimization</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="discussProject">
      <div class="container">
        <h3>Let's Discuss Your Project</h3>
        <p>Get free consultation and let us know your project idea to turn it into an amazing digital product.</p>
        <a href="./contact-us.php">
        <button class="border-gradient ">
          <span>Contact Us</span>
        </button>
      </a>
      </div>
    </div>
    <?php include 'footer.php';?>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    // Trigger CSS animations on scroll.
    // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

    // Looking for a version that also reverses the animation when
    // elements scroll below the fold again?
    // --> Check https://codepen.io/bramus/pen/vKpjNP

    jQuery(function ($) {
      // Function which adds the 'animated' class to any '.animatable' in view
      var doAnimations = function () {
        // Calc current offset and get all animatables
        var offset = $(window).scrollTop() + $(window).height(),
          $animatables = $(".animatable");

        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
          $(window).off("scroll", doAnimations);
        }

        // Check all animatables and animate them if necessary
        $animatables.each(function (i) {
          var $animatable = $(this);
          if ($animatable.offset().top + $animatable.height() - 20 < offset) {
            $animatable.removeClass("animatable").addClass("animated");
          }
        });
      };

      // Hook doAnimations on scroll, and trigger a scroll
      $(window).on("scroll", doAnimations);
      $(window).trigger("scroll");


      $('.award').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        responsive: {
          0: {
            items: 3
          },
          600: {
            items: 4
          },
          1000: {
            items: 6
          },
          1300: {
            items: 6
          }
        }
      })
    });

  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>

$.validator.addMethod("phoneValidation", function(value, element) {
// Regular expression for phone number validation
   return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
}, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

$.validator.addMethod("gmailValidation", function(value, element) {
   // Check if the email ends with @gmail.com
   return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
}, "Please enter a valid Gmail address.");


   $("#inquery-post").validate({
       rules: {
           'name': {
               required: true,
           },
           'email': {
               required: true ,
               email: true ,
               gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
           },
           'phone': {
               required: true,
               phoneValidation: true 
           },
           'desc': {
               required: true
           }
       }
   });

   $("#inquery-post").submit(function(event) {
       event.preventDefault();
       // Send the form data via AJAX
       if ($(this).valid()) { // Only submit if the form is valid
        $('#inq_text').text('Processing...'); 
           $.ajax({
               url: 'submit-inquery.php',
               type: 'POST',
               data: $(this).serialize(), // Serialize form data
               success: function(response) {
                   const obj = JSON.parse(response);
                   if (obj && obj.message) {
                       $("#alertMsg").html(`
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                               ${obj.message}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                       `);
                       $('#inq_text').text('Inquiry Sent'); 

                       $('#inquery-post')[0].reset();
                   } 
               }
           });
       }
   });
   </script>


</body>

</html>