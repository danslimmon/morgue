<?php
/**
 * Routes for username_from_apache
 */
$app->get('/username_from_apache', function () use ($app) {

    $content = "username_from_apache/views/username_from_apache";
    $page_title = "username_from_apache";
    $show_sidebar = false;

    include "views/page.php";
});
