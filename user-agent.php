<html>
    <head>
        <title>Drew's Playground - User Agent</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified Twitter Bootstrap CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="template.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="site-wrapper">
          <div class="site-wrapper-inner">
            <div class="container">
              <div class="starter-template">
                <h1>You are using:</h1>
                <?php echo '<p>'. $_SERVER['HTTP_USER_AGENT'] .'</p>'; ?>
              </div>
              <h3>$_SERVER</h3>
              <pre>
                <?php foreach ($_SERVER as $key => $value) {
                  echo $key . ' = ' . $value;
                  echo '</br>';
                } ?>
              </pre>
            </div>
          </div>
        </div>
        <!-- jQuery CDN -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <!-- Latest compiled and minified Twitter Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>

</html>
