<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gayatri Infotech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- boostrap link -->
  <link rel="stylesheet " href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arial+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap 5 CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script src="assets/vendor/jquery/jquery.min.js"></script>

  <link rel="stylesheet" href="{{asset('front/'.$linkvar.'.css')}}">

  <meta name="csrf-token" content="{{ csrf_token() }}">  
</head>
<body>
  <div class="topbar-area fix hidden-xs">
    <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="topbar-left">
                <ul>
                  <li><a href="mailto:info@gayatriinfotech.com"><i class="fa fa-envelope"></i>info@gayatriinfotech.com</a></li>
                  <li><a href="callto:+91 9422781840"><i class="fa fa-phone"></i> +91 9422781840</a></li>
                  <li><a href="#."><i class="fa fa-map-marker"></i> Near New WIT College, Solapur.</a></li>
              </ul>
              </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="top-social">
              <ul>
                <li><a href="https://www.facebook.com/vertextechnosys"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/vertextechnosys/"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#."><i class="fa fa-instagram"></i></a></li>
                <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#."><i class="fa fa-google"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
</div> 
<header class="main_menu home_menu menu_fixed">
  <div class="container nav-section">
    <nav class="navbar navbar-expand-lg fill main_menu_fixed navbar-light">
      <div class="container">
        <a class="navbar-brand mt-2" href="#">
          <img src="img/logo.png" alt="logo" style="width: 120px; height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
          <ul class="navbar-nav nav-links ms-auto mb-2 mb-lg-0 justify-content-end" style="margin-right: 10px;">
            <li class="nav-item {{ Request::is('/')?'active':''}}">
              <a class="nav-link" href="/">Home</a>
            </li>  
            <li class="nav-item {{ Request::is('about')?'active':''}}">
              <a class="nav-link" href="/about" style="width: 100%;">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('faculty')?'active':''}}">
              <a class="nav-link" href="/faculties" style="width: 100%;">faculty</a>
            </li>
            <li class="nav-item {{ Request::is('courses')?'active':''}}">
              <a class="nav-link" href="/courses" style="width: 100%;">courses</a>
            </li>
            <li class="nav-item {{ Request::is('gallery')?'active':''}}"> 
            <a class="nav-link" href="/gallery" style="width: 100%;">gallery</a>
            </li>   
            <li class="nav-item {{ Request::is('contact')?'active':''}}">
              <a class="nav-link" href="/contact" style="width: 100%;"
              > Contact Us</a>
            </li>       
            <li class="nav-item {{ Request::is('register')?'active':''}}">
              <a class="nav-link" href="/register" style="width: 100%;"
              > Register</a>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>


@yield('content')


<footer>
      <div class="footer-section">
          <div class="container mt-5">
              <div class="row">
                  <div class="col-md-3 col-sm-6">
                      <div class="footer-text1 mb-4">
                          <h2 class="footer-heading">About Gayatri Infotech</h2>
                          <p class=" py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>

                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="footer-text1 mb-4">
                          <h2 class="footer-heading">Quick Links</h2>
                          <ul class="list-unstyled">
                              <li><a href="#" class="d-block py-2">Faculty</a></li>
                              <li><a href="#" class="d-block py-2">Courses</a></li>
                              <li><a href="#" class="d-block py-2">Gallery</a></li>
                              <li><a href="#" class="d-block py-2">Contact Us</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="footer-text1">
                          <h2 class="footer-heading">Opening Hours</h2>
                          <div class="d-flex">
                              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="d-block py-2">Mon - Sat : 09.00 am - 09.00 pm </a></li>
                                <li><a href="#" class="d-block py-2">Lunch Break : 02.00 pm - 03.00 pm</a></li>
                                <li><a href="#" class="d-block py-2">Sunday : Holiday</a></li>
                                 <ul class="footer-social-media list-unstyled float-md-left">
                                <li>
                                    <a href="#" ><span class="fa fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-facebook" style="padding: 8px 11px;"></span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="fa fa-google"></span></a>
                                </li>
                                <li>
                                  <a href="#"><span class="fa fa-linkedin"></span></a>
                              </li>
                            </ul>
                              </ul>
                             
                              
                              </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="footer-text1 mb-4">
                          <h2 class="footer-heading">Contact</h2>
                          <div class="widget">
                           
                            <ul class="list-unstyled quick-info links">
                              <li class="email"><a href="#"><span class="material-icons py-2">place</span>Markandeya Yantramag Society, Upahar Bakery Lane, Solapur, Maharashtra - 413006.</a></li>
                              <li class="phone"><a href="#"><span class="material-icons  py-2">email</span> info@gayatriinfotech.com</a></li>
                              <li class="address"><a href="#"> <span class="material-icons  py-2">phone</span> +91 98231 40574</a></li>
                            </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="container">
              <hr>
              <div class="row">
                  <div class="col-md-6 left-content">
                      
                      <p>
                        © Copyright <script>document.write(new Date().getFullYear());</script> All rights Reserved By Gayatri Infotech</a>
                      </p>
                  </div>
                  <div class="col-md-6 right-content">
                    <p>Designed &amp; Developed by <a href="http://www.vertextechnosys.com/" target="_blank">Vertex Technosys.</a></p>
                  </div>
              </div>
            </div>
  </div>
      
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>


    <!-- <script>
      $(function() {
          $( "#datepicker" ).datepicker({dateFormat: 'yy'});
      });
    </script> -->

    <script>
      var firebaseConfig= {
        apiKey: "AIzaSyDmppZedDAKtYFjfgm8mxmWhrHZGSLMryM",
        authDomain: "gayatri-infotech.firebaseapp.com",
        projectId: "gayatri-infotech",
        storageBucket: "gayatri-infotech.appspot.com",
        messagingSenderId: "887429507941",
        appId: "1:887429507941:web:c8ef7a3381e67d9e194f8c",
        measurementId: "G-9L7CZPL56M"
      }


      firebase.initializeApp(firebaseConfig);

    </script>

    <script type="text/javascript">
      window.onload = function(){
        render();
      }

      function render(){
          window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
          recaptchaVerifier.render();
      }

      function sendCode(){

            var number = $('#number').val();

            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){

                window.confirmationResult = confirmationResult;

                coderesult = confirmationResult;

                $('#sentMessage').text('Otp Sent Successfully');
                $('#sentMessage').show();

            }).catch(function(error){
                $('#error').text(error.message);
                $('#error').show();
            });
      }

      function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
                
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }

    </script>
  
  </body>
</html>