<?php
require_once './model/News.php';
class NewsController {
    public function getNews(){
        $News = new News();
        $noticias = $News->getListNews();
        $listNews = [];
        while ($noticia = $noticias->fetch_object()) {
            $parrafos = $News->getListParrafos($noticia->id_new);
            array_push($listNews,["title" => $noticia->title, "image" => $noticia->image, "parrafos" => $parrafos]);
        }
        echo json_encode($listNews);
        //var_dump($parrafos);
    }
}