<!DOCTYPE html>
<html>
<?php wp_head(); ?>
  <head>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  

  <div class="container">
    <div class="row">
      <div class="col-md-12 header">
        Header
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 main-content">
        Main Content
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 footer">
        Footer
      </div>
    </div>
  </div>
    

<?php wp_footer(); ?>
  </body>
</html>