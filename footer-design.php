
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
    
@media (max-width: 576px) {
    .mobile-four {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
    }

    .mobile-four li {
        list-style: none;
    }
}

        * {
            font-family: 'Inter', sans-serif;
        }

        .footer {
            background: #000073;
            padding: 50px 0 0;
            position: relative;
            overflow: hidden;
            text-align: left;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #04d36f, #ffffff, #04d36f);
            background-size: 200% 100%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .footer-section {
            margin-bottom: 25px;
            animation: fadeInUp 0.6s ease-out;
        }

        .footer-section:nth-child(1) { animation-delay: 0.1s; }
        .footer-section:nth-child(2) { animation-delay: 0.2s; }
        .footer-section:nth-child(3) { animation-delay: 0.3s; }
        .footer-section:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer h5 {
            color: #ffffff;
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #04d36f, transparent);
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .footer-section:hover h5::after {
            width: 80px;
        }

        .contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-info li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            transition: all 0.3s ease;
        }

        .contact-info li:hover {
            transform: translateX(5px);
        }

.contact-info .icon-wrapper {
    width: 30px;
    height: 30px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

        .contact-info li:hover .icon-wrapper {
            background: linear-gradient(135deg, #04d36f, #02a855);
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 5px 15px rgba(4, 211, 111, 0.3);
        }

        .contact-info i {
            color: #ffffff;
            font-size: 16px;
        }

        .contact-info a {
            text-decoration: none;
            color: #e0e0ff;
            transition: color 0.3s ease;
            font-size: 15px;
            line-height: 1.6;
        }

        .contact-info a:hover {
            color: #04d36f;
        }

        .contact-info span {
            color: #e0e0ff;
            font-size: 15px;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #e0e0ff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            position: relative;
            padding-left: 0;
        }

        .footer-links a::before {
            content: '→';
            opacity: 0;
            transform: translateX(-10px);
            transition: all 0.3s ease;
            color: #04d36f;
            font-weight: 700;
        }

        .footer-links a:hover::before {
            opacity: 1;
            transform: translateX(0);
        }

        .footer-links a:hover {
            color: #04d36f;
            padding-left: 20px;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

  .social-icon {
    width: 38px;
    height: 38px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 7px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    position: relative;
    overflow: hidden;
}

        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #04d36f, #02a855);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .social-icon i {
            position: relative;
            z-index: 1;
            font-size: 18px;
            transition: all 0.4s ease;
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(4, 211, 111, 0.4);
        }

        .social-icon:hover::before {
            opacity: 1;
        }

        .social-icon:hover i {
            color: #fff;
            transform: scale(1.2);
        }

        .footer-about {
            color: #c0c0ff;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 25px;
        }

        .footer-newsletter {
            position: relative;
            margin-top: 25px;
        }

      .newsletter-wrapper {
    position: relative;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}
input#newsemail::placeholder {
    color: #000000ad;
}
        .newsletter-wrapper:focus-within {
            box-shadow: 0 8px 25px rgba(4, 211, 111, 0.3);
            transform: translateY(-2px);
        }

       .footer-newsletter input {
    padding: 11px 60px 11px 24px;
    border-radius: 6px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    width: 100%;
    background: white;
    color: black;
    outline: none;
    font-size: 15px;
    transition: all 0.3s ease;
}

        .footer-newsletter input:focus {
            border-color: #04d36f;
            background: white;
        }

        .footer-newsletter input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

.newsletter-btn {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 49px;
    height: 34px;
    border-radius: 5px;
    background: linear-gradient(135deg, #04d36f, #02a855);
    border: none;
    color: #fff;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(4, 211, 111, 0.3);
}

        .newsletter-btn:hover {
            background: linear-gradient(135deg, #05e680, #04d36f);
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 20px rgba(4, 211, 111, 0.5);
        }

        .newsletter-btn i {
            font-size: 16px;
        }

        #newsletterMsg {
            margin-top: 12px;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        #newsletterMsg.success {
            background: rgba(4, 211, 111, 0.2);
            color: #04d36f;
        }

        #newsletterMsg.error {
            background: rgba(255, 82, 82, 0.2);
            color: #ff5252;
        }

        .footer-bottom {
            /*margin-top: 60px;*/
            text-align:center;
            padding: 30px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 115, 0.5);
        }

        .footer-bottom p {
            color: #c0c0ff;
            margin-bottom: 8px;
            font-size: 10px;
            line-height: 1.8;
        }

        .footer-bottom .copyright {
            text-align:center;
            font-weight: 600;
            color: #e0e0ff;
            font-size: 14px;
            margin-top: 20px;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
            opacity: 0.05;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, #04d36f, #ffffff);
        }

        .shape1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -100px;
            animation: float 20s ease-in-out infinite;
        }

        .shape2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -50px;
            animation: float 15s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        @media (max-width: 768px) {
            .footer {
                padding: 60px 0 0;
            }

            .footer h5 {
                font-size: 1.1rem;
                margin-bottom: 20px;
            }

            .social-links {
                justify-content: flex-start;
            }

            .footer-section {
                margin-bottom: 50px;
            }
        }

        .newsletter-btn.loading {
            pointer-events: none;
        }

        .newsletter-btn.loading i {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>

<footer class="footer">
    <div class="floating-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h5>Contact Details</h5>
                <ul class="contact-info">
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span>1309 Coffeen Avenue Ste 1200, Sheridan, WY 82801.</span>
                    </li>
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-phone"></i>
                        </div>
                        <a href="tel:+18333809800">+1 (833) 380-9800</a>
                    </li>
                    <li>
                        <div class="icon-wrapper">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="mailto:service@easyhomeservice.com">service@easyhomeservice.com</a>
                    </li>
                </ul>

                <!-- Social Links -->
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=61565981943953&sk=about" class="social-icon" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/easy-home-service-llc" class="social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/easy_home__service/" class="social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/Easy_Home_" class="social-icon" aria-label="Twitter" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/@EasyHomeService-US" class="social-icon" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.pinterest.com/easyhomeservicee/" class="social-icon" aria-label="Pinterest" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>

            <!-- Support Links -->
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Support</h5>
                <ul class="footer-links">
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Use</a></li>
                    <li><a href="/tcpa">TCPA</a></li>
                    <li><a href="/ccpa">CCPA</a></li>
                    <li><a href="/do-not-call-policy">DNC Policy</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 footer-section col-6">
                <h5>Top Categories</h5>
                <ul class="footer-links mobile-four">
                    <li><a href="/window">Window</a></li>
                    <li><a href="/roofing">Roofing</a></li>
                    <li><a href="/solar">Solar</a></li>
                    <li><a href="/bathroom">Bathroom</a></li>
                    <li><a href="/hvac">HVAC</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6 footer-section">
                <h5>Newsletter</h5>
                <p class="footer-about">
                    Subscribe to our newsletter for expert guidance, new trends, latest blogs,
                    important updates, and essential safety knowledge.
                </p>

                <div class="footer-newsletter">
                    <form method="POST" id="newsletterForm">
                        <div class="newsletter-wrapper">
                            <input
                                type="email"
                                name="newsemail"
                                id="newsemail"
                                placeholder="Enter your email"
                                required
                            >
                            <button type="submit" class="newsletter-btn" aria-label="Subscribe">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div id="newsletterMsg"></div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-12">
                    <p>
                        Easyhomeservice.com is a free service to assist homeowners in connecting with local service providers.
                        All service provider/providers are independent and Easy Home Service does not warrant or guarantee any work performed.
                        It is the responsibility of the homeowner to verify that the hired contractor furnishes the necessary license
                        and insurance required for the work being performed. All persons depicted in a photo or video are actors or models
                        and not service provider listed on easyhomeservice.com.
                    </p>
                    <p class="copyright">
                        © <script>document.write(new Date().getFullYear())</script> Easy Home Service. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
$(document).ready(function () {
    $("#newsletterForm").on("submit", function (e) {
        e.preventDefault();

        let email = $("#newsemail").val();
        let $btn = $(".newsletter-btn");
        let $msg = $("#newsletterMsg");

        $btn.addClass("loading");
        $msg.removeClass("success error").text("");

        $.ajax({
            url: "",
            type: "POST",
            data: { newsemail: email },
            success: function (data) {
                $btn.removeClass("loading");

                let response = (data || "").toString().toLowerCase();

                if (response.includes("success")) {
                    $msg
                        .addClass("success")
                        .text("Thank you for subscribing!");
                    $("#newsemail").val("");
                }
                else if (response.includes("db_error")) {
                    $msg
                        .addClass("error")
                        .text("Database connection error. Please try later.");
                }
                else if (response.includes("insert_error")) {
                    $msg
                        .addClass("error")
                        .text("Could not save your email. Please try again.");
                }
                else {
                    $msg
                        .addClass("error")
                        .text("Something went wrong. Try again!");
                }

                setTimeout(() => {
                    $msg.fadeOut(300, function() {
                        $(this).removeClass("success error").text("").show();
                    });
                }, 5000);
            },
            error: function () {
                $btn.removeClass("loading");
                $msg
                    .addClass("error")
                    .text("Server error! Please try later.");
            }
        });
    });
});
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsemail'])) {

    $servername = "localhost";
    $username = "easyhomeservi_contactform";
    $password = "easyhomeservi_contactform";
    $dbname = "easyhomeservi_contactform";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "db_error";
        exit;
    }

    $email = $conn->real_escape_string($_POST['newsemail']);

    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "insert_error";
    }

    $conn->close();
    exit;
}
?>

