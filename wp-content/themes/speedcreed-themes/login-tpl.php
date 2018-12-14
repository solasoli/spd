<?php

/*  Template Name: Login Template */

require( dirname(__ABSPATH__) . '/wp-load.php' );

if ( force_ssl_admin() && ! is_ssl() ) {
	if ( 0 === strpos($_SERVER['REQUEST_URI'], 'http') ) {
		wp_safe_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
		exit();
	} else {
		wp_safe_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
		exit();
	}
}

if ( ! is_wp_error( $wp_error ) ) {
    $wp_error = new WP_Error();
}

$shake_error_codes = array( 
    'empty_password',
    'empty_email',
    'invalid_email',
    'invalidcombo', 
    'empty_username', 
    'invalid_username', 
    'incorrect_password' );

$shake_error_codes = apply_filters( 
        'shake_error_codes', 
        $shake_error_codes );

if ( $shake_error_codes && $wp_error->get_error_code() && in_array( $wp_error->get_error_code(), $shake_error_codes ) )
add_action( 'login_head', 'wp_shake_js', 12 );

?>

<!DOCTYPE html>
<?php ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Speedcreed Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/login-css.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php

wp_enqueue_style('login-css');
if ( 'loggedout' == $wp_error->get_error_code() ) {
    ?>
    <script>if("sessionStorage" in window){try{for(var key in sessionStorage){if(key.indexOf("wp-autosave-")!=-1){sessionStorage.removeItem(key)}}}catch(e){}};</script>

<!-- lanjut disini besok
    cari tutupan php biar ga error
-->
</head>
<body>
    
</body>
</html>

