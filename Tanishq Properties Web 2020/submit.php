<?php
if(isset($_POST['submit'])){
    $to = "mahesh@tanishqproperties.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>


<section class="features" id="form">
          <div class="container">
            <p
              class="section-subtitle"
              data-aos="fade-up"
              data-aos-duration="500"
            >
              Contact Us
            </p>

            <h2
              class="h2 section-title"
              data-aos="fade-up"
              data-aos-duration="600"
            >
              Submit Your Enquiry
            </h2>
            <div
              class="form-section"
              data-aos="zoom-in"
              data-aos-duration="600"
            >
              <div class="container-form">
                <div class="title">GET IN TOUCH</div>
                <div class="content">
                  <form
                    action="https://formsubmit.co/abhay@achieversproperties.in"
                    method="POST"
                    autocomplete="on"
                  >
                    <div class="user-details">
                      <div class="input-box">
                        <span class="details">Full Name</span>
                        <input
                          type="text"
                          name="name"
                          placeholder="Enter your name"
                          required
                        />
                      </div>
                      <div class="input-box">
                        <span class="details">Company name</span>
                        <input
                          type="text"
                          name="company"
                          placeholder="Enter your company"
                          required
                        />
                      </div>
                      <div class="input-box">
                        <span class="details">Email</span>
                        <input
                          type="email"
                          name="email"
                          placeholder="Enter your email"
                          required
                        />
                      </div>
                      <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input
                          type="number"
                          name="phone"
                          placeholder="Enter your number"
                          required
                        />
                      </div>
                      <div class="input-box">
                        <span class="details">Enquiry For</span>
                        <select
                          id="options"
                          type="select"
                          name="enquiry"
                          title="options"
                        >
                          <option value="select-option" disabled selected>
                            Select options
                          </option>
                          <option value="commercial">Commercial Office</option>
                          <option value="residential">Residential Flat</option>
                          <option value="other">Others - Please Mention</option>
                        </select>
                      </div>
                      <div class="input-box message">
                        <span class="details">Message</span>
                        <textarea name="message" title="text-area"></textarea>
                      </div>
                    </div>
                    <div class="gender-details">
                      <input
                        type="radio"
                        name="gender"
                        value="male"
                        id="dot-1"
                      />
                      <input
                        type="radio"
                        name="gender"
                        value="female"
                        id="dot-2"
                      />
                      <input
                        type="radio"
                        name="gender"
                        value="other"
                        id="dot-3"
                      />
                      <span class="gender-title">Gender</span>
                      <div class="category">
                        <label for="dot-1">
                          <span class="dot one"></span>
                          <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                          <span class="dot two"></span>
                          <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                          <span class="dot three"></span>
                          <span class="gender">Prefer not to say</span>
                        </label>
                      </div>
                    </div>
                    <div class="button" onclick="message()">
                      <input type="submit" value="Send" />
                      <input type="hidden" name="_template" value="table" />
                      <input
                        type="hidden"
                        name="_subject"
                        value="Achievers Web New Enquiry"
                      />
                      <input type="hidden" name="_captcha" value="false" />
                      <input
                        type="hidden"
                        name="_next"
                        value="http://127.0.0.1:5500/Achievers%20Properties/formsubmit.html"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
