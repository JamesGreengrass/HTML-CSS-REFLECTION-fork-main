<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Netmatters | Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
        <!-- Normalize and CSS stylesheets -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/hamburgers.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.css">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    </head>

    <body>
        <?php
        include("inc/functions.php");
        $news = full_news_array();
        ?>
        <div id="body">
            <!-- HTML for cookie app -->
            <div id="cookie-app">
                <div class="cookie-consent" id="popup">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Cookies Policy</h3>
                            </div>
                            <div class="modal-body">
                                <p>Our website uses cookies. This helps us provide you with a good experience on our website. 
                                    To see what cookies we use and what they do, and to opt-in on non-essential cookies click 
                                    "change settings". For a detailed explanation, click on <a href="#">"Privacy Policy"</a> otherwise click 
                                    "Accept Cookies" to enter.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <div class="modal-buttons">
                                    <div class="button-cont-one spacer-xs">
                                        <a class="btn btn-default btn-block" id="open-settings" onclick="openSettings()">Change Settings</a>
                                    </div>
                                    <div class="button-cont-two">
                                        <a class="btn btn-wd btn-block" id="accept">Accept Cookies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cookie-settings" id="settings">
                    <div class="container-c">
                        <h3>Cookies Preferences</h3>
                        <h5>Netmatters uses cookies on their website. Cookies are small text files that are stored on your 
                            computer or other device by websites that you visit. This page explains the cookies we use and what we use them for,
                            and lets you turn them on or off. (Some cookies are necessary in order for our website to work properly.) 
                            We also explain below which other companies use cookies on our website and what they use them for, and lets 
                            you turn those other companies' cookies on or off.
                        </h5>
                        <h5>Our website uses cookies in order to make the website easier to use, to support the provision of information 
                            and functionality to you, as well as to provide us with information about how the website is used so that we 
                            can make sure it is as up to date, relevant and error free as we can. We also use cookies to try to ensure that 
                            our online adverts reflect the interests of web users. Further information about the types of cookies that are 
                            used on our website is set out box below.
                        </h5>
                        <h5>As well as the options provided below, you can choose to restrict or block cookies through your browser 
                            settings at any time. For more information about how to do this, and about cookies in general, you can
                            visit www.cookiepedia.co.uk and www.youronlinechoices.eu. However, please be aware that restricting or 
                            blocking cookies set on our website may impact the functionality or performance of the website, or
                            prevent you from using certain services provided through the website
                        </h5>
                        <h5>Please note that third parties (including, for example, advertising networks and providers of external services
                            like website analysis services) may also use cookies, over which we have no control, although we may receive 
                            services from these third parties (including, for example, for targeted advertising purposes and website analytics).
                            These cookies are likely to be performance cookies or targeting cookies (as described below).
                        </h5>
                    </div>
                    <div class="container-c">
                        <h1>Functional Cookies</h1>
                        <h5>Functional cookies allow our website to remember choices you make, such as your user name, log in details or 
                            language preferences, and any customisations you make to pages on our website during your visit.
                        </h5>
                        <h4>Examples of how we use these cookies include:</h4>
                        <ul>
                            <li>
                                
                                <h5>Live chat</h5>
                            </li>
                        </ul>
                        <div class="buttons">
                            <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                            <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                        </div>
                    </div>
                    <div class="container-c">
                        <h1 id="pac">Performance & Analytics</h1>
                        <h5>These cookies help us understand how people use our website. They collect information such as 
                            which pages on our website visitors go to most often, which features they use, and which websites
                            people have visited before they visit ours. We use this information to improve our website and 
                            provide a better user experience.
                        </h5>
                        <h4>Examples of how we use these cookies include:</h4>
                        <ul>
                            <li>Monitoring and providing statistics on how our website is used.</li>
                            <li>Helping us improve our website by measuring any errors that occur.</li>
                            <li>Testing the website's design and operability.</li>
                        </ul>
                        <div class="buttons">
                            <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                            <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                        </div>
                    </div>
                    <div class="container-c">
                        <h5 id="dif-5">Different web browsers may use different methods for managing cookies. Please follow the instructions below, 
                            from the web browser manufacturers directly, to configure your browser settings*.
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Microsoft Internet Explorer (IE)</a>
                            </li>
                            <li>
                                <a href="#">Google Chrome</a>
                            </li>
                            <li>
                                <a href="#">Safari</a>
                            </li>
                            <li>
                                <a href="#">Firefox</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container-c">
                        <div class="btn btn-default" id="unhide">Show detailed preferences</div>
                        <div class="table">
                            <table id="tab"> 
                                <tbody>
                                    <tr>
                                        <td class="th">Company</td>
                                        <td class="th">Domain</td>
                                        <td class="th"></td>
                                    </tr>
                                </tbody> 
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>Lead Forensics</span>
                                            </span>
                                        </td>
                                        <td>
                                            https://web.archive.org/web/20220408074701/https://www.leadforensics.com/
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>3CX</span>
                                            </span>
                                        </td>
                                        <td>
                                            https://web.archive.org/web/20220408074701/https://netmatters.co.uk/
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>Hotjar Ltd</span>
                                            </span>
                                        </td>
                                        <td>
                                            hotjar.com
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>LinkedIn Corporation</span>
                                            </span>
                                        </td>
                                        <td>
                                            licdn.com
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>Facebook Inc.</span>
                                            </span>
                                        </td>
                                        <td>
                                            facebook.com, facebook.net
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="pointer">
                                                <span>+</span>
                                                <span>Google Inc.</span>
                                            </span>
                                        </td>
                                        <td>
                                            google.com, googletagmanager.com, google-analytics.com
                                        </td>
                                        <td>
                                            <div class="buttons table-buttons">
                                                <button type="button" class="btn btn-wd cookie-btn-D">Disable</button>
                                                <button type="button" class="btn btn-default btn-light cookie-btn-E">Enable</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container-c actions">
                        <div class="buttons">
                            <button type="button" class="btn btn-default" id="cancel-settings">Cancel</button>
                            <button type="button" class="btn btn-wd" id="continue">Continue to website</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" id="main">
                <div class="main-overlay" id="main-overlay"></div>
                <!-- HTML for header -->
                <?php
                include ('php/header.php');
                ?>
                    <!-- HTML for main navigation -->
                    <div class="main-navigation">
                        <div class="bar-container">
                            <ul>
                                <li class="software">
                                    <a href="#">
                                        <span class="icon-apps"></span>
                                        <small>Bespoke</small>
                                        Software
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Workflow
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Automation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Integration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Database
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Sharepoint
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Navision
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="it">
                                    <a href="#">
                                        <span class="icon-monitor"></span>
                                        <small>IT</small>
                                        Support
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Managed IT
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business IT
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Office 365
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Consultancy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Cloud Provider
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Data Backup
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="digital">
                                    <a href="#">
                                        <span class="icon-bars"></span>
                                        <small>Digital</small>
                                        Marketing
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Search (SEO)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Paid (PPC)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Conversion (CRO)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Email
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Social Media
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Content
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="telecoms">
                                    <a href="#">
                                        <span class="icon-phone_in_talk"></span>
                                        <small>Telecoms</small>
                                        Services
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Business Mobile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Hosted Voip
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business Voip
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business Brpadband
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Leased Line
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                3CX Systems
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="web">
                                    <a href="#">
                                        <span class="icon-code"></span>
                                        <small>Web</small>
                                        Design
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Stylish Websites
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Ecommerce Stores
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Branding
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Apps
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Web Hosting
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Pay Monthly Websites
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="security">
                                    <a href="#">
                                        <span class="icon-security"></span>
                                        <small>Cyber</small>
                                        Security
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Assessment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Penetration Testing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Cyber Essentials
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                PCI/DSS
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Hacker Prevention
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="developer-course">
                                    <a href="#">
                                        <span class="icon-school"></span>
                                        <small>Developer</small>
                                        Training
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" >
                                                Train For A Career In Tech
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Scion Scheme Frequently Asked Questions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Scion Collaborators
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                <!-- HTML for banner -->
                <div class="banner">
                    <div class="owl-carousel">
                        <div class="item ti00">
                            <div class="text bar-container">
                                <h1>Bespoke Software</h1>
                                <p>
                                    Bring your business together
                                    <br>
                                    with solutions that grow with you.
                                </p>
                                <a href="#" class="btn btn-software btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="item ti00 ti01">
                            <div class="text bar-container">
                                <h1>IT Support</h1>
                                <p>
                                    Fast and cost-effective IT Support
                                    <br>
                                    services for your business.
                                </p>
                                <a href="#" class="btn btn-s-two btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="item ti00 ti02">
                            <div class="text bar-container">
                                <h1>Digital Marketing</h1>
                                <p>
                                    Generating you new business through
                                    <br>
                                    results-driven marketing activities.
                                </p>
                                <a href="#" class="btn btn-dm btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="item ti00 ti03">
                            <div class="text bar-container">
                                <h1>Telecoms Services</h1>
                                <p>
                                    A new approach to connectivity, see how
                                    <br>
                                    we can help your business.
                                </p>
                                <a href="#" class="btn btn-t btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="item ti00 ti04">
                            <div class="text bar-container">
                                <h1>Web Design</h1>
                                <p>
                                    For businesses looking to make a strong
                                    <br>
                                    and effective first impression.
                                </p>
                                <a href="#" class="btn btn-wd btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="item ti00 ti05">
                            <div class="text bar-container">
                                <h1>Cyber Security</h1>
                                <p>
                                    Keeping businesses and their customers
                                    <br>
                                    sensitive information protected.
                                </p>
                                <a href="#" class="btn btn-cs btn-lg">
                                    Find out more
                                    <span class="icon-arrow-right">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HTML for middle -->
                <div id="middle">
                    <!-- HTML for service cards -->
                    <section class="sc-cards">
                        <div class="sc-container">
                            <a href="#" class="block block-one">
                                <span class="icon btn-soft">
                                    <span class="icon-apps"></span>
                                </span>
                                <h2>Bespoke Software</h2>
                                <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                                <span class="btn btn-soft">Read More</span>
                            </a>
                            <a href="#" class="block block-two">
                                <span class="icon btn-s-two">
                                    <span class="icon-monitor"></span>
                                </span>
                                <h2>IT Support</h2>
                                <p>Remotely managed it services catered to your businesses needs, adds value and reduces costs.</p>
                                <span class="btn btn-s-two">Read More</span>
                            </a>
                            <a href="#" class="block block-three">
                                <span class="icon btn-dm">
                                    <span class="icon-bars"></span>
                                </span>
                                <h2>Digital Marketing</h2>
                                <p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
                                <span class="btn btn-dm">Read More</span> 
                            </a>
                            <a href="#" class="block block-four">
                                <span class="icon btn-t">
                                    <span class="icon-phone_in_talk"></span>
                                </span>
                                <h2>Telecoms Services</h2>
                                <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                                <span class="btn btn-t">Read More</span>
                            </a>
                            <a href="#" class="block block-five">
                                <span class="icon btn-wd">
                                    <span class="icon-code"></span>
                                </span>
                                <h2>Web Design</h2>
                                <p>User-centric design for businesses looking to make a lasting first impression.</p>
                                <span class="btn btn-wd">Read More</span>
                            </a>
                            <a href="#" class="block block-six">
                                <span class="icon btn-cs">
                                    <span class="icon-security"></span>
                                </span>
                                <h2>Cyber Security</h2>
                                <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
                                <span class="btn btn-cs">Read More</span>
                            </a>
                            <a href="#" class="block block-seven">
                                <span class="icon btn-dt">
                                    <span class="icon-school"></span>
                                </span>
                                <h2>Developer Training</h2>
                                <p>Have you considered a career in web development but you aren't sure where to start?</p>
                                <span class="btn btn-dt">Read More</span>
                            </a>
                        </div>
                    </section>
                    <!-- HTML for brand section -->
                    <div>
                        <div class="brand-bg">
                            <div class="brand-container">
                                <div class="brand-text">
                                    <div class="h1">Netmatters</div>
                                    <p>
                                        <b>
                                            Netmatters Ltd is a leading web design, IT support and digital marketing agency based
                                            in the East of England with offices in Cambridge, Wymondham and Great Yarmouth.
                                        </b>
                                    </p>
                                    <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects,
                                        nurture existing leads and further grow their sales.</p>
                                    <p>We provide cost effective, reliable solutions to a range of services; from bespoke
                                        cloud-based management systems, workflow and IT solutions through to creative website 
                                        development and integrated digital campaigning.</p>
                                    <a href="#" class="btn btn-oc">
                                        Our Culture 
                                        <span class="icon-arrow-right">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HTML for latest articles -->
                    <section>
                        <div class="latest-articles">
                            <div class="bar">
                                <div class="bar-container">
                                    <ul>
                                        <li class="active">
                                            <span>
                                                Latest
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="section">
                                <div class="bar-container">
                                    <div class="article-list-flex">
                                        <div class="article-box" id="abox-one">
                                            <a href="#" class="category" title="View all: Web Design / News"> News </a>
                                            <div class="img-hover-zoom">
                                                <a>
                                                    <img src="assets/img/scs-graduates-march-e5Cg.webp" alt="SCS Graduates March">
                                                </a>
                                            </div>
                                            <div class="article block ar">
                                                <h3>
                                                    <a href="#">SCS Graduates March 2022</a>
                                                </h3>
                                                <p>
                                                    At Netmatters we found that there was a growing gap in the tech industry for talented individuals. W...
                                                </p>
                                                <a class="btn btn-wd" href="#">
                                                    Read More
                                                </a>
                                                <div class="user">
                                                    <div class="avatar">
                                                        <img src="assets/img/avatar.webp" alt="Netmatters Logo">
                                                    </div>
                                                    <div class="details">
                                                        <p>
                                                            <b class="d-text">
                                                                Posted by Netmatters Ltd
                                                            </b>
                                                            <br>
                                                            7th April 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-box" id="abox-two">
                                            <a href="#" class="category" title="View all: Web Design / News"> News </a>
                                            <div class="img-hover-zoom">
                                                <a>
                                                    <img src="assets/img/march-notables-2022-1R6Z.webp" alt="March Notables 2022">
                                                </a>
                                            </div>
                                            <div class="article block ar">
                                                <h3>
                                                    <a href="#">March Notables 2022</a>
                                                </h3>
                                                <p>
                                                    Every month, we take great pleasure in celebrating the success of our notable employees. Across all...
                                                </p>
                                                <a class="btn btn-wd" href="#">
                                                    Read More
                                                </a>
                                                <div class="user">
                                                    <div class="avatar">
                                                        <img src="assets/img/avatar.webp" alt="Netmatters Logo">
                                                    </div>
                                                    <div class="details">
                                                        <p>
                                                            <b class="d-text">
                                                                Posted by Netmatters Ltd
                                                            </b>
                                                            <br>
                                                            6th April 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-box" id="abox-three">
                                            <a href="#" class="category" title="View all: Web Design / News"> News </a>
                                            <div class="img-hover-zoom">
                                                <a>
                                                    <img src="assets/img/jimmy-wright-achieves-86HD.webp" alt="Jimmy Wright Article">
                                                </a>
                                            </div>
                                            <div class="article block ar">
                                                <h3>
                                                    <a href="#">Jimmy Wright Achieves The Long Service Award</a>
                                                </h3>
                                                <p>
                                                    From Trainee to Legend... We feel it is important to congratulate our team...
                                                </p>
                                                <a class="btn btn-wd" href="#">
                                                    Read More
                                                </a>
                                                <div class="user">
                                                    <div class="avatar">
                                                        <img src="assets/img/avatar.webp" alt="Netmatters Logo">
                                                    </div>
                                                    <div class="details">
                                                        <p>
                                                            <b class="d-text">
                                                                Posted by Netmatters Ltd
                                                            </b>
                                                            <br>
                                                            4th April 2022
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- HTML for the smaller section containing logos of clients -->
                    <section class="sc-logos">
                        <div class="section bar-container">
                            <div class="small-client-flex">
                                <div class="sc-item">
                                    <div class="description">
                                        <div class="box">
                                            <h3>Busseys</h3>
                                            <p>One of the UK's leading Ford dealerships.</p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img src="assets/img/busseys-colour.png" alt="Busseys logo in colour">
                                </div>
                                <div class="sc-item">
                                    <div class="description">
                                        <div class="box">
                                            <h3>Crane Garden Builders</h3>
                                            <p>Leading manafacturer and supplier of high-end
                                                garden rooms, summerhouses, workshops and
                                                sheds in the UK.
                                            </p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img src="assets/img/crane-colour.png" alt="Crane logo in colour">
                                </div>
                                <div class="sc-item">
                                    <div class="description">
                                        <div class="box">
                                            <h3>Beat</h3>
                                            <p>The UK's eating disorder charity founded in 1989.</p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img src="assets/img/beat-colour.png" alt="Beat logo in colour">
                                </div>
                                <div class="sc-item">
                                    <div class="description">
                                        <div class="box">
                                            <h3>Northern Diver</h3>
                                            <p>Global water based equipment manufacturers for sport,
                                                military, commercial and rescue businesses.
                                            </p>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <img src="assets/img/northern-diver-colour.png" alt="Northern Diver logo in colour">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- HTML for the newsletter -->
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
                <?php
                include ('php/footer.php')
                ?>
                <!-- HTML for the accreditations -->
                <div class="accreditations">
                    <div class="bar-container">
                        <div class="list">
                            <div class="item">
                                <div style="position: absolute; width: 450px; left: -10000px;"></div>
                            </div>
                            <div class="item">
                                <img src="assets/img/silver-microsoft-partner.jpg" alt="Silver Microsoft logo">
                            </div>
                            <div class="item">
                                <img src="assets/img/future-50-colour.jpg" alt="Future-50 logo in colour">
                            </div>
                            <div class="item">
                                <img src="assets/img/iqs-colour.jpg" alt="IQS logo in colour">
                            </div>
                            <div class="item">
                                <img src="assets/img/carbon-colour.jpg" alt="Carbon logo in colour">
                            </div>
                        </div>
                        <div class="list sr">
                            <div class="item">
                                <img src="assets/img/investing-in-future-growth-colour.jpg" alt="Investing in future growth logo in colour">
                            </div>
                            <div class="item">
                                <img src="assets/img/princess-royal-training-award-colour.jpg" alt="Princess royal training award in colour">
                            </div>
                            <div class="item">
                                <img src="assets/img/skills-of-tomorrow-colour.jpg" alt="Skills of tomorrow logo in colour">
                            </div>
                            <div class="item">
                                <img src="assets/img/PPC_colour.jpg" alt="PPC logo in colour">
                            </div>
                        </div>
                    </div>
                </div>
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
            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/main.js"></script>
            <script src="owlcarousel/owl.carousel.js"></script>
        </div>
    </body>
</html>