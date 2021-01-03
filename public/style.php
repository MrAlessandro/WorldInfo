<?php
    require '../vendor/autoload.php';
    use ScssPhp\ScssPhp\Compiler;
    use Bootstrap\dist;

    $scss = new Compiler();
    $scss->addImportPath('./assets/stylesheets/');
    //$scss->addImportPath('../vendor/npm-asset/bootstrap/scss/');
    //echo $scss->compile('@import "bootstrap.scss";');
    echo $scss->compile('@import "style.scss";');

