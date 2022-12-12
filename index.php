<?php

require_once './config/db.php';
require_once './controller/News.Controller.php';

$controllerNews = new NewsController();

if (isset($_GET['getNews'])) {
    $controllerNews->getNews();
}