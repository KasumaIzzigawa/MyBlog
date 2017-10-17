<?php
if ( isset($_GET['url']) ) {
    $params = explode('/', filter_var(rtrim($_GET['url'], '/')));

        if ( count($params) > 0 ) {
            $controller = strtolower($params[0]);

            include 'application/controllers/' . $controller . '.php';
        }
}
else {
    include 'application/controllers/home.php';
}
?>