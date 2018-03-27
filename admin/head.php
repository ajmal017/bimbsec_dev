

<?php
  session_start();
  include_once('../connect.php');
  include_once '../function.php';
  date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#164d34">



    <title>Administration Panel</title>

    <meta name="robots" content="nofollow,noindex"/>
    <meta name="keyword" content="investment for education, islamic investment, islamic stockbroking, islamic po, islamic bursa, shariah advisor, shariah adviser">
    <meta name="description" content="<?php if ( isset($_GET['p']) ) {
                echo get_page_info($conn,$_GET['p'],'description','Malaysian First Full-fledged Islamic Stockbroking Company'); 
              }
        ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/029ae258d3.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css" crossorigin="anonymous">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="../vendor/custom/style.css">

    <!-- CodeMirror -->
    <link rel="stylesheet" href="../vendor/codemirror/lib/codemirror.css">

    <!-- Animate -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>


    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61306911-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-61306911-6');
    </script>


    <!-- PWA -->
    <script type="text/javascript">
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw-test/sw.js', {scope: '/sw-test/'})
        .then(function(reg) {
          // registration worked
          console.log('Registration succeeded. Scope is ' + reg.scope);
        }).catch(function(error) {
          // registration failed
          console.log('Registration failed with ' + error);
        });
      }
    </script>


    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
    
    <meta name="theme-color" content="#80b3ff">
  </head>