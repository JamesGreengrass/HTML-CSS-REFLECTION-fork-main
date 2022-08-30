<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Netmatters | Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
        <!-- Normalize and CSS stylesheets -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/hamburgers.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>

    <body>
        <div class="main" id="main">
            <div class="main-overlay" id="main-overlay"></div>
            <!-- HTML for header -->
            <?php include ('header-otp.php'); ?>
                <!-- HTML for main-navigation -->
                <?php include ('main-navigation.php'); ?>
            </header>
            <div id="middle">
                <div class="breadcrumb-container">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>Our Offices</li>
                        </ul>
                    </div>
                </div>
                <div class="section-top">
                    
                </div>
                <section>
                    <div class="newsletter-bg">
                        <div class="bar-container">
                            <form method="POST" action="#" accept-charset="UTF-8" id="sign-up" class="sign-up">
                                <h2>Email Newsletter Sign-Up</h2>
                                <div class="sign-up-inputs">
                                    <div class="sign-up-input">
                                        <div class="form-group">
                                            <label for="newsletter-name">
                                                Your Name
                                                <span class="required">*</span>
                                            </label>
                                            <input class="form-control" id="newsletter-name" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="sign-up-input">
                                        <div class="form-group">
                                            <label for="newsletter-email">
                                                Your Email
                                                <span class="required">*</span>
                                            </label>
                                            <input class="form-control" id="newsletter-email" name="email" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pretty-checkbox">
                                        <span class="media">
                                            <span class="media-left checkbox-left">
                                                <input type="checkbox">
                                                <span class="button"></span>
                                            </span>
                                            <span class="media-body">
                                                Please tick this box if you wish to receive marketing information from us. 
                                                Please see our
                                                <a href="#" target="_blank">Privacy Policy</a>
                                                for more information on how we use your data.
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <button name="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <!-- HTML for the footer -->
            <?php include ('footer.php'); ?>
        </div>
        <!-- HTML for slide-out menu -->
        <div class="sidebar" id="sidebar">
                <div class="sidebar-small">
                    <ul>
                        <li class="con-sm"><a href="#">Contact Us</a></li>
                        <li><a href="#" class="software">
                                <span class="icon-apps"></span>
                                <small>Bespoke</small>
                                Software
                            </a>
                            <ul>
                                <li><a href="#">Workflow</a></li>
                                <li><a href="#">Automation</a></li>
                                <li><a href="#">Integration</a></li>
                                <li><a href="#">Database</a></li>
                                <li><a href="#">SharePoint</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Navision</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="support">
                                <span class="icon-monitor"></span>
                                <small>IT</small>
                                Support
                            </a>
                            <ul>
                                <li><a href="#">Managed IT</a></li>
                                <li><a href="#">Business IT</a></li>
                                <li><a href="#">Office 365</a></li>
                                <li><a href="#">Consultancy</a></li>
                                <li><a href="#">Cloud Provider</a></li>
                                <li><a href="#">Data Backup</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="digital">
                                <span class="icon-bars"></span>
                                <small>Digital</small>
                                Marketing
                            </a>
                            <ul>
                                <li><a href="#">Search (SEO)</a></li>
                                <li><a href="#">Paid (PPC)</a></li>
                                <li><a href="#">Conversion (CRO)</a></li>
                                <li><a href="#">Email</a></li>
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">Content</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="telecoms">
                                <span class="icon-phone_in_talk"></span>
                                <small>Telecoms</small>
                                Services
                            </a>
                            <ul>
                                <li><a href="#">Business Mobile</a></li>
                                <li><a href="#">Hosted VOIP</a></li>
                                <li><a href="#">Business VOIP</a></li>
                                <li><a href="#">Business Broadband</a></li>
                                <li><a href="#">Leased Line</a></li>
                                <li><a href="#">3CX Systems</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="web">
                                <span class="icon-code"></span>
                                <small>Web</small>
                                Design
                            </a>
                            <ul>
                                <li><a href="#">Stylish Websites</a></li>
                                <li><a href="#">Ecommerce Stores</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Apps</a></li>
                                <li><a href="#">Web Hosting</a></li>
                                <li><a href="#">Pay Monthly Websites</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="security">
                                <span class="icon-security"></span>
                                <small>Cyber</small>
                                Security
                            </a>
                            <ul>
                                <li><a href="#">Assessment</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Penetration Testing</a></li>
                                <li><a href="#">Cyber Essentials</a></li>
                                <li><a href="#">PCI/DSS</a></li>
                                <li><a href="#">Hacker Prevention</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="school">
                                <span class="icon-school"></span>
                                <small>Developer</small>
                                Training
                            </a>
                            <ul>
                                <li><a href="#">Train For A Career In Tech</a></li>
                                <li><a href="#">Scion Scheme Frequently Asked Questions</a></li>
                                <li><a href="#">Scion Collaborators</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-al">
                    <li class="sidebar-serv">
                        <a href="#">Services</a>
                        <ul>
                            <li><a href="#">Bespoke Software</a></li>
                            <li><a href="#">IT Support</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Telecoms Services</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Cyber Security</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Training</a>
                        <ul>
                            <li>
                                <a href="#">Train For A Career In Tech</a>
                            </li>
                            <li>
                                <a href="#">SCS Frequently Asked Questions</a>
                            </li>
                            <li>
                                <a href="#">Scion Collaborators</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Events</a>
                        <ul>
                            <li>
                                <a href="#">Business Automation Seminar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Company</a>
                        <ul>
                            <li>
                                <a href="#">Our Culture</a>
                            </li>
                            <li>
                                <a href="#">Our Team</a>
                            </li>
                            <li>
                                <a href="#">Our Careers</a>
                            </li>
                            <li>
                                <a href="#">Our Benefits</a>
                            </li>
                            <li>
                                <a href="#">IT Support Great Yarmouth</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Work</a>
                        <ul>
                            <li>
                                <a href="#">Case Studies</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Knowledge</a>
                        <ul>
                            <li>
                                <a href="#">Guides</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Insights</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">COVID Risk Assessments</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                        <ul>
                            <li>
                                <a href="#">Cambridge Office</a>
                            </li>
                            <li>
                                <a href="#">Wymondham Office</a>
                            </li>
                            <li>
                                <a href="#">Great Yarmouth Office</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>
            </div>
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/main-otp.js"></script>
    </body>
</html>