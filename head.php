
<?php
  session_start();
  if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
      $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      header('HTTP/1.1 301 Moved Permanently');
      header('Location: ' . $redirect);
      exit();
  }
  include_once('connect.php');
  include_once 'function.php';
  date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="google-site-verification" content="5Yq0PTWAxIRE3sr8EB4BXSpbNegOFBRIY32CzxKH-nA" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3b96cc">



    <title>
        <?php
          if ( !isset($_GET['p']) ) {
            echo "BIMB Securities Sdn Bhd - the first full-fledged Shariah compliant stockbroking in Malaysia";
          }else{
            echo get_page_info($conn,$_GET['p'],'title','404').' - BIMB Securities Sdn Bhd'; 
          }
        ?>  
    </title>

    <meta name="robots" content="all"/>
    <meta name="keyword" content="investment for education, islamic investment, islamic stockbroking, islamic po, islamic bursa, shariah advisor, shariah adviser">
    <meta name="description" content="<?php if ( isset($_GET['p']) ) {
                echo get_page_info($conn,$_GET['p'],'description','Malaysian First Full-fledged Islamic Stockbroking Company'); 
              }else{
                echo('Malaysian First Full-fledged Islamic Stockbroking Company - Invest 4 Ummah | Opening Doors to the Shariah Capital Market');
              }
        ?>" />

    <!-- Facebook Open Graph Meta tags -->
    <meta property="fb:app_id"             content="685127985210003"/>
    <meta property="og:url"                content="<?php  if( isset($_GET['p']) ) {echo $_SERVER['SCRIPT_URI'].'?p='.$_GET['p'];} else {echo $_SERVER['SCRIPT_URI'];}  ?>" />
    <meta property="og:type"               content="business.business" />
    <meta property="og:title"              content="<?php if ( isset($_GET['p']) ) {
                echo get_page_info($conn,$_GET['p'],'title','404').' - BIMB Securities Sdn Bhd'; 
              }else{
                echo "BIMB Securities Sdn Bhd - Malaysian First Full-fledged Islamic Stockbroking Company";
              }
        ?>" />
    <meta property="og:description"        content="<?php if ( isset($_GET['p']) ) {
                echo get_page_info($conn,$_GET['p'],'description','Malaysian First Full-fledged Islamic Stockbroking Company'); 
              }
        ?>" />
    <meta property="og:image"              content="<?php if ( isset($_GET['p']) ) {
                echo 'https://www.bimbsec.com.my/bimbsec/v3/image/'.get_page_info($conn,$_GET['p'],'featured_img','logo-bimbsec-sdn-bhd.png'); 
              } else { echo('https://www.bimbsec.com.my/image/bimbsec-fb-default.jpg'); }
        ?>" />
    <meta property="business:contact_data:street_address" content="Level 32, Menara Multi Purpose, Jalan Munshi Abdullah" /> 
    <meta property="business:contact_data:locality"       content="Kuala Lumpur" /> 
    <meta property="business:contact_data:postal_code"    content="50100" /> 
    <meta property="business:contact_data:country_name"   content="Malaysia" /> 
    <meta property="place:location:latitude"              content="3.155147" /> 
    <meta property="place:location:longitude"             content="101.699167" /> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/029ae258d3.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" crossorigin="anonymous">

    <!-- CodeMirror -->
    <link rel="stylesheet" href="vendor/codemirror/lib/codemirror.css">

    <!-- Animate -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    
    <!-- Custom CSS -->
    <style type="text/css">
      <?php include_once 'vendor/custom/style.php'; ?>
    </style>

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
    
    <meta name="theme-color" content="#094d36">
  </head>