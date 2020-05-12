<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600|Oswald:300,400,500&display=swap" rel="stylesheet">
    
    <link rel="icon" href="./images/favicon.png" sizes="32x32" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="./script/styling.js"></script>
    <script src="./script/validation.js"></script>

    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/base.css">
    <link rel="stylesheet" href="./style/mobile.css">
    <link rel="stylesheet" href="./style/desktop.css">
    
    <title>LIC Agent Recruitment</title>
</head>
<body>
    <div class="mask"></div>
    <div class="regmodal animated flash">
        <div class="closeicon" onclick="closeModal()"></div>
        <div class="heading">
            <h1>Register now</h1>
            <h2>Be an LIC Agent</h2>
        </div>
        <form action="./RegistrationMailHandler.php" method="post">
            <div class="input">
                <input type="text" name="name" id="name" required placeholder="Full Name">
                <div class="form-error" id="ename">
                    <span>Name cannot be empty</span>
                </div>
            </div>
            <div class="input">
                <input type="text" name="phone" id="phone" required placeholder="Phone">
                <div class="form-error" id="ephone">
				    <span>This phone number is not valid in India</span>
                </div>
            </div>
            <div class="input">
                <input type="text" name="pan" id="pan" required placeholder="PAN Number">
                <div class="form-error" id="epan">
			    	<span>This does not look like a valid Indian PAN Number</span>
                </div>
            </div>
            <div class="input">
                <input type="email" name="email" id="email" required placeholder="Email">
                <div class="form-error" id="eemail">
				    <span>Looks like this is not an email</span>
                </div>
            </div>
            <button onclick="validate()">Submit</button>
        </form>
    </div>
    <div class="menu">
        <div class="links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./about.html">About Me</a></li>
            <li><a href="./queries.html">Your Queries</a></li>
            <li><a href="./register.html">Become an Agent</a></li>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/pinakiranjan.dubey"><img src="./images/facebook-icon.svg"></a>
            <a href="#"><img src="./images/instagram-icon.svg"></a>
            <a href="https://mobile.twitter.com/prdubey2"><img src="./images/twitter-icon.svg"></a>
        </div>
    </div>

    <nav>
        <img src="./images/hamburger-icon.svg" class="hamburger" onclick="toggleMenu()">
        <div class="links left">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./about.html">About Me</a></li>
        </div>
        <img src="./images/logo-white-bg.png" class="logo">
        <div class="links right">
            <li><a href="./queries.html">Your Queries</a></li>
            <li><a href="./register.html">Become an Agent</a></li>
        </div>
    </nav>

    <div class="home hero wow animated fadeIn">
        <div class="heading-wrapper animated fadeInUp">
            <h1 class="heading">Become Independent today</h1>
            <h2 class="subheading">Be an LIC Agent</h2>
            <a href="./register.html"><button class="calltoaction">Apply Now</button></a>
        </div>
        <img src="./images/scroll-dn-icon.png" class="dn-arrow wow animated infinite bounce" data-wow-duration="1.5s">
    </div>

    <div class="content">
        <div class="article wow slideInLeft" data-wow-delay=".25s" id="art1">
            <div class="img"><img src="./images/lic-intro-illustration.jpg"></div>
            <h2>An introduction to LIC.</h2>
            <p>
                India’s largest life insurance company, The Life
                Insurance Corporation (LIC) of India, has footprints
                across the country and its market share continues
                to make it the dominant player in the life insurance
                industry. It has an unmatched reach with eight zonal
                offices, 113 divisional offices, 2,048 branch offices
                & 1,275 Satellite Offices. LIC draws its strength from
                over 1.16 lac employees and more than 1.2 million
                agents.  <a href="#">Know More...</a>
            </p>
        </div>
        <div class="article wow slideInUp" data-wow-delay=".25s" id="art2">
            <div class="img"><img src="./images/lic-agent-illustration.jpg"></div>
            <h2>Who is an LIC Agent?</h2>
            <p>
                Life insurance agents are hired by insurance
                companies and they act as the main link 
                between the insurance company and the 
                insured. Their role is to recommend their 
                clients the right products that address the 
                clients’ needs. At the same time, they must act
                in the interests of the insurance company by
                using their unique position of knowing their 
                clients well enough to protect the insurance 
                company from any undue adverse product
                selection. <a href="#">Know More...</a>
            </p>
        </div>
        <div class="article wow slideInRight" data-wow-delay=".25s" id="art3">
            <div class="img"><img src="./images/lic-offer-illustration.jpg"></div>
            <h2>What does LIC offer?</h2>
            <p>
                Being an LIC Agent can be a very rewarding
                career. By joining LIC, you will be a part of the
                country’s finest team of life insurance
                agents. LIC takes care of your current earnings
                and guarantees an earning for the future. As 
                an agent, you will be a true entrepreneur. 
                LIC offers you and your customer unmatched
                financial strength and solidity.
                There's no imit to what LIC will offer for your
                careers. <a href="#">Know More...</a>
            </p>
        </div>
    </div>
    <div class="guidecall">
        <div class="wrapper">
            <h1>Guide to become a successfull agent</h1>
            <a href="#"><button>Read Now</button></a>
        </div>
    </div>
    <div class="regdetails">
        <h1>What does it take to be an Agent?</h1>
        <div class="blocks">
            <div class="block eligibility wow slideInLeft" data-wow-delay=".25s">
                <div class="title">
                    <h2>Eligibility Criteria</h2>
                </div>
                <div class="data">
                    <li>
                        <span class="item">Age</span>
                        <span class="value">18 Years And Above (No upper limit)</span>
                    </li>
                    <li>
                        <span class="item">Minimum Qualification</span>
                        <span class="value">10th Pass</span>
                    </li>
                </div>
            </div>
            <div class="block docsneeded wow slideInRight" data-wow-delay=".25s">
                <div class="title">
                    <h2>Documents Needed</h2>
                </div>
                <div class="data">
                    <li>
                        <span class="item">Education Certificates (10th and above)</span>
                        <span class="value">2 Copies</span>
                    </li>
                    <li>
                        <span class="item">PAN Card</span>
                        <span class="value">2 Copies</span>
                    </li>
                    <li>
                        <span class="item">Address Proof</span>
                        <span class="value">2 Copies</span>
                    </li>
                    <li>
                        <span class="item">Aadhaar Card</span>
                        <span class="value">2 Copies</span>
                    </li>
                    <li>
                        <span class="item">Passport Sized Photos</span>
                        <span class="value">4 Copies</span>
                    </li>
                    <li>
                        <span class="item item-only">Bank Account details including Bank Account Number, IFSC And MICR</span>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="regprocess wow zoomIn" data-wow-delay=".25s">
        <h1 class="wow zoomIn">Steps for Registration</h1>
        <div class="stepgroup">
            <div class="block">
                <div class="head">
                    <h2>Step 1 : Registration and submission of Documents</h2>
                    <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/expand-arrow-icon.png" class="expandicon" id="expicon1" onclick="toggleRegprocessContent1()">
                </div>
                <div class="content" id="cont1">
                    <p>
                    Register online on this page with your details and upload the
                    required documents. You will receive a response on your mail
                    very soon.
                </p>
                <a href="./register.html"><button>Register Now</button></a>
                </div>
            </div>
            <div class="wrapper" id="parr1">
                <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/arrow-icon.png" class="processarrow">
            </div>
            <div class="block">
                <div class="head">
                    <h2>Step 2 : Training</h2>
                    <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/expand-arrow-icon.png" class="expandicon" id="expicon2" onclick="toggleRegprocessContent2()">
                </div>
                <div class="content" id="cont2">
                    <p>
                    You will be provided training by LIC experts. You will also be
                    provided with training material.
                    You will then appear for an IRDAI exam conducted by NSEIT.
                </p>
                <a href="#"><button>Know More</button></a>
                </div>
            </div>
            <div class="wrapper" id="parr2">
                <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/arrow-icon.png" class="processarrow">
            </div>
            <div class="block">
                <div class="head">
                    <h2>Step 3 : Licensing</h2>
                    <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/expand-arrow-icon.png" class="expandicon" id="expicon3" onclick="toggleRegprocessContent3()">
                </div>
                <div class="content" id="cont3">
                    <p>
                    On clearing the IRDAI examination you will be
                    awarded an LIC agency.
                </p>
                <a href="./register.html"><button>Register Now</button></a>
                </div>
            </div>
            <div class="wrapper" id="parr3">
                <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/arrow-icon.png" class="processarrow">
            </div>
            <div class="block">
                <div class="head">
                    <h2>Step 4 : Working</h2>
                    <img src="https://lic-agent-recruitment.herokuapp.com/LICProject/images/expand-arrow-icon.png" class="expandicon" id="expicon4" onclick="toggleRegprocessContent4()">
                </div>
                <div class="content" id="cont4">
                    <p>
                    Once you've been licensed, you
                    can work as an LIC Agent and now look forward to make a
                    successful career.
                </p>
                <a href="./register.html"><button>Register Now</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="registercall">
        <h1>Take your first step towards an awesome career</h1>
        <button class="wow animated flash" data-wow-delay=".25s">Register Now</button>
    </div>
    <footer>
        <div class="footercontent">
            <div class="branding">
                <div class="naming">
                    <img src="./images/logo-white-bg.png" class="footer-logo">
                    <h1>LIC Agent Recruitment</h1>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/pinakiranjan.dubey"><img src="./images/facebook-icon-white.svg"></a>
                    <a href="#"><img src="./images/instagram-icon-white.svg"></a>
                    <a href="https://mobile.twitter.com/prdubey2"><img src="./images/twitter-icon-white.svg"></a>
                </div>
            </div>
            <div class="links">
                <li><a href="./about.html">About Me</a></li>
                <li><a href="#">LIC Forms</a></li>
                <li><a href="https://www.irdai.gov.in/">IRDAI</a></li>
                <li><a href="#">NSEIT</a></li>
            </div>
        </div>
        <div class="rights">
            Copyright &copy; Ayush Kumar 2020. All Rights Reserved.
        </div>
    </footer>
</body>
</html>