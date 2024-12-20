<?php
    $submitted = filter_input(INPUT_POST, 'formSubmitted', FILTER_VALIDATE_BOOLEAN);

    class contactInput
        {
            public $contactName;
            public $contactEmail;
            public $contactSubject;
            public $contactMessage;

            public function __construct()
            {
                $this->contactName = filter_input(INPUT_POST, 'contactName');
                $this->contactEmail = filter_input(INPUT_POST, 'contactEmail');
                $this->contactSubject = filter_input(INPUT_POST, 'contactSubject');
                $this->contactMessage = filter_input(INPUT_POST, 'contactMessage');

            }
            public function addContactMessage()
            {
                $filePath = 'data/contactMessage.json';
                if (file_exists($filePath)) 
                {
                    $currentContact = json_decode(file_get_contents($filePath), true);
                    array_push($currentContact, $this);
                    file_put_contents($filePath, json_encode($currentContact, JSON_PRETTY_PRINT));

                    return true;
                }
                return false;
            }
        }
        $submitContact = filter_input(INPUT_POST, 'submitContact', FILTER_VALIDATE_BOOLEAN);
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $submitContact)
        {
            $contactInput = new contactInput;
            $contactInput->addContactMessage();
        }
?>

<div id="contact-container">
    <div id="contactPage-header">
        <img src="./resources/contactPage/contact-image.png" alt="Photo of a wired phone.">
        <div id="contact-title">
            <h1>Contact</h1>
        </div>
    </div>
    <div id="contact-mid-title">
        <div id="contact-mid-heading">
            <h1>Get In Touch With Us</h1>
        </div>
        <div id="contact-mid-text">
            <p>
                For More Information About Our Product & Services.
                Please Feel Free To Drop Us An <span class="new-line">Email.
                Our Staff Always Be There To Help You Out. Do Not Hesitate!</span>
            </p>
        </div>
    </div>
    <section id="contact-us">
        <div id="contact-small-container">
            <div>
                <div class="contact-details-row">
                    <div class="contact-row-image">
                        <img src="resources/contactPage/Vector.png" alt="Icon of a map pin">
                    </div>
                    <div class="contact-row-text">
                        <h2>
                            Address
                        </h2>
                        <p>
                            Van Schaikweg 94, 
                            <span class="new-line">7811 KL, Emmen</span>
                            <span class="new-line">Netherlands</span>
                        </p>
                    </div>
                </div>
                <div class="contact-details-row">
                    <div class="contact-row-image">
                        <img src="resources/contactPage/phone.png" alt="Icon of a phone">
                    </div>
                    <div class="contact-row-text">
                        <h2>
                            Phone
                        </h2>
                        <p>
                            Mobile: +31 591 123456
                            <span class="new-line">Hotline: +31 591 654321</span>
                        </p>
                    </div>
                </div>
                <div class="contact-details-row">
                    <div class="contact-row-image">
                        <img src="resources/contactPage/bi_clock-fill.png" alt="Icon of a Clock">
                    </div>
                    <div class="contact-row-text">
                        <h2>
                            Working time
                        </h2>
                        <p>
                            Monday-Friday: 9:00 - 22:00
                            <span class="new-line">Saturday-Sunday: 9:00 - 21:00</span>
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && $submitContact)
                {
                    echo "<div id='post-submit-text'>Thank you for reaching out to us! 
                                <span class='new-line'>We will contact you soon!</span></div>";
                }
                else
                {
                    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"]?>" id="contact-form" method='POST'>
                        <div class="contact-form-row">
                            <div class="contact-labels">
                                <label for="contactName" id="name">Your Name</label>
                            </div>
                            <div>
                                <input type="text" name="contactName" id="contact-name-input" class="contact-input" 
                                placeholder="Steve" required>
                            </div>
                        </div>
                        <div class="contact-form-row">
                            <div class="contact-labels">
                                <label for="contactEmail" id="contact-email">Email Address</label>
                            </div>
                            <div>
                                <input type="email" name="contactEmail" id="contact-email-input" class="contact-input"
                                placeholder="steve.jobs@banana.com" required>
                            </div>
                        </div>
                        <div class="contact-form-row">
                            <div class="contact-labels">
                                <label for="contactSubject" id="contact-subject">Subject</label>
                            </div>
                            <div>
                                <input type="text" name="contactSubject" id="contact-subject-input" class="contact-input"
                                placeholder="There's only 1 subject..." required>
                            </div>
                        </div>
                        <div class="contact-form-row">
                            <div class="contact-labels">
                                <label for="contactMessage" id="contact-message">Message</label>
                            </div>
                            <div>
                                <textarea type="text" name="contactMessage" id="contact-message-input" class="contact-input"
                                placeholder="In the array of my interests, you are [1]!" rows="5" required></textarea>
                            </div>
                        </div>
                         <input type="hidden" name="submitContact" value="true">
                        <button type="submit" value="Contact" name="navBtn" id="contact-submit">Submit</button>
                    </form>

                    <?php
                    
                }

                ?>
                
            </div>
        </div>
    </section>
    <div id="contact-footer">
        <div class="contact-footer-item">
            <div class="contact-footer-img">
                <img src="resources/contactPage/trophy 1.png" alt="Icon of a trophy">
            </div>
            <div class="contact-footer-text">
                <h2>
                    High Quality
                </h2>
                <p>
                    Crafted from top materials
                </p>
            </div>
        </div>
        <div class="contact-footer-item">
            <div class="contact-footer-img">
                <img src="resources/contactPage/guarantee.png" alt="Guarantee icon">
            </div>
            <div class="contact-footer-text">
                <h2>
                    Warranty Protection
                </h2>
                <p>
                    Over 2 years
                </p>
            </div>
        </div>
        <div class="contact-footer-item">
            <div class="contact-footer-img">
                <img src="resources/contactPage/shipping.png" alt="Shipping icon">
            </div>
            <div class="contact-footer-text">
                <h2>
                    Free Shipping
                </h2>
                <p>
                    Order over &#8364;&#160;150
                </p>
            </div>
        </div>
        <div class="contact-footer-item">
            <div class="contact-footer-img">
                <img src="resources/contactPage/customer-support.png" alt="Support icon">
            </div>
            <div class="contact-footer-text">
                <h2>
                    Available 24/7 
                </h2>
                <p>
                    Dedicated support
                </p>
            </div>
        </div>
    </div>
</div>