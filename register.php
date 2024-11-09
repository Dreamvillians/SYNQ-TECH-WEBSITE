<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Registration failed: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <base href="./">
    <title>LOGIN - SYNQ TECH</title>
    <meta property="og:title" content="LOGIN - SYNQ TECH" />
    <meta name="twitter:title" content="LOGIN - SYNQ TECH" />
    <link rel="icon" sizes="any" href="assets/svg/favicon-default.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="css/slides-customized.min.css?p=eu3pl4hW&rnd=583420" rel="stylesheet" type="text/css" id="js-slides-css">

    
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font" href="https://fonts.googleapis.com/css2?family=Material+Icons&display=swap" id="js-google-fonts" />
    <style id="js-slides-fonts">
        .slides { font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }
    </style>
<link href="css/custom_z135rF9J.css?p=eu3pl4hW&rnd=553291" rel="stylesheet" type="text/css">    
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
</nav><!-- Slide 109 (#1) -->
<section data-cid="slide-109-1b700655" class="slide fade-6">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-12-12">
          <ul class="flex verticalCenter">
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 padding-top-10 padding-top-phablet-0 padding-bottom-10 padding-bottom-phablet-5 align-left">
              <h1 class="margin-bottom-2 ae-1">Complete Followings</h1>
              <ul class="flex">
                <li class="col-11-12 col-tablet-1-1">
                  <p class="margin-bottom-5 large opacity-8 ae-2">When storms rage, when winds howl, remain firm like&nbsp;a rock. You will outlast every&nbsp;uprising.</p>
                </li>
              </ul>
              <ol class="list-109">
                <li class="margin-bottom-2 padding-left-7 active ae-3"><h4 class="crop smallest">Sign In with your&nbsp;account</h4></li>
                <li class="margin-bottom-2 padding-left-7 ae-4"><h4 class="crop smallest opacity-6">Choose your&nbsp;plan</h4></li>
                <li class="margin-bottom-2 padding-left-7 ae-5"><h4 class="crop smallest opacity-6">Create first&nbsp;project</h4></li>
                <li class="padding-left-7 ae-6"><h4 class="crop smallest opacity-6">Build amazing&nbsp;experiences</h4></li>
              </ol>
            </li> 
            <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 toRight">
              <div class="pad pad-109 padding-5 padding-tablet-3 padding-phone-2 shadow ae-7">
                <form class="slides-form wide align-left" action="ajax-email.php" method="post" autocomplete="on" data-ajax-form="true">
                  <img src="assets/img/gallery-109.jpg" alt="Picture" class="round margin-bottom-5 margin-bottom-tablet-3" />
                  <h2 class="margin-bottom-3 smallest">Sign In</h2>
                  <div class="margin-bottom-1 label">
                    <label class="crop opacity-5" for="email109">Email address</label>
                  </div>
                  <input class="crop rounded wide" id="email109" type="email" name="email" placeholder="Email address" required/>
                  <div class="margin-bottom-1 margin-top-2 label">
                    <label class="crop opacity-5" for="password109">Password</label>
                  </div>
                  <input class="crop rounded wide" id="password109" type="password" name="password" placeholder="Password" required/>
                  <button type="submit" class="crop margin-top-5 button rounded green wide" name="button">Sign In</button>
                  <p class="cropBottom margin-top-2 small align-center">
                    <a href="#">Forgot your password?</a>
                  </p>
                </form>                      
              </div>          
            </li>
          </ul>       
        </div>
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/img-109.jpg)"></div> 
</section>
<!-- Example Recaptcha (#2) -->
<div data-cid="example-PQHITWse-97c56f4d">
<!-- STEP 1: Register your domain https://cl.ly/k58o
     https://www.google.com/recaptcha/admin -->

<!-- STEP 2: Modify the AJAX-EMAIL.PHP script: https://cl.ly/k6K0 (code: https://cl.ly/k6LS)  -->

<!-- STEP 3: Update the form with your data-sitekey: https://cl.ly/k5Mz -->
<section class="slide fade-6 kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <h1 class="ae-1">Say Hello</h1>
        <div class="ae-2"><p>Feel free to ask anything about our products.</p></div>
        <div class="fix-4-12 margin-top-6">
          <div class="pad shadow selected ae-3">
            <form class="slides-form wide center" action="ajax-email.php" method="post" data-ajax-form="true">
              <div class="label ae-4 cropTop"><label class="cropTop opacity-5" for="name55">Your name</label></div>
              <input class="stroke ae-4 wide" id="name55" type="name" name="name" placeholder="Name" required/>
              <div class="label ae-5"><label class="opacity-5" for="email55">Email address</label></div>
              <input class="stroke ae-5 wide" id="email55" type="email" name="email" placeholder="Email" required/>
              <div class="label ae-6"><label class="opacity-5" for="message55">Message</label></div>
              <textarea class="left ae-6 wide" id="message55" type="text" name="message" placeholder="Message" required></textarea>
              <div class="g-recaptcha margin-top-2 ae-7" data-sitekey="6Ld5yh0UAAAAAPTnJt2OMiO2WCEW1ZfX1txqQa6J"></div>
              <input class="button wide green rounded ae-8 margin-top-2 cropBottom" type="submit" name="submit" value="Send message" data-success-text="Done!" data-success-class="green"/>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/img-55.jpg)"></div>
</section>
</div>
<!-- jQuery 3.6.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Compressed Scripts -->
    <script src="js/slides.min.js?62360" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>    
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = '';
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with//" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->


</body>
</html>
