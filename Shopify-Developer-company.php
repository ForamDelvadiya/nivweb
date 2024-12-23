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
              <h3><span>Shopify</span> Development Company</h3>
              <p>
                Elevate User Experiences With Nivzen Technologies' Expert
                Shopify Development Services
              </p>
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
            Looking to migrate your store from another platform to Shopify? Our expert migration services ensure that your data, products, and content are seamlessly transferred without any downtime or loss. We ensure a smooth transition so your business can continue running without interruptions.
            We assist businesses in setting up their Shopify stores from scratch, ensuring a smooth and seamless launch. From product listing and payment setup to configuring essential tools, we handle everything to ensure your store is ready for success.

          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part animatable fadeInLeft">
                <h3>Why Choose Our Shopify Services for Your Web Development Needs?</h3>
                <p>
                  At Nivzen Technologies, we specialize in creating tailor-made Shopify solutions that enable businesses to launch, manage, and grow their online stores with ease. As a leading Shopify development company, we are passionate about helping businesses build visually stunning and high-performing e-commerce stores on one of the world’s most popular e-commerce platforms—Shopify. From seamless store setups to custom functionalities, our expert Shopify developers are here to bring your e-commerce vision to life.


                  <br /><br />
                  We don’t just build stores—we make sure they run at peak performance. Our Shopify optimization services focus on improving your store’s speed, security, and SEO, helping you rank higher on search engines and deliver a better user experience. Additionally, we offer ongoing maintenance and support to ensure your store stays updated and bug-free.

                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
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
              <h3>Why Choose Nivzen Technologies for Shopify Development</h3>
              <div class="row">
                <div class="col-6 col-md-4 points">
                  <div class="whyico">
                    <img src="images/p3.png" alt="" />
                  </div>
                  <h6>
                    Upgrade<br />
                    Tools
                  </h6>
                </div>
                <div class="col-6 col-md-4 points">
                  <div class="whyico">
                    <img src="images/p4.png" alt="" />
                  </div>
                  <h6>
                    Powerful<br />
                    Solutions
                  </h6>
                </div>
                <div class="col-6 col-md-4 points">
                  <div class="whyico">
                    <img src="images/p2.png" alt="" />
                  </div>
                  <h6>
                    Augmentation<br />
                    Services
                  </h6>
                </div>
                <div class="col-6 col-md-4 points">
                  <div class="whyico">
                    <img src="images/p1.png" alt="" />
                  </div>
                  <h6>
                    Extensively<br />
                    Scalable
                  </h6>
                </div>
                <div class="col-6 col-md-4 points">
                  <div class="whyico">
                    <img src="images/p3.png" alt="" />
                  </div>
                  <h6>
                    Accessible<br />
                    Support
                  </h6>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 servicecol">
              <h3>Why Choose Nivzen Technologies for Shopify Development</h3>
              <ul>
                <li>Branded Visual Identity</li>
                <li>Mobile-Optimized Graphics for Shopify Themes</li>
                <li>Custom Themes with Interactive Visuals</li>
                <li>Product Imagery & Graphics for Maximum Engagement</li>
                <li>Custom Iconography & Graphics for Apps</li>
                <li>Enhanced Visual Storytelling on Product Pages</li>
                <li>Shopify Front-End Design for Immersive Shopping Experiences</li>
                <li>Ongoing Visual Support & Graphics Maintenance</li>
                <li>A/B Testing & Optimization of Visuals for Better Conversions</li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="discussProject">
        <div class="container">
          <h3>Let's Discuss Your Project</h3>
          <p>
            Get free consultation and let us know your project idea to turn it
            into an amazing digital product.
          </p>
          <a href="./contact-us.php">
          <button class="border-gradient">
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

        $(".award").owlCarousel({
          loop: false,
          margin: 0,
          nav: false,
          responsive: {
            0: {
              items: 3,
            },
            600: {
              items: 4,
            },
            1000: {
              items: 6,
            },
            1300: {
              items: 6,
            },
          },
        });
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
