<?php ; wp_head();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
</head>
<style>
    body{
    background: url(<?php echo get_template_directory_uri();?>/images/404.jpg) no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    }    
</style>
<body>
  
   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-danger">Go Back To Home</a>
</body>
</html>
<?php wp_footer();?>