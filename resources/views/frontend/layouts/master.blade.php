<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="{{ asset('frontend/assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <title>joblist - Job Portal HTML Template </title>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="joblist"></div>
            </div>
        </div>
    </div>

    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="index.html"><img alt="joblist"
                                src="assets/imgs/template/logo.png"></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li class="has-children"><a class="active" href="index.html">Home</a></li>
                            <li class="has-children"><a href="jobs-list.html">Find a Job</a></li>
                            <li class="has-children"><a href="companies-grid.html">Recruiters</a></li>
                            <li class="has-children"><a href="candidates-grid.html">Candidates</a></li>
                            <li class="has-children"><a href="blog-grid.html">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-pricing.html">Pricing Plan</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-signin.html">Signin</a></li>
                                    <li><a href="page-reset-password.html">Reset Password</a></li>
                                    <li><a href="blog-details.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog-grid.html">Blog</a></li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <!-- <a class="text-link-bd-btom hover-up" href="page-register.html">Register</a> -->
                        <a class="btn btn-default btn-shadow ml-40 hover-up" href="page-signin.html">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start-->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="has-children"><a class="active" href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                                    <ul class="sub-menu">
                                        <li><a href="jobs-grid.html">Jobs Grid</a></li>
                                        <li><a href="jobs-list.html">Jobs List</a></li>
                                        <li><a href="job-details.html">Jobs Details </a></li>
                                        <li><a href="job-details-2.html">Jobs Details 2 </a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="companies-grid.html">Recruiters</a>
                                    <ul class="sub-menu">
                                        <li><a href="companies-grid.html">Recruiters</a></li>
                                        <li><a href="company-details.html">Company Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="candidates-grid.html">Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="candidates-grid.html">Candidates Grid</a></li>
                                        <li><a href="candidate-details.html">Candidate Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="blog-grid.html">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-pricing.html">Pricing Plan</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-signin.html">Signin</a></li>
                                        <li><a href="page-reset-password.html">Reset Password</a></li>
                                        <li><a href="page-content-protected.html">Content Protected</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="blog-grid.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://wp.alithemes.com/html/joblist/demos/dashboard"
                                        target="_blank">Dashboard</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="page-signin.html">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="site-copyright">Copyright 2022 &copy; joblist. <br>Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start-->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="has-children"><a class="active" href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                                    <ul class="sub-menu">
                                        <li><a href="jobs-grid.html">Jobs Grid</a></li>
                                        <li><a href="jobs-list.html">Jobs List</a></li>
                                        <li><a href="job-details.html">Jobs Details </a></li>
                                        <li><a href="job-details-2.html">Jobs Details 2 </a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="companies-grid.html">Recruiters</a>
                                    <ul class="sub-menu">
                                        <li><a href="companies-grid.html">Recruiters</a></li>
                                        <li><a href="company-details.html">Company Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="candidates-grid.html">Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="candidates-grid.html">Candidates Grid</a></li>
                                        <li><a href="candidate-details.html">Candidate Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="blog-grid.html">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-pricing.html">Pricing Plan</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-signin.html">Signin</a></li>
                                        <li><a href="page-reset-password.html">Reset Password</a></li>
                                        <li><a href="page-content-protected.html">Content Protected</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="blog-grid.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                        <li><a href="blog-details.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://wp.alithemes.com/html/joblist/demos/dashboard"
                                        target="_blank">Dashboard</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="page-signin.html">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="site-copyright">Copyright 2022 &copy; joblist. <br>Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>

    <main class="main">

        <div class="bg-homepage1"></div>

        <section class="section-box mt-100 mb-100 banner_section">
            <div class="container">
                <div class="banner-hero hero-1">
                    <div class="banner-inner">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
                                <div class="banner-imgs mt-40">
                                    <div class="block-1"><img class="img-responsive" alt="joblist"
                                            src="assets/imgs/page/homepage1/banner1.png"></div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-12">
                                <div class="block-banner">
                                    <h1 class="heading-banner wow animate__animated animate__fadeInUp">Join us &
                                        Explore Thousands
                                        of Jobs</h1>
                                    <div class="banner-description mt-20 wow animate__animated animate__fadeInUp"
                                        data-wow-delay=".1s">
                                        Find Jobs, Employment & Career Opportunities
                                    </div>
                                    <div class="form-find mt-40 wow animate__animated animate__fadeIn"
                                        data-wow-delay=".2s">
                                        <form>
                                            <div class="box-industry">
                                                <select class="form-input mr-10 select-active input-industry">
                                                    <option value="0">Industry</option>
                                                    <option value="1">Software</option>
                                                    <option value="2">Finance</option>
                                                    <option value="3">Recruting</option>
                                                    <option value="4">Management</option>
                                                    <option value="5">Advertising</option>
                                                    <option value="6">Development</option>
                                                </select>
                                            </div>
                                            <select class="form-input mr-10 select-active">
                                                <option value="">Location</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Cura&Ccedil;ao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao S.A.R., China</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="QA">Qatar</option>
                                                <option value="IE">Republic of Ireland</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe
                                                </option>
                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom (UK)</option>
                                                <option value="US">USA (US)</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="WS">Western Samoa</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <input class="form-input input-keysearch mr-10" type="text"
                                                placeholder="Your keyword... ">
                                            <button class="btn btn-default btn-find font-sm">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-100"></div>

        <section class="section-box category_section mt-35">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Popular Job Categories
                        </h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">2024 jobs
                            live - 293 added
                            today.</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-5 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide hover-up">
                                    <a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-palette"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Designer/Creative</h4>
                                                <p class="font-xs">1526<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="far fa-code"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Engineer</h4>
                                                <p class="font-xs">185<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-user-headset"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Call Center</h4>
                                                <p class="font-xs">168<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="far fa-steering-wheel"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Driving</h4>
                                                <p class="font-xs">1856<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-stethoscope"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Hospitality</h4>
                                                <p class="font-xs">165<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-capsules"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Medical/Pharma</h4>
                                                <p class="font-xs">965<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-gavel"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Law/Legal</h4>
                                                <p class="font-xs">563<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fab fa-gg-circle"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Others</h4>
                                                <p class="font-xs">254<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <a href="jobs-grid.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-suitcase-rolling"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Travel/ Tourism</h4>
                                                <p class="font-xs">142<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="jobs-list.html">
                                        <div class="item-logo">
                                            <div class="image-left">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                            <div class="text-info-right">
                                                <h4>Market Research</h4>
                                                <p class="font-xs">532<span> Jobs Available</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box futured_jobs mt-20">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Lorem ipsum dolor
                        sit amet
                        elit, sed do eiusmod tempor</p>
                    <div class="list-tabs mt-40">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab"
                                    role="tab" aria-controls="tab-job-1" aria-selected="true">Management</a></li>
                            <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-2" aria-selected="false">Marketing
                                    &amp; Sale</a></li>
                            <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-3" aria-selected="false"> Finance</a></li>
                            <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-4" aria-selected="false">Human Resource</a>
                            </li>
                            <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-5" aria-selected="false"> Retail &amp;
                                    Products</a></li>
                            <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-job-6" aria-selected="false">Content
                                    Writer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-70">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel"
                            aria-labelledby="tab-job-1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                        </div>
                                        <span class="card-text-price">$500<b>/Hour</b> </span>
                                        <div class="btn btn-apply-now" data-bs-toggle="modal"
                                            data-bs-target="#ModalApplyJobForm">
                                            Apply now</div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">iOS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Laravel</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Golang</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-1.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Adobe XD</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Figma</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-2.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">React</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-3.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Python</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-4.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Typescript</a><a
                                                    class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-5.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span
                                                    class="card-time">4<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="jobs-grid.html">Angular</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                    class="card-time">5<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">PHP</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Android</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                    alt="joblist"></div>
                                            <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                    class="card-time">6<span>
                                                        minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="job-details.html">ASP .Net</a><a
                                                    class="btn btn-grey-small mr-5"
                                                    href="job-details.html">Figma</a>
                                            </div>
                                            <span class="card-text-price">$500<b>/Hour</b> </span>
                                            <div class="btn btn-apply-now" data-bs-toggle="modal"
                                                data-bs-target="#ModalApplyJobForm">
                                                Apply now</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box why_choose mt-95 pt-90 mb-20">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Why choose us</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">You will find
                        your ideal
                        candidates you’r looking for!</p>
                </div>
                <div class="mt-70 mb-95">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box-step step-1">
                                <h1 class="number-element">
                                    <img src="assets/imgs/template/icons/whu_choose_icon_1.png" alt="choose">
                                </h1>
                                <h4 class="mb-20">Cost Effective</h4>
                                <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed
                                    do </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-step step-2">
                                <h1 class="number-element">
                                    <img src="assets/imgs/template/icons/whu_choose_icon_2.png" alt="choose">
                                </h1>
                                <h4 class="mb-20">Easy to Use</h4>
                                <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed
                                    do </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-step border-0">
                                <h1 class="number-element">
                                    <img src="assets/imgs/template/icons/whu_choose_icon_3.png" alt="choose">
                                </h1>
                                <h4 class="mb-20">Quality Candidate</h4>
                                <p class="font-lg color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed
                                    do </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box overflow-visible mt-100 mb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <div class="content-job-inner"><span class="color-text-mutted text-32">Millions Of Jobs.
                            </span>
                            <h2 class="text-52 wow animate__animated animate__fadeInUp">Find The One That&rsquo;s
                                <span class="color-brand-2">Right</span> For You
                            </h2>
                            <div class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">Search all
                                the open
                                positions on the web. Get your own personalized salary estimate. Read reviews on over
                                600,000 companies
                                worldwide. The right job is out there.</div>
                            <div class="mt-40">
                                <div class="wow animate__animated animate__fadeInUp"><a class="btn btn-default"
                                        href="jobs-grid.html">Search Jobs</a><a class="btn btn-link"
                                        href="page-about.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <div class="box-image-job">
                            <figure class="wow animate__animated animate__fadeIn">
                                <img alt="joblist" src="assets/imgs/page/homepage1/img1.png">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box overflow-visible mt-15 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center counter_box">
                            <h1 class="color-brand-2"><span class="count">25</span></h1>
                            <h5>Completed Cases</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center counter_box">
                            <h1 class="color-brand-2"><span class="count">17</span></h1>
                            <h5>Our Office</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center counter_box">
                            <h1 class="color-brand-2"><span class="count">86</span></h1>
                            <h5>Skilled People</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="text-center counter_box">
                            <h1 class="color-brand-2"><span class="count">28</span></h1>
                            <h5>CHappy Clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box recruiters mt-60">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Recruiters</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your
                        next career
                        move, freelance gig, or internship</p>
                </div>
            </div>
            <div class="container">
                <div class="box-swiper mt-50">
                    <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-1.png"></div>
                                            <div class="text-info-right">
                                                <h4>Linkedin</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">25<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-2.png"></div>
                                            <div class="text-info-right">
                                                <h4>Adobe</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">17<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-3.png"></div>
                                            <div class="text-info-right">
                                                <h4>Dailymotion</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">65<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-4.png"></div>
                                            <div class="text-info-right">
                                                <h4>NewSum</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">25<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-5.png"></div>
                                            <div class="text-info-right">
                                                <h4>PowerHome</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">34<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-6.png"></div>
                                            <div class="text-info-right">
                                                <h4>Whop.com</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">56<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-7.png"></div>
                                            <div class="text-info-right">
                                                <h4>Greewood</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">78<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-8.png"></div>
                                            <div class="text-info-right">
                                                <h4>Kentucky</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">98<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-9.png"></div>
                                            <div class="text-info-right">
                                                <h4>Qeuity</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">90<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-10.png"></div>
                                            <div class="text-info-right">
                                                <h4>Honda</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">34<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-5.png"></div>
                                            <div class="text-info-right">
                                                <h4>Toyota</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">26<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-3.png"></div>
                                            <div class="text-info-right">
                                                <h4>Lexuxs</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">54<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-6.png"></div>
                                            <div class="text-info-right">
                                                <h4>Ondo</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">58<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-2.png"></div>
                                            <div class="text-info-right">
                                                <h4>Square</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">37<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                                <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                        href="#">
                                        <div class="item-logo">
                                            <div class="image-left"><img alt="joblist"
                                                    src="assets/imgs/brands/brand-8.png"></div>
                                            <div class="text-info-right">
                                                <h4>Vista</h4><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><img alt="joblist"
                                                    src="assets/imgs/template/icons/star.svg"><span
                                                    class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span></span>
                                            </div>
                                            <div class="text-info-bottom mt-5"><span
                                                    class="font-xs color-text-mutted icon-location">New York,
                                                    US</span><span
                                                    class="font-xs color-text-mutted float-end mt-5">43<span> Open
                                                        Jobs</span></span></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-1"></div>
                    <div class="swiper-button-prev swiper-button-prev-1"></div>
                </div>
            </div>
        </section>

        <section class="section-box mt-90">
            <div class="container">
                <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Pricing Plan</h2>
                <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">Choose
                    The Best
                    Plan That&rsquo;s For You</div>
                <div class="max-width-price">
                    <div class="block-pricing mt-70">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeInUp">
                                <div class="box-pricing-item">
                                    <h3>Basic</h3>
                                    <div class="box-info-price"><span
                                            class="text-price color-brand-2">$19</span><span
                                            class="text-month">/month</span></div>
                                    <ul class="list-package-feature">
                                        <li>Unlimited updates</li>
                                        <li>Custom designs &amp; features</li>
                                        <li>Custom permissions</li>
                                        <li>Custom instructors</li>
                                        <li>Free support ticket</li>
                                    </ul>
                                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeInUp">
                                <div class="box-pricing-item">
                                    <h3>Standard</h3>
                                    <div class="box-info-price"><span
                                            class="text-price for-month display-month">$29</span><span
                                            class="text-month">/month</span></div>
                                    <ul class="list-package-feature">
                                        <li>Unlimited updates</li>
                                        <li>Custom designs &amp; features</li>
                                        <li>Custom permissions</li>
                                        <li>Custom instructors</li>
                                        <li>Free support ticket</li>
                                    </ul>
                                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeInUp">
                                <div class="box-pricing-item">
                                    <h3>Enterpr&imath;se</h3>
                                    <div class="box-info-price"><span
                                            class="text-price for-month display-month">$49</span><span
                                            class="text-month">/month</span></div>
                                    <ul class="list-package-feature">
                                        <li>Unlimited updates</li>
                                        <li>Custom designs &amp; features</li>
                                        <li>Custom permissions</li>
                                        <li>Custom instructors</li>
                                        <li>Free support ticket</li>
                                    </ul>
                                    <div><a class="btn btn-border" href="#">Choose plan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-80">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs by Location</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find your
                        favourite jobs and
                        get the benefits of yourself</p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-50">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location1.png);"><span
                                        class="lbl-hot">Hot</span></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Paris, France</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">120 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location2.png);"><span
                                        class="lbl-hot">Trending</span></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>London, England</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">68 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location3.png);"><span
                                        class="lbl-hot">Hot</span></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>New York, USA</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">9
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">80 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location4.png);"></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Amsterdam, Holland</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">16
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">86 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location5.png);"></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Copenhagen, Denmark</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">39
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">186 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location6.png);"></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Berlin, Germany</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">15
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">632 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location7.jpg);"><span
                                        class="lbl-hot">Hot</span></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>Paris, France</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">120 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="card-image-top hover-up"><a href="jobs-grid.html">
                                <div class="image"
                                    style="background-image: url(assets/imgs/page/homepage1/location8.png);"><span
                                        class="lbl-hot">Trending</span></div>
                            </a>
                            <div class="informations"><a href="jobs-grid.html">
                                    <h5>London, England</h5>
                                </a>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7
                                            Vacancy</span></div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="color-text-paragraph-2 text-14">68 companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-85">
            <div class="section-box wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">What Say Our Clients
                        </h2>
                        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Thousands of
                            employee get
                            their ideal jobs<br class="d-none d-lg-block">and feed back to us!</p>
                    </div>
                    <div class="box-swiper mt-50">
                        <div class="swiper-container swiper-group-4-border swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review">
                                            <img src="assets/imgs/page/homepage4/user.png" alt="joblist">
                                            <div class="review-name">
                                                <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid
                                                unt. Labore et dolore nostrud temp exercitation.</div>
                                            <div class="review-rating"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review">
                                            <img src="assets/imgs/page/homepage4/user2.png" alt="joblist">
                                            <div class="review-name">
                                                <h5>John Smith</h5><span class="font-xs">Product designer</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid
                                                unt. Labore et dolore nostrud temp exercitation.</div>
                                            <div class="review-rating"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review">
                                            <img src="assets/imgs/page/homepage4/user3.png" alt="joblist">
                                            <div class="review-name">
                                                <h5>Sayen Ahmod</h5><span class="font-xs">Developer</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid
                                                unt. Labore et dolore nostrud temp exercitation.</div>
                                            <div class="review-rating"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review">
                                            <img src="assets/imgs/page/homepage4/user4.png" alt="joblist">
                                            <div class="review-name">
                                                <h5>Tayla Swef</h5><span class="font-xs">Graphic designer</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid
                                                unt. Labore et dolore nostrud temp exercitation.</div>
                                            <div class="review-rating"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide hover-up">
                                    <div class="card-review-1">
                                        <div class="image-review">
                                            <img src="assets/imgs/page/homepage4/user.png" alt="joblist">
                                            <div class="review-name">
                                                <h5>Ellis Kim</h5><span class="font-xs">Digital Artist</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <div class="review-comment">Sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incidid
                                                unt. Labore et dolore nostrud temp exercitation.</div>
                                            <div class="review-rating"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"> <img
                                                    src="assets/imgs/template/icons/star.svg" alt="joblist"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-style-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-90 mb-50">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News And Blog</h2>
                    <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest
                        news, updates
                        and tips</p>
                </div>
            </div>
            <div class="container">
                <div class="mt-50">
                    <div class="box-swiper style-nav-top">
                        <div class="swiper-container swiper-group-3 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="joblist"
                                                        src="assets/imgs/page/homepage1/img-news1.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great
                                                    Impression</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most
                                                sustainable healthcare company</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Sarah
                                                                    Harding</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs"><i
                                                                class="far fa-comments"></i> 120</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="joblist"
                                                        src="assets/imgs/page/homepage1/img-news2.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in
                                                    a Job Interview</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most
                                                sustainable healthcare company</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Steven
                                                                    Jobs</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs"><i
                                                                class="far fa-comments"></i> 96</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                        <div class="text-center card-grid-3-image"><a href="#">
                                                <figure><img alt="joblist"
                                                        src="assets/imgs/page/homepage1/img-news3.png"></figure>
                                            </a></div>
                                        <div class="card-block-info">
                                            <h5><a href="blog-details.html">Interview Question: Why Dont You Have a
                                                    Degree?</a></h5>
                                            <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the
                                                world&amp;rsquo;s most
                                                sustainable healthcare company</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-6">
                                                        <div class="d-flex">
                                                            <div class="info-right-img"><span
                                                                    class="font-sm font-bold color-brand-1 op-70">Wiliam
                                                                    Kend</span><br><span
                                                                    class="font-xs color-text-paragraph-2">06
                                                                    September</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                            class="color-text-paragraph-2 font-xs"><i
                                                                class="far fa-comments"></i> 245</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/plugins/counterup.js"></script>
    </main>

    <section class="section-box subscription_box">
        <div class="container">
            <div class="box-newsletter">
                <div class="newsletter_textarea">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="text-md-newsletter">Subscribe our newsletter</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-form-newsletter">
                                <form class="form-newsletter">
                                    <input class="input-newsletter" type="text" value=""
                                        placeholder="Enter your email here">
                                    <button class="btn btn-default font-heading">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer pt-165">
        <div class="container">
            <div class="row justify-content-between">
                <div class="footer-col-1 col-md-3 col-sm-12">
                    <a class="footer_logo" href="index.html">
                        <img alt="joblist" src="assets/imgs/template/logo_2.png">
                    </a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2">joblist is the heart of the design
                        community and the
                        best resource to discover and connect with designers and jobs worldwide.</div>
                    <div class="footer-social">
                        <a class="icon-socials icon-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="icon-socials icon-twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="icon-socials icon-linkedin" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <h6 class="mb-20">Resources</h6>
                    <ul class="menu-footer">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-3 col-md-2 col-xs-6">
                    <h6 class="mb-20">Community</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Credit</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-4 col-md-2 col-xs-6">
                    <h6 class="mb-20">Quick links</h6>
                    <ul class="menu-footer">
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Desktop</a></li>
                    </ul>
                </div>
                <div class="footer-col-5 col-md-2 col-xs-6">
                    <h6 class="mb-20">More</h6>
                    <ul class="menu-footer">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; 2023. JOBLIST
                            all right
                            reserved</span></div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy
                                Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms
                                &amp; Conditions</a><a class="font-xs color-text-paragraph"
                                href="#">Security</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/Font-Awesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js?v=4.1') }}"></script>
</body>

</html>
