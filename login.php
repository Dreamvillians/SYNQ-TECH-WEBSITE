<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid email or password!";
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
    <link href="css/slides-customized.min.css?p=eu3pl4hW&rnd=704525" rel="stylesheet" type="text/css" id="js-slides-css">

    
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font" href="https://fonts.googleapis.com/css2?family=Material+Icons&display=swap" id="js-google-fonts" />
    <style id="js-slides-fonts">
        .slides { font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif; }
    </style>
<link href="css/custom_pztuIacK.css?p=eu3pl4hW&rnd=324527" rel="stylesheet" type="text/css">    
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
</nav><!-- SIGN IN (#1) -->
<section data-cid="slide-109-17374755" class="slide fade-6">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-12-12">
          <ul class="flex verticalCenter">
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 padding-top-10 padding-top-phablet-0 padding-bottom-10 padding-bottom-phablet-5 align-left">
              <h1 class="margin-bottom-2 ae-1">Complete Followings</h1>
              <ul class="flex">
              </ul>
              <ol class="list-109">
                <li class="margin-bottom-2 padding-left-7 active ae-3"><h4 class="crop smallest">Sign In with your&nbsp;account</h4></li>
                <li class="margin-bottom-2 padding-left-7 ae-4"><h4 class="crop smallest opacity-6">Choose your&nbsp;plan</h4></li>
                <li class="margin-bottom-2 padding-left-7 ae-5"><h4 class="crop smallest opacity-6">Get your SYNQ &nbsp;TECH BUSINESS CARD</h4></li>
                <li class="padding-left-7 ae-6"><h4 class="crop smallest opacity-6">Build amazing&nbsp;experiences</h4></li>
              </ol>
            </li> 
            <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 toRight">
              <div class="pad pad-109 padding-5 padding-tablet-3 padding-phone-2 shadow ae-7">
                <form class="slides-form wide align-left" action="ajax-email.php" method="post" autocomplete="on" data-ajax-form="true">
                 <div style="display: flex; justify-content: center;">
    <img src="assets/uploads/white.jpg?p=eu3pl4hW" alt="Picture" style="width: 50px; height: auto;" class="round margin-bottom-5 margin-bottom-tablet-3" />
</div>

                  <h2 class="margin-bottom-3 smallest" style="display: flex; justify-content: center;" >Sign In</h2>
                  <div class="margin-bottom-1 label">
                    <label class="crop opacity-5" for="email109">Email address</label>
                  </div>
                  <input class="crop rounded wide" id="email109" type="email" name="email" placeholder="Email address" required/>
 <div class="margin-bottom-1 margin-top-2 label">
  <label class="crop opacity-5" for="password109">Password</label>
</div>

<div class="password-container">
  <input type="password" id="password109" placeholder="Enter your password" required/>
  <span id="togglePassword109" class="eye">
    <img src="https://img.icons8.com/ios-glyphs/30/000000/visible--v1.png" alt="Show Password" />
  </span>
</div>
                  
                 <div class="social-sign-in">
  <button class="google-button wide">
    <img href="user-interface.html" src="assets/uploads/1298745-google-brand-branding-logo-network-icon.png?p=eu3pl4hW" alt="Google Icon" />
    Continue With Google
  </button>
  <button class="linkedin-button wide">
    <img src="assets/uploads/5296501-linkedin-network-linkedin-logo-icon-1.png?p=eu3pl4hW" alt="LinkedIn Icon" />
    Continue With LinkedIn
  </button>
</div>
                  
                  <button href="user-interface.html" type="submit" class="crop margin-top-5 button rounded green wide" name="button">Sign In</button>
                  <p class="cropBottom margin-top-2 small align-center">
                    <a href="user-interface.html">Forgot your password?</a>
                  </p> <br>
                  <p>
  By continuing you agree to SYNQ TECH's 
  <a href="#" class="link">Terms Of Service</a> and 
  <a href="#" class="link">Privacy Policy</a>.
</p>

                </form>                      
              </div>          
            </li>
          </ul>       
        </div>
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/uploads/blackwoman.jpg?p=eu3pl4hW)"></div> 
</section>
<!-- SIGN UP (#2) -->
<section data-cid="slide-108-3155af7c" class="slide fade-6">
  <div class="content">
		<div class="container">
      <div class="wrap">
        <div class="fix-12-12 align-left">
		      <ul class="margin-bottom-3 flex verticalCenter">
		        <li class="col-5-12 col-tablet-3-4 col-phablet-1-1 col-phone-1-1">
		          <h1 class="margin-bottom-2 smaller ae-1">It’s Almost Created</h1>
		          <p class="opacity-8 ae-1" style="color:white">Be a part of our community, so please folllow next steps to tell your experience of our&nbsp;product.</p>
		        </li>
		        <li class="col-7-12 col-tablet-1-4 col-phablet-1-1 col-phone-1-1 margin-top-phablet-2 phablet-align-left align-right">
		          <img src="assets/img/gallery-108.jpg" alt="Picture" class="round ae-2" />
		        </li>
		      </ul>
		      <div class="margin-bottom-3">
		        <div class="margin-bottom-2 margin-right-3 inlineBlock step-container-108 ae-1">
		          <div class="margin-right-2 inlineBlock">
		            <span class="step-number-108 round active">
		              <h4 class="smaller crop">1</h4>
		            </span>
		          </div>
		          <h4 class="smallest inlineBlock crop"><a href="#">Registration</a></h4>    
		        </div>
		        <div class="margin-bottom-2 margin-right-3 inlineBlock step-container-108 ae-2">
		          <div class="margin-right-2 inlineBlock">
		            <span class="step-number-108 round active">
		              <h4 class="smaller crop">2</h4>
		            </span>
		          </div>
		          <h4 class="smallest inlineBlock crop"><a href="#">Confirmation</a></h4>
		        </div>      
		        <div class="margin-bottom-2 margin-right-3 inlineBlock step-container-108 ae-3">
		          <div class="margin-right-2 inlineBlock">
		            <span class="step-number-108 round">
		              <h4 class="smaller crop">3</h4>
		            </span>
		          </div>
		          <h4 class="smallest opacity-6 inlineBlock crop"><a href="#">Terms and&nbsp;Rules</a></h4>
		        </div>
		        <div class="margin-bottom-2 inlineBlock step-container-108 ae-4">
		          <div class="margin-right-2 inlineBlock">
		            <span class="step-number-108 round">
		              <h4 class="smaller crop">4</h4>
		            </span>
		          </div>
		          <h4 class="smallest opacity-6 inlineBlock crop"><a href="#">Start Using</a></h4>                  
		        </div>
		      </div>
		      <ul class="flex verticalCenter">
		        <li class="col-4-12 col-tablet-1-1 col-phablet-1-1 col-phone-1-1">
		          <div class="fix-4-12 pad shadow ae-5">
		            <form class="slides-form wide align-left" action="ajax-email.php" method="post" autocomplete="on" data-ajax-form="true">
		              <div class="label cropTop">
		                <label class="cropTop opacity-5" for="email108">Email address</label>
		              </div>
		              <input class="rounded wide cropBottom" id="email108" type="email" name="email" placeholder="Email address" required/>
		              <div class="label margin-top-2">
		                <label class="opacity-5" for="password108">Password</label>
		              </div>
		              <input class="rounded wide cropBottom" id="password108" type="password" name="password" placeholder="Password" required/>
		              <div class="label margin-top-2">
		                <label class="opacity-5" for="verify-password108">Verify Password</label>
		              </div>
		              <input class="rounded wide cropBottom" id="verify-password108" type="password" name="password" placeholder="Password" required/>
		              <button  type="submit" class="margin-top-4 button rounded blue wide cropBottom" name="button">Sign Up</button>
		            </form>                      
		          </div>
		        </li>
		        <li class="col-8-12 col-tablet-1-1 col-phablet-1-1 col-phone-1-1 margin-top-tablet-5 ae-6">
		          <div class="padding-left-5 padding-left-tablet-0 align-left">
		            <h4 class="margin-bottom-2 smallest">Terms & Conditions</h4>
		            <p class="margin-bottom-5 opacity-8"  style="color:white">Please read these Terms and Conditions (“Terms”, “Terms and Conditions”) carefully before using the http://designmodo.com website (the “Service”) operated by Designmodo Inc. (“us”, “we”, or “our”). Your access to and use of the Service is conditioned upon your acceptance of and compliance with these Terms. These Terms&nbsp;apply to all visitors, users and others who wish to access or use the&nbsp;Service.</p>
		            <h4 class="margin-bottom-2 smallest">Communications</h4>
		            <p class="opacity-8"  style="color:white">By creating an Account on our service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or instructions provided in any email we&nbsp;send.</p>
		          </div>
		        </li>
		      </ul>         
        </div>
      </div>
    </div>
  </div>
  <div class="background opacity-4" style="background-image:url(assets/uploads/image00034.jpg?p=eu3pl4hW)"></div> 
</section>
<!-- jQuery 3.6.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Compressed Scripts -->
    <script src="js/slides.min.js?62360" type="text/javascript"></script>
    <script src="js/custom_pztuIacK.js?p=eu3pl4hW&rnd=723511"></script>    
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
