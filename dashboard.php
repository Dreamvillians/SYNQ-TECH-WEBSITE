<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <base href="./">
    <title>user-interface - SYNQ TECH</title>
    <meta property="og:title" content="user-interface - SYNQ TECH" />
    <meta name="twitter:title" content="user-interface - SYNQ TECH" />
    <link rel="icon" sizes="any" href="assets/svg/favicon-default.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="css/slides-customized.min.css?p=eu3pl4hW&rnd=732019" rel="stylesheet" type="text/css" id="js-slides-css">

    
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font" href="https://fonts.googleapis.com/css2?family=Material+Icons&display=swap" id="js-google-fonts" />
    <style id="js-slides-fonts">
        .slides { font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }
    </style>
<link href="css/custom_5TYbK7L4.css?p=eu3pl4hW&rnd=584321" rel="stylesheet" type="text/css">    
    <link rel="preload" href="assets/svg/icon-set.svg?p=eu3pl4hW" as="image" type="image/svg+xml" crossorigin>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id="></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '');
</script>


</head>
<body class="slides animated noPreload">
<!-- Navigation -->
<nav class="side ">
  <div class="navigation default">
    <ul></ul>
  </div>
</nav><!-- Panel Top 03 -->
<div data-cid="panel-top-03-18e5a52b">
<div data-cid="panel-top-05-44b0a2a8">
<nav class="panel top ">
  <div class="sections desktop">
  <div class="left">
  <a href="https://yourwebsite.com" title="Slides Framework">
    <img src="assets/uploads/synq-tech-black.jpg?p=eu3pl4hW" alt="Slides Framework Logo" style="width:60px;height:60px;">
  </a>
    </div>
    <div class="center">
      <ul class="menu">
        <li><a href="index.html">HOME</a></li>
        <li><a href="how-it-works.html">HOW IT WORKS</a></li>
        <li><a href="pricing.html">PRICING</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
      </ul>
    </div>
    <div class="right"><a class="button blue rounded small" href="index.html
      ">LOG OUT</a></div>
  </div>
  <div class="sections compact hidden">
    <div class="left"><a href="#" title="Slides Framework"><svg style="width:82px;height:24px"><use href="assets/svg/icons.svg#logo"></use></svg></a></div>
    <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use href="assets/svg/icons.svg#menu"></use></svg></span></div>
  </div>
</nav>

<!-- Sidebar -->
<nav class="sidebar" data-sidebar-id="1">
  <div class="content">
  
 	  <div class="center"><a class="button blue rounded small" href="#">LOGIN</a>
    <ul class="mainMenu margin-top-3">
      <li><a href="index.html">HOME</a></li>
      <li><a href="how-it-works.html">HOW IT WORKS</a></li>
      <li><a href="pricing.html">PRICING</a></li>
      <li><a href="pricing.html">CONTACT US</a></li>
    </ul>
 
    
    <ul class="subMenu small opacity-8">
      <li><a href="#">FAQ</a></li>
      <li><a href="#">TERMS & CONDITIONS</a></li>
      <li><a href="#">ABOUT US</a></li>
     
    </ul>
  
    
    <ul class="social opacity-8">
      <li><a href="#"><svg><use href="assets/svg/icons.svg#facebook"></use></svg></a></li>
      <li><a href="#"><svg><use href="assets/svg/icons.svg#twitter"></use></svg></a></li>
      <li><a href="#"><svg><use href="assets/svg/icons.svg#instagram"></use></svg></a></li>
    </ul>
</div>
    </div>
  </nav>
    </div>
  </div>
  <!-- USER INTERFACE HOME (#1) -->
  <section data-cid="slide-49-95d17e55" class="slide fade-6 kenBurns">
    <div class="content">
      <div class="container">
        <div class="wrap">
        
          <div class="fix-8-12 toCenter">
            <h1 class="smaller margin-bottom-2 ae-1">Design is the silent ambassador of your&nbsp;brand.</h1>
            <p class="large ae-2"><span class="opacity-8">I shall sing that first line twice, and perhaps if I sing it very quickly, I shall find myself singing the third and fourth lines before I have time to think of them, and that will be a Good Song. You cannot not&nbsp;communicate.</span></p>
          </div>
          <div class="fix-10-12 margin-top-4">  
            <ul class="flex flex-49 later equal">
              <li class="col-4-12">
                <div class="fix-3-12">
                  <a href="settings.html"><i class="material-icons ae-3 fromCenter">settings</i></a>
                  <h4 class="small margin-bottom-1 equalElement ae-4">Settings</h4>
                  <div class="ae-5"><p class="opacity-8">Manage your NFC business card, update your password for security, and control the visibility of your contact information on your profile—all in one place to customize your experience.</p>
                </div>
              </li>
              <li class="col-4-12">
                <div class="fix-3-12 ae-4">
                  <a href="user.html"><i class="material-icons fromCenter">account_box</i></a>
                  <h4 class="small margin-bottom-1 equalElement ae-5">Profile</h4>
                  <div class="ae-6"><p class="opacity-8">Create and manage your personal profile by adding your contact details, profile picture, and a brief description. Customize your information to make a lasting impression when sharing your NFC business card.</p>
                </div>
              </li>
              <li class="col-4-12">
                <div class="fix-3-12 ae-5">
                  <a href="profile-preview.html"><i class="material-icons fromCenter">preview</i></a>
                  <h4 class="small margin-bottom-1 equalElement ae-6">Preview Profile</h4>
                  <div class="ae-7"><p class="opacity-8">Get a glimpse of how your profile will appear to others. Review your contact information and ensure everything is accurate before sharing your NFC business card. Make a strong impression with a professional presentation!</p>
                </div>
              </li>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    <div class="background opacity-5"  style="background-image:url(assets/uploads/image00034.jpg?p=eu3pl4hW)"></div>
  </section>
  <!-- jQuery 3.6.0 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- Compressed Scripts -->
      <script src="js/slides.min.js?62360" type="text/javascript"></script>
          
  <!-- Start of LiveChat (www.livechatinc.com) code -->
  <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12345678; // Replace 12345678 with your actual license ID
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n);
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)]);
            },
            once: function() {
                i(["once", c.call(arguments)]);
            },
            off: function() {
                i(["off", c.call(arguments)]);
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)]);
            },
            call: function() {
                i(["call", c.call(arguments)]);
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0;
                n.type = "text/javascript";
                n.src = "https://cdn.livechatinc.com/tracking.js";
                t.head.appendChild(n);
            }
        };
        !n.__lc.asyncInit && e.init(),
        n.LiveChatWidget = n.LiveChatWidget || e;
    })(window, document, [].slice);
  </script>

  <noscript><a href="https://www.livechatinc.com/chat-with//" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
  <!-- End of LiveChat code -->


  </body>
</html>
