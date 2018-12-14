<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
        <link rel="stylesheet" id="bulma-css" href="<?=get_stylesheet_directory_uri();?>/css/bulma.min.css" type="text/css" media="all">
        <link rel="stylesheet" id="custom-login-css" href="<?=get_stylesheet_directory_uri();?>/css/custom-login.css" type="text/css" media="all">
  </head>
  <body style='margin: 0;height: 100%;'>
        <div class="columns section-container text-center">
                <div class="column is-three-quarters bg-section" style="background-image:url('<?=get_stylesheet_directory_uri() . '/images/bg-lambo.jpg';?>')">
                        <div class='bg-shadow'></div>
                </div>
                <div class='column section-login'>
                        <div id="login" class='login'>
                               <?php echo do_shortcode("[bbp-login]"); ?>
                       </div>
               </div>
        </div>
  </body>
</html>