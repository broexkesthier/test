<?
    define('BASE','/tanzloft/');
    define('JS',BASE.'js/');
    define('CSS',BASE.'css/');
    define('IMG',BASE.'img/');

    $url = $_SERVER['PHP_SELF'];
    $url = str_replace('.php','',$url);
    $urlArr = explode('/',$url);

    $urlMax = count($urlArr)-1;

    function naviActive($name){
        global $urlArr,$urlMax;
        if($urlArr[$urlMax] == $name){
            return 'active';
        }
        return '';
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tanzloft</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?=CSS?>bootstrap.min.css">
        <link rel="stylesheet" href="<?=CSS?>bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?=CSS?>main.css">

        <script src="<?=JS?>vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="<?=BASE?>" class="navbar-brand">Tanzloft</a></h1>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?=naviActive('ueber-uns')?>"><a href="<?=BASE?>ueber-uns.php">Über uns</a></li>
                        <li class="<?=naviActive('kurse')?>"><a href="<?=BASE?>kurse.php">Kurse</a></li>
                        <li class="<?=naviActive('preise')?>"><a href="<?=BASE?>preise.php">Preise</a></li>
                        <li class="<?=naviActive('aktuelles')?>"><a href="<?=BASE?>aktuelles.php">Aktuelles</a></li>
                        <li class="<?=naviActive('kontakt')?>"><a href="<?=BASE?>kontakt.php">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </header>