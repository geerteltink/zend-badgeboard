<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zend Framework Components">
    <link rel="shortcut icon" href="https://zendframework.github.io/img/favicon.ico">

    <title><?php echo $this->escape($title); ?></title>

    <link href="https://zendframework.github.io/css/bootstrap-custom.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/font-hack/2.018/css/hack.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin-ext,latin"
          rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,600,700&subset=latin-ext,latin"
        rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext"
          rel="stylesheet" type="text/css">
    <link href="https://zendframework.github.io/css/base.css" rel="stylesheet">
    <link href="https://zendframework.github.io/css/zf.css" rel="stylesheet">
    <link href="https://zendframework.github.io/css/prism-zf.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Open Sans', 'PT Sans']
            }
        });
    </script>
</head>

<body class="homepage">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Collapsed navigation -->
            <div class="navbar-header">
                <!-- Expander button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Main title -->
            <div class="navbar-brand">
                <a class="logo-link" href="http://framework.zend.com" data-toggle="tooltip" data-placement="bottom"
                   title="Zend Framework">
                    <img src="https://zendframework.github.io/img/zf-logo-mark.png" height="28"
                         alt="Zend Framework" /></a>
                <a href=".">ZF Badge Board</a>
            </div>
            </div>
            <!-- Expanded navigation -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="https://github.com/zendframework">
                            <i class="fa fa-github"></i>
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main class="container">
        <?php echo $this->section('content'); ?>
    </main>

    <footer class="col-md-12 text-center">
        <hr>
        <p>
            <small>Copyright (c) 2016 <a href="http://www.zend.com/">Zend Technologies USA Inc.</a><br></small>
        </p>
        <p>
            <small><a href="http://framework.zend.com">Learn more about Zend Framework</a></small>
        </p>
    </footer>
</body>
</html>
