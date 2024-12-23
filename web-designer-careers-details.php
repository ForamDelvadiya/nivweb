<!DOCTYPE html>
<html lang="eng">

    <?php include 'layout.php';?>

    <style>
        #drop-area {
            border: 2px dashed #ccc;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            margin: 20px;
        }
        #fileElem {
            display: none;
        }
        .highlight {
            border-color: #666;
        }
        #career-detail .error {
            text-align:left;
            color:red;
        }
    </style>

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
                            <h3><span>Web Designer Intern</span></h3>
                        </div>
                        <div class="bnrimg">
                            <img src="images/bloge-banner-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="alertMsg"></div>

            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12">
                        <div class="section-title-and-desc">
                            <div class="section-title-block">
                                <h1 class="section-title-text mt-5"><b>Embedded Web Designer</b></h1><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 mb-5">
                        <p class="font-bold">Job Brief:</p>
                        <p>We are looking for a skilled Web Designer Lead with expertise in both Automation Testing and Manual Testing to join our team. The ideal candidate will have extensive experience in leading Web Designing teams, developing test strategies, and ensuring the quality of our software products.</p>
                        <p></p>
                        <p><span class="font-bold">Role:</span> Web Designer</p> 
                        <p><span class="font-bold">Experience:</span> 0 to 6 Months</p>
                        <p><span class="font-bold">Position Open:</span> 1</p><p><span class="font-bold">Job Location:</span> Ahmedabad</p>              
                        <p><span class="font-bold">Work from Home Available:</span> Not Available</p>                    
                        <p><span class="font-bold">Salary:</span> Not a constraint for the right candidate</p>                                            
                        <hr>
                        <p class="font-bold">Roles and Responsibility:</p>
                        
                        <ul class="style-icon">
                            <li>Lead the Web Designing team and oversee all aspects of the quality assurance process.</li>
                            <li>Develop and implement test strategies, test plans, test cases, and test scripts.</li>
                            <li>Conduct both manual and automated testing to ensure software quality.</li>
                            <li>Collaborate with the development team to identify and resolve defects.</li>
                            <li>Review and analyze system specifications.</li>
                            <li>Coordinate with the project management team to prioritize testing efforts.</li>
                            <li>Provide feedback and recommendations to improve software quality.</li>
                            <li>Mentor and train Web Designing team members on best practices and new technologies.</li>
                            <li>Stay updated with industry trends and best practices in quality assurance.</li>
                        </ul>                                            
                        <hr>
                        <p class="font-bold">Skill Requirement:</p>
                        <ul class="style-icon"><li>Bachelor's degree in Computer Science, Engineering, or related field.</li>
                            <li>0 to 6 Months of experience in Web Designer, with a focus on both Automation and Manual Testing.</li>
                            <li>Proven experience leading Web Designing teams and managing projects.</li>
                            <li>Strong knowledge of software Web Designermethodologies, tools, and processes.</li>
                            <li>Experience with test automation tools such as Selenium, Appium, or similar.</li>
                            <li>Proficiency in programming languages such as Java, Python, or C#.</li>
                            <li>Excellent analytical and problem-solving skills.</li>
                            <li>Strong communication and leadership abilities.</li>
                            <li>Experience working in an Agile/Scrum environment is a plus.</li>
                        </ul>                                       
                            <hr><p><span class="font-bold">Qualification:</span>  B.Tech/B.E/MCA</p>   
                            <hr><p><span class="font-bold">Office Timings:</span>  10.00 AM to 7.00 PM</p>                    
                            <hr><p><span class="font-bold">Perks and Benefits:</span></p>
                        <ul class="style-icon">
                            <li>5-Days a week</li> 
                            <li>Health Insurance</li>
                            <li>(28 Leaves a year) 18 paid leave &amp; 10 public holiday</li>
                            <li>Maternity paternity leave benefit</li>
                            <li>Training and Development : Certifications</li>
                            <li>Employee engagement activities : awards, community gathering</li>
                            <li>Good Infrastructure</li>
                            <li>Flexible working culture</li>
                            <li>Onsite opportunity</li>
                        </ul>                    
                    
                        <a href="javascript:history.go(-1)">
                            <button class="border-gradient">
                                <span> Go Back</span>
                            </button>
                        </a>              
                    </div> 
                    <div class="col-lg-1">
                        <div class="vr"></div>
                    </div>

                    <?php include 'careers-details-inq-form.php'?>

                </div>
            </div>
        </div>

        <?php include 'footer.php';?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        <script src="https://www.google.com/recaptcha/api.js?render=your reCAPTCHA site key here"></script>


        <script>

            $.validator.addMethod("phoneValidation", function(value, element) {
            // Regular expression for phone number validation
            return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
            }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

            $.validator.addMethod("gmailValidation", function(value, element) {
            // Check if the email ends with @gmail.com
            return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
            }, "Please enter a valid Gmail address.");

            $.validator.addMethod("fileValidation", function(value, element) {
            return this.optional(element) || /\.(pdf|doc)$/i.test(value);
            }, "Please enter a valid File.");
            

            $("#career-detail").validate({
                rules: {
                    'fname': {
                        required: true,
                    },
                    'lname': {
                        required: true,
                    },
                    'email': {
                        required: true,
                        email: true,
                        gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
                    },
                    'phone': {
                        required: true,
                        phoneValidation: true 
                    },
                    'resume': {
                        required: true,
                        fileValidation: true
                    } 
                }
            });

            $("#career-detail").submit(function(event) {
                event.preventDefault(); 

                if ($(this).valid()) { 
                // Send the form data via AJAX
                $('#career_submit_btn').text('Processing...'); 
                    $.ajax({
                        url: 'submit-career.php',  
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

                                $('#career_submit_btn').text('Inquiry Sent'); 
                                
                                $('#career-detail')[0].reset();
                            } else {
                                console.error("Mode is undefined");
                            }
                        }
                    });
                }
            });


            grecaptcha.ready(function() {
                grecaptcha.execute('your reCAPTCHA site key here', {action:'validate_captcha'})
                        .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                });
            });

        </script>

    </body>

</html>